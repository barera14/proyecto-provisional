<?php
require_once('db_abstract_class.php');

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 2:37 PM
 */
class Licitacion extends db_abstract_class
{
    private $idLicitacion;
    private $Fecha_firma_contrato;
    private $Ejecucion_Contrato;
    private $Plazo_Ejecucion_Contrato;
    private $Calificacion;
    private $Estado;
    private $idPersona;
    private $idEmpresas;
    private $idContratos_Publico;

    /**
     * Licitacion constructor.
     * @param $idLicitacion
     * @param $Fecha_firma_contrato
     * @param $Ejecucion_Contrato
     * @param $Plazo_Ejecucion_Contrato
     * @param $Calificacion
     * @param $Estado
     * @param $idPersona
     * @param $idEmpresas
     * @param $idContratos_Publico
     */
    public function __construct($Licitacion_data = array())
    {
        parent::__construct(); //
        if (count($Licitacion_data) > 1) { //
            foreach ($Licitacion_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->idLicitacion = "";
            $this->Fecha_firma_contrato = "";
            $this->Ejecucion_Contrato = "";
            $this->Plazo_Ejecucion_Contrato = "";
            $this->Calificacion = "";
            $this->Estado = "";
            $this->idPersona = "";
            $this->idEmpresas = "";
            $this->idContratos_Publico = "";

        }
    }


    public function getFechaFirmaContrato()
    {
        return $this->Fecha_firma_contrato;
    }

    /**
     * @param mixed $Fecha_firma_contrato
     */
    public function setFechaFirmaContrato($Fecha_firma_contrato)
    {
        $this->Fecha_firma_contrato = $Fecha_firma_contrato;
    }

    /**
     * @return mixed
     */
    public function getEjecucionContrato()
    {
        return $this->Ejecucion_Contrato;
    }

    /**
     * @param mixed $Ejecucion_Contrato
     */
    public function setEjecucionContrato($Ejecucion_Contrato)
    {
        $this->Ejecucion_Contrato = $Ejecucion_Contrato;
    }

    /**
     * @return mixed
     */
    public function getCalificacion()
    {
        return $this->Calificacion;
    }

    /**
     * @param mixed $Calificacion
     */
    public function setCalificacion($Calificacion)
    {
        $this->Calificacion = $Calificacion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresas()
    {
        return $this->idEmpresas;
    }

    /**
     * @param mixed $idEmpresas
     */
    public function setIdEmpresas($idEmpresas)
    {
        $this->idEmpresas = $idEmpresas;
    }

    /**
     * @return mixed
     */
    public function getIdContratosPublico()
    {
        return $this->idContratos_Publico;
    }

    /**
     * @param mixed $idContratos_Publico
     */
    public function setIdContratosPublico($idContratos_Publico)
    {
        $this->idContratos_Publico = $idContratos_Publico;
    }

    /**
     * @return mixed
     */
    public function getIdLicitacion()
    {
        return $this->idLicitacion;
    }

    /**
     * @param mixed $idLicitacion
     */
    public function setIdLicitacion($idLicitacion)
    {
        $this->idLicitacion = $idLicitacion;
    }

    /**
     * @return mixed
     */
    public function getPlazoEjecucionContrato()
    {
        return $this->Plazo_Ejecucion_Contrato;
    }

    /**
     * @param mixed $Plazo_Ejecucion_Contrato
     */
    public function setPlazoEjecucionContrato($Plazo_Ejecucion_Contrato)
    {
        $this->Plazo_Ejecucion_Contrato = $Plazo_Ejecucion_Contrato;
    }

    /**
     * @return mixed
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * @param mixed $idPersona
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }

    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }


    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }



    /**
     * @return mixed
     */


    /**
     * @param mixed $Secretarias_idSecretarias
     */


    /**
     * Persona constructor.
     * @param $idLicitacion
     * @param $idLicitacion ;
     * @param $Fecha_firma_contrato ;
     * @param $Ejecucion_Contrato ;
     * @param $Plazo_Ejecucion_Contrato ;
     * @param $Calificacion ;
     * @param $Estado ;
     * @param $idPersona ;
     * @param $idEmpresas ;
     * @param $idContratos_Public
     */


    /**
     * @return mixed
     */


    /**
     * @param mixed $idSecretarias
     */
    public function insertar()
    {
        $this->insertRow("INSERT INTO proyectophp.licitacion VALUES(NULL,?,?,?,?,?,?,?,?)", array(
            $this->Fecha_firma_contrato,
            $this->Ejecucion_Contrato,
            $this->Plazo_Ejecucion_Contrato,
            $this->Calificacion,
            $this->Estado,
            $this->idPersona,
            $this->idEmpresas,
            $this->idContratos_Publicos,


        ));
        $this->Disconnect();

    }
}