<?php


require_once (__DIR__.'/../Modelo/Secretaria.php');

if(!empty($_GET['action'])){
    SecretariaController::main($_GET['action']);
}else{
   // echo "No se encontro ninguna accion...";
}
class SecretariaController
{
 static function main($action){
     if ($action == "crear"){
         SecretariaController::crear();
     }
 }
static public function crear(){
try{
    $arraySecretaria = array();
    $arraySecretaria['Nombre'] = $_POST['Nombre'];
    $arraySecretaria['Mision'] = $_POST['Mision'];
    $arraySecretaria['Vision'] = $_POST['Vision'];
    $arraySecretaria['Objetivos'] = $_POST['Objetivos'];
    $arraySecretaria['Telefono'] = $_POST['Telefono'];
    $arraySecretaria['Direccion']= $_POST['Direccion'];
    $Secretaria = new Secretaria($arraySecretaria);
    $Secretaria->insertar();
   header("Location: ../Vista/CreateSecretaria.php?respuesta=correcto");
}catch (Exception $w){
    header("Location: ../Vista/CreateSecretaria.php?respuesta=error");

}
}

    static public function selectSecretaria ($isRequired=true, $class="")
    {
        $arrSecretaria = Secretaria::getAll();
        $htmlSelect = "";
        $htmlSelect = "<select  name='idSecretarias' id='idSecretarias' class='validate[required] form-control'>";
        $htmlSelect .= "<option>Seleccione</option>";
        foreach ($arrSecretaria as $Secretarias) {
            $htmlSelect .= "<option value='".$Secretarias->getidSecretarias()."' id='".$Secretarias->getidSecretarias()."'>".$Secretarias->getNombre()."</option>";

        }
        $htmlSelect .= "</select>";
        return $htmlSelect;
    }





}