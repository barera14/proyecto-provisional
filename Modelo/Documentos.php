<?php
require_once('db_abstract_class.php');

class Documentos extends db_abstract_class
{
private $idDocumentos;
private $Nombre;
private $Descripcion;
private $Tipo;
private $Version;
private $Fecha_Publicacion;
private $idContatos_Publicos;
private $idEmpresas;
private $idLiquidacion_Contrato;

    /**
     * Documentos constructor.
     * @param $idDocumentos
     * @param $Nombre
     * @param $Descripcion
     * @param $Tipo
     * @param $Version
     * @param $Fecha_Publicacion
     * @param $idContatos_Publicacion
     * @param $idEmpresas
     * @param idLiquidacion_Contrato
     */
    public function __construct($Documentos_data = array())
    {

        parent::__construct();
        if(count($Documentos_data)>1){
            foreach ($Documentos_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else{
            $this->idDocumentos = "";
            $this->Nombre = "";
            $this->Descripcion = "";
            $this->Tipo = "";
            $this->Version = "";
            $this->Fecha_Publicacion = "";
            $this->idContatos_Publicos = "";
            $this->idEmpresas = "";
            $this->idLiquidacion_Contrato = "";



        }


    }

    /**
     * @return string
     */
    public function getIdDocumentos()
    {
        return $this->idDocumentos;
    }

    /**
     * @param string $idDocumentos
     */
    public function setIdDocumentos($idDocumentos)
    {
        $this->idDocumentos = $idDocumentos;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param string $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param string $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->Tipo;
    }

    /**
     * @param string $Tipo
     */
    public function setTipo($Tipo)
    {
        $this->Tipo = $Tipo;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
    }

    /**
     * @return string
     */
    public function getFechaPublicacion()
    {
        return $this->Fecha_Publicacion;
    }

    /**
     * @param string $Fecha_Publicacion
     */
    public function setFechaPublicacion($Fecha_Publicacion)
    {
        $this->Fecha_Publicacion = $Fecha_Publicacion;
    }

    /**
     * @return string
     */
    public function getIdContatosPublicos()
    {
        return $this->idContatos_Publicos;
    }

    /**
     * @param string $idContatos_Publicos
     */
    public function setIdContatosPublicos($idContatos_Publicos)
    {
        $this->idContatos_Publicos = $idContatos_Publicos;
    }

    /**
     * @return string
     */
    public function getIdEmpresas()
    {
        return $this->idEmpresas;
    }

    /**
     * @param string $idEmpresas
     */
    public function setIdEmpresas($idEmpresas)
    {
        $this->idEmpresas = $idEmpresas;
    }

    /**
     * @return string
     */
    public function getIdLiquidacionContrato()
    {
        return $this->idLiquidacion_Contrato;
    }

    /**
     * @param string $idLiquidacion_Contrato
     */
    public function setIdLiquidacionContrato($idLiquidacion_Contrato)
    {
        $this->idLiquidacion_Contrato = $idLiquidacion_Contrato;
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    public static function buscar($query)
    {
        $arrDocumentos = array();
        $tmp = new Documentos();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Documentos = new Documentos();
            $Documentos->idDocumentos = $valor["idDocumentos"];
            $Documentos->Nombre = $valor["Nombre"];
            $Documentos->Descripcion = $valor["Descripcion"];
            $Documentos->Tipo = $valor["Tipo"];
            $Documentos->Version = $valor["Version"];
            $Documentos->Fecha_Publicacion = $valor["Fecha_Publicacion"];
            $Documentos->idContatos_Publicos= $valor["idContatos_Publicos"];
            $Documentos->idEmpresas= $valor["idEmpresa"];
           // $Documentos->idLiquidacion_Contrato= $valor["idLiquidacion_Contrato"];
            array_push($arrDocumentos, $Documentos);
        }
        $tmp->Disconnect();
        return $arrDocumentos;
    }
    public  function insertar()
    {
        $this->insertRow("INSERT INTO proyectophp.documentos VALUES (NULL, ?, ?, ?, ?, ?, ?,?,?)",array(
                $this->Nombre,
                $this->Descripcion,
                $this->Tipo,
                $this->Version,
                $this->Fecha_Publicacion,
               $this->idContatos_Publicos,
                $this->idEmpresas,
               // $this->idLiquidacion_Contrato,
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
    public static function getAll()
    {
        return Documentos::buscar("SELECT * FROM proyectophp.documentos");
    }

}
