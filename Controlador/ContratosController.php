<?php

require_once (__DIR__.'/../Modelo/Contratos.php');

if(!empty($_GET['action'])){
    ContratosController::main($_GET['action']);
}else{
     echo "No se encontro ninguna accion...";
}

class ContratosController
{
    static function main($action){
        if ($action == "crear"){
            ContratosController::crear();
        }
    }
    static public function crear(){
        try{
            $arrayContratos = array();
            $arrayContratos['Tipo_Proceso'] = $_POST['Tipo_Proceso'];
            $arrayContratos['Estado'] = $_POST['Estado'];
            $arrayContratos['RC'] = $_POST['RC'];
            $arrayContratos['Descripcion_Objeto_Contratar'] = $_POST['Descripcion_Objeto_Contratar'];
            $arrayContratos['Cuantia'] = $_POST['Cuantia'];
            $arrayContratos['Tipo_Contrato']= $_POST['Tipo_Contrato'];
            $arrayContratos['departamento_Ejecucion']= $_POST['departamento_Ejecucion'];
            $arrayContratos['municipio_ejecucion']= $_POST['municipio_ejecucion'];
            $arrayContratos['Departamento_Obtenciondocumentos']= $_POST['Departamento_Obtenciondocumentos'];
            $arrayContratos['Municipio_Obtencion_Documentos']= $_POST['Municipio_Obtencion_Documentos'];
            $arrayContratos['Direccion_Entrega_Documentos']=$_POST['Direccion_Entrega_Documentos'];
            $arrayContratos['Fecha_Hora_Apertura_Proceso']=$_POST['Fecha_Hora_Apertura_Proceso'];
            $arrayContratos['idPersona']=$_POST['idPersona'];
            $Contratos = NEW Contratos($arrayContratos);
            $Contratos->insertar();
           header("Location: ../Vista/CreateContratos.php?respuesta=correcto");
        }catch (Exception $w){header("Location: ../Vista/CreateContratos.php?respuesta=error");

        }
    }

    static public function selectContratos()
    {
        $arrayContratos = Contratos::getAll();
        $htmlSelec  ="";
        $htmlSelec .="<select name='idContratos_Publicos' id='idContratos_Publicos' class='validate[required] form-control'>";
        $htmlSelec .="<option>Seleccione</option>";
        foreach ($arrayContratos as $contratos){
            $htmlSelec .="<option value='".$contratos->getIdContatosPublicos()."' id='".$contratos->getIdContatosPublicos()."'>".$contratos->getTipoProceso()."-".$contratos->getRC()."</option>";
        }
        $htmlSelec .="</select>";
        return $htmlSelec;
    }
}
