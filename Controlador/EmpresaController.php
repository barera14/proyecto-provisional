<?php
require_once (__DIR__.'/../Modelo/Empresas.php');

if(!empty($_GET['action'])){
    EmpresaController::main($_GET['action']);
}else{
    //echo "No se encontro ninguna accion...";
}

class EmpresaController
{
    static function main($action){
        if ($action == "crear"){
            EmpresaController::crear();
        }else if ($action == "select"){
            EmpresaController::selectEmpresas();
        }else if ($action == "tablaEmpresa"){
            EmpresaController::tablaEmpresas();
        }
    }
    static public function crear(){
        try{
            $arrayEmpresas = array();
            $arrayEmpresas['Razonsocial_contratista']=$_POST['Razonsocial_contratista'];
            $arrayEmpresas['Identificacion_Contatista'] = $_POST['Identificacion_Contatista'];
            $arrayEmpresas['Pais_Contatrista'] = $_POST['Pais_Contatrista'];
            $arrayEmpresas['Departamento_Contatista'] = $_POST['Departamento_Contatista'];
            $arrayEmpresas['Provincia_Contratista'] = $_POST['Provincia_Contratista'];
            $arrayEmpresas['Direccion_Contratista'] = $_POST['Direccion_Contratista'];
            $arrayEmpresas['Representante_Contaratista'] = $_POST['Representante_Contaratista'];
            $arrayEmpresas['Identificacion_Representante'] = $_POST['Identificacion_Representante'];
            $arrayEmpresas['Estado'] = $_POST['Estado'];
            $arrayEmpresas['idPersona'] = $_POST['idPersona'];
            $empresas = new Empresas($arrayEmpresas);
            $empresas->insertar();
            header("Location: ../Vista/CreateEmpresas.php?respuesta=correcto");
        }catch(Exception $e){
            header("Location: ../Vista/CreateEmpresas.php?respuesta=error");
        }
    }
    static public function buscarID ($id){
        try {
            return Empresas::buscarForId($id);
        } catch (Exception $e) {
            header("Location: ../updateEmpresa.php?respuesta=error");
        }
    }

    static public function selectEmpresas()
    {
        $arrayEmpresas = Empresas::getAll();
        $htmlSelect  ="";
        $htmlSelect .="<select name='idEmpresas' id='idEmpresas' class='validate[required] form-control'>";
        $htmlSelect .="<option>Seleccione</option>";
        foreach ($arrayEmpresas as $empresas){
            $htmlSelect .="<option value='".$empresas->getIdEmpresas()."' id='".$empresas->getIdEmpresas()."'>".$empresas->getRazonsocialContratista()." Nit: ".$empresas->getIdentificacionContatista()."</option>";
        }
        $htmlSelect .="</select>";
        return $htmlSelect;
    }

    public function tablaEmpresas (){
        $arrEmpresas = Empresas::getAll();
        $htmlSelect = "";
        foreach ($arrEmpresas as $empresa) {
            $htmlSelect .= "<tr>";
            $htmlSelect .= "<td hidden  >".$empresa->getIdEmpresas()."</td>";
            $htmlSelect .= "<td>" . $empresa->getRazonsocialContratista() . "</td>";
            $htmlSelect .= "<td>".$empresa->getIdentificacionContatista()."</td>";
            $htmlSelect .= "<td>".$empresa->getRepresentanteContaratista()."</td>";
            $htmlSelect .= "<td>".$empresa->getIdentificacionRepresentante()."</td>";
            $htmlSelect .= "<td>";
            $htmlSelect .= "<a href='showEmpresas.php?id=".($_SESSION['empresa']=$empresa->getIdEmpresas())."' type='button' data-toggle='tooltip' title='Ver empresa' class='btn docs-tooltip btn-info btn-xs'><i class='fa fa-edit'></i></a>";
            $htmlSelect .= "<spam> </spam>";
            $htmlSelect .= "<a href='UpdateEmpresa.php?id=".$empresa->getIdEmpresas()."' type='button' data-toggle='tooltip' title='Actualizar' class='btn docs-tooltip btn-primary btn-xs'><i class='fa fa-edit'></i></a>";
            $htmlSelect .= "<spam> </spam>";
            if ($empresa->getEstado() != 'Activo') {
                $htmlSelect .= "<a href='../Controlador/PersonaController.php?action=ActivarPersona&idPersona=".$empresa->getIdEmpresas()." type='button' data-toggle='tooltip' title='Activar' class='btn docs-tooltip btn-success btn-xs'><i class='fa fa-check-square-o'></i></a>";
            } else {
                $htmlSelect .= "<a type='button' href='../Controlador/PersonaController.php?action=InactivarPersona&idPersona=".$empresa->getIdEmpresas()." data-toggle='tooltip' title='Inactivar' class='btn docs-tooltip btn-danger btn-xs'><i class='fa fa-times-circle-o'></i></a>";
            }
            $htmlSelect .= "</td>";
            $htmlSelect .= "</tr>";
        }

        return  $htmlSelect;
    }


}