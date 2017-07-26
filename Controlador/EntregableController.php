<?php

require_once (__DIR__.'/../Modelo/Entregable.php');
if(!empty($_GET['action'])){
    EntregableController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 25/07/2017
 * Time: 1:22 PM
 */
class EntregableController
{
    static function main($action)
    {
        if ($action == "crear") {
            EntregableController::crear();
        }

    }
    static public function crear(){
        try{
            $arrayPersona = array();
            $arrayPersona['Entregables_Actividad'] = $_POST ['Entregables_Actividad'];
            $arrayPersona['Fecha_Cumplimiento']=$_POST['Fecha_Cumplimiento'];
            $arrayPersona['Fecha_Entrega'] = $_POST['Fecha_Entrega'];
            $arrayPersona['Porcentaje_Entregable']=$_POST['Porcentaje_Entregable'];
            $arrayPersona['Contrato'] = $_POST['idContrato'];
            $arrayPersona['Estado'] = $_POST['Estado'];
            $arrayPersona['idLiquidacion_Contrato'] = $_POST['idLiquidacion_Contrato'];
            $Persona = new Entregable($arrayPersona);
            $Persona->insertar();
           header("Location: ../Vista/CreateEntregables.php?respuesta=correcto");
        }catch(Exception $e){
            header("Location: ../Vista/CreateEntregables.php?respuesta=error");
        }
    }


}