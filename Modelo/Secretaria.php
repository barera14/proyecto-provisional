<?php
require_once('db_abstract_class.php');

class Secretaria extends db_abstract_class
{
 private $idSecretarias;
 private $Nombre;
 private $Mision;
 private $Vision;
 private $Objetivos;
 private $Telefono;
 private $Direccion;

    /**
     * Secretaria constructor.
     * @param $idSecretarias
     * @param $Nombre
     * @param $Mision
     * @param $Vision
     * @param $Objetivos
     * @param $Telefono
     * @param $Direccion
     */
    public function __construct($Secretaria_data = array())
    {

        parent::__construct();
        if(count($Secretaria_data)>1){
            foreach ($Secretaria_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idSecretarias = "";
            $this->Nombre = "";
            $this->Mision = "";
            $this->Vision = "";
            $this->Objetivos = "";
            $this->Telefono = "";
            $this->Direccion = "";
        }


    }

    /**
     * @return mixed
     */
    public function getIdSecretarias()
    {
        return $this->idSecretarias;
    }

    /**
     * @param mixed $idSecretarias
     */
    public function setIdSecretarias($idSecretarias)
    {
        $this->idSecretarias = $idSecretarias;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getMision()
    {
        return $this->Mision;
    }

    /**
     * @param mixed $Mision
     */
    public function setMision($Mision)
    {
        $this->Mision = $Mision;
    }

    /**
     * @return mixed
     */
    public function getVision()
    {
        return $this->Vision;
    }

    /**
     * @param mixed $Vision
     */
    public function setVision($Vision)
    {
        $this->Vision = $Vision;
    }

    /**
     * @return mixed
     */
    public function getObjetivos()
    {
        return $this->Objetivos;
    }

    /**
     * @param mixed $Objetivos
     */
    public function setObjetivos($Objetivos)
    {
        $this->Objetivos = $Objetivos;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * @param mixed $Telefono
     */
    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */



    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    public static function buscar($query)
    {
        $arrSecretaria = array();
        $tmp = new Secretaria();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Secretaria = new Secretaria();
            $Secretaria->idSecretarias = $valor["idSecretarias"];
            $Secretaria->Nombre = $valor["Nombre"];
            $Secretaria->Mision = $valor["Mision"];
            $Secretaria->Vision = $valor["Vision"];
            $Secretaria->Objetivos = $valor["Objetivos"];
            $Secretaria->Telefono = $valor["Telefono"];
            $Secretaria->Direccion= $valor["Direccion"];
            $Secretaria->Direccion= $valor["Direccion"];
            array_push($arrSecretaria, $Secretaria);
        }
        $tmp->Disconnect();
        return $arrSecretaria;
    }

    public static function getAll()
    {
        return Secretaria::buscar("SELECT * FROM Secretarias");
    }
    public static function showCount()
    {
        $tmp = new Secretaria();
        $getRow = $tmp->getRow("SELECT COUNT(secretarias.idSecretarias) as NumSecretarias FROM proyectophp.secretarias");
        $html ="";

        print_r($getRow['NumSecretarias']);
        $tmp->Disconnect();
        return $html;
    }
    public  function insertar()
    {
        $this->insertRow("INSERT INTO proyectophp.secretarias VALUES (NULL, ?, ?, ?, ?, ?, ?)",array(
            $this->Nombre,
            $this->Mision,
            $this->Vision,
            $this->Objetivos,
            $this->Telefono,
            $this->Direccion,
        )
        );
        $this->Disconnect();
    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }


}