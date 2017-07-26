<?php

require_once (__DIR__.'/../Modelo/Licitacion.php');
if(!empty($_GET['action'])){
    LicitacionController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class LicitacionController
{
    static function main($action)
    {
        if ($action == "crear") {
            LicitacionController::crear();
        }

    }


    static public function crear(){
        try{
            $arrayPersona = array();
            $arrayPersona['Fecha_firma_contrato'] = $_POST ['Fecha_firma_contrato'];
            $arrayPersona['Ejecucion_Contrato']=$_POST['Ejecucion_Contrato'];
            $arrayPersona['Plazo_Ejecucion_Contrato'] = $_POST['Plazo_Ejecucion_Contrato'];
            $arrayPersona['Calificacion']=$_POST['Calificacion'];
            $arrayPersona['Estado'] = $_POST['Estado'];
            $arrayPersona['idPersona'] = $_POST['idPersona'];
            $arrayPersona['idEmpresas'] = $_POST['idEmpresas'];
            $arrayPersona['idContratos_Publicos'] = $_POST['idContratos_Publicos'];
            $Persona = new Licitacion($arrayPersona);
            $Persona->insertar();
           header("Location: ../Vista/CreateLicitacion.php?respuesta=correcto");



        }catch(Exception $e){
            //header("Location: ../Vista/CreateLicitacion.php?respuesta=error");
        }
    }



}



