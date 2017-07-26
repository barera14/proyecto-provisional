<?php
require_once('db_abstract_class.php');

/**
 * Created by PhpStorm.
 * User: New
 * Date: 25/07/2017
 * Time: 03:23 AM
 */
class Entregable extends db_abstract_class
{
    private $idEntregables;
    private $Entregables_Actividad;
    private $Fecha_Cumplimiento;
    private $Fecha_Entrega;
    private $Porcentaje_Entregable;
    private $Contrato;
    private $Estado;
    private $idLiquidacion_Contrato;
    /**
     * Entregable constructor.
     * @param $idEntregables
     * @param $Entregables_Actividad
     * @param $Fecha_Cumplimiento
     * @param $Porcentaje_Entregable
     * @param $Contrato
     * @param $Estado
     */
    public function __construct($Entregable_data = array())
    {
        parent::__construct(); //
        if (count($Entregable_data) > 1) { //
            foreach ($Entregable_data as $campo => $valor) {
                $this->$campo = $valor;
            }
        } else {
            $this->idEntregables = "";
            $this->Entregables_Actividad = "";
            $this->Fecha_Entrega = "";
            $this->Fecha_Cumplimiento = "";
            $this->Porcentaje_Entregable = "";
            $this->Contrato = "";
            $this->Estado = "";
            $this->idLiquidacion_Contrato="";
        }
    }

    /**
     * Licitacion constructor.
     * @param $idEntregables
     * @param $$Entregables_Actividad;
     * @param $$Fecha_Cumplimiento
     * @param $$Porcentaje_Entregable
     * @param $Contrato
     * @param $Estado
     */


    public function getIdEntregables()
    {
        return $this->idEntregables;
    }

    /**
     * @param mixed $idEntregables
     */
    public function setIdEntregables($idEntregables)
    {
        $this->idEntregables = $idEntregables;
    }

    /**
     * @return mixed
     */
    public function getEntregablesActividad()
    {
        return $this->Entregables_Actividad;
    }

    /**
     * @param mixed $Entregables_Actividad
     */
    public function setEntregablesActividad($Entregables_Actividad)
    {
        $this->Entregables_Actividad = $Entregables_Actividad;
    }

    /**
     * @return mixed
     */
    public function getFechaCumplimiento()
    {
        return $this->Fecha_Cumplimiento;
    }

    /**
     * @param mixed $Fecha_Cumplimiento
     */
    public function setFechaCumplimiento($Fecha_Cumplimiento)
    {
        $this->Fecha_Cumplimiento = $Fecha_Cumplimiento;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeEntregable()
    {
        return $this->Porcentaje_Entregable;
    }

    /**
     * @param mixed $Porcentaje_Entregable
     */
    public function setPorcentajeEntregable($Porcentaje_Entregable)
    {
        $this->Porcentaje_Entregable = $Porcentaje_Entregable;
    }

    /**
     * @return mixed
     */
    public function getContrato()
    {
        return $this->Contrato;
    }

    /**
     * @param mixed $Contrato
     */
    public function setContrato($Contrato)
    {
        $this->Contrato = $Contrato;
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


    /**
     * @param mixed $idPersona
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
    }



    public static function getAll()
    {
          return Entregable::buscar("SELECT * FROM proyectophp.entregables");
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
            $this->insertRow("INSERT INTO proyectophp.Cristtian VALUES (null, ?, ?,?,?,?,?)", array(

            $this->	Entregables_Actividad,
            $this->	Fecha_Cumplimiento,
            $this-> Fecha_Entrega,
            $this-> Porcentaje_Entregable,
            $this->	Contrato,
            $this-> Estado,
        ));
        $this->Disconnect();
    }
    public static function buscar($query)
    {
        $arrEmpresas = array();
        $tmp = new Entregable();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $tmp = new Empresas();
            $tmp->idEntregables = $valor['idEntregables'];
            $tmp->Entregables_Actividad = $valor['Entregables_Actividad'];
            $tmp->Fecha_Cumplimiento = $valor['Fecha_Cumplimiento'];
            $tmp->Fecha_Entrega = $valor['Fecha_Entrega'];
            $tmp->Porcentaje_Entregable = $valor['Porcentaje_Entregable'];
            $tmp->Contrato = $valor['Contrato'];
          //  $tmp->Estado = $valor['Estado'];
            $tmp->idLiquidacion_Contrato = $valor['idLiquidacion_Contrato'];
            array_push($arrEmpresas, $tmp);
        } $tmp->Disconnect();
        return $arrEmpresas;
    }
    public static function buscarForId($id)
    {
        $tmp = new Entregable();
        if ($id > 0) {
            $getrow = $tmp->getRow("SELECT * FROM proyectophp.entregables WHERE entregables.idEntregables = ?", array($id));
            $tmp = new Entregable();
            $tmp->idEntregables =$getrow['idEntregables'];
            $tmp->Entregables_Actividad =$getrow['Entregables_Actividad'];
            $tmp->Fecha_Cumplimiento =$getrow['Fecha_Cumplimiento'];
            $tmp->Fecha_Entrega = $getrow['Fecha_Entrega'];
            $tmp->Porcentaje_Entregable = $getrow['Porcentaje_Entregable'];
            $tmp->Contrato = $getrow['Contrato'];
            $tmp->Estado = $getrow['Estado'];
            $tmp->idLiquidacion_Contrato =$getrow['idLiquidacion_Contrato'];

            $tmp->Disconnect();
            return $tmp;
        }else{
            return NULL;
        }

    }

    /**
     * @return mixed
     */
    public function getFechaEntrega()
    {
        return $this->Fecha_Entrega;
    }

    /**
     * @param mixed $Fecha_Entrega
     */
    public function setFechaEntrega($Fecha_Entrega)
    {
        $this->Fecha_Entrega = $Fecha_Entrega;
    }

}

