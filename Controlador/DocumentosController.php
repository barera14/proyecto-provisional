<?php

require_once (__DIR__.'/../Modelo/Documentos.php');

if(!empty($_GET['action'])){
    DocumentosController::main($_GET['action']);
}else{
    //echo "No se encontro ninguna accion...";
}

class DocumentosController
{
    static function main($action)
    {
        if ($action == "crear") {
            DocumentosController::crear();
        }
    }

    static public function crear()
    {
        try {
            $arrayDocumentos = array();
            $arrayDocumentos['Nombre'] = $_POST['Nombre'];
            $arrayDocumentos['Descripcion'] = $_POST['Descripcion'];
            $arrayDocumentos['Tipo'] = $_POST['Tipo'];
            $arrayDocumentos['Version'] = $_POST['Version'];
            $arrayDocumentos['Fecha_Publicacion'] = $_POST['Fecha_Publicacion'];
            $arrayDocumentos['idContatos_Publicos'] = $_POST['idContatos_Publicos'];
            $arrayDocumentos['idEmpresas'] = $_POST['idEmpresas'];
            $arrayDocumentos['idLiquidacion_Contrato'] = $_POST['idLiquidacion_Contrato'];
            $Documentos = NEW Documentos($arrayDocumentos);
            $Documentos->insertar();
          //header("Location: ../Vista/CreateDocumentos.php?respuesta=correcto");
        } catch (Exception $w) {
           // header("Location: ../Vista/CreateDocumentos.php?respuesta=error");

        }
    }
}