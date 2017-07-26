<?php
require_once('db_abstract_class.php');


class Contratos extends db_abstract_class

{
    private $idContatos_Publicos;
    private $Tipo_Proceso;
    private $Estado;
    private $RC;
    private $Descripcion_Objeto_Contratar;
    private $Cuantia;
    private $Tipo_Contrato;
    private $departamento_Ejecucion;
    private $municipio_ejecucion;
    private $Departamento_Obtenciondocumentos;
    private $Municipio_Obtencion_Documentos;
    private $Direccion_Entrega_Documentos;
    private $Fecha_Hora_Apertura_Proceso;
    private $idPersona;

    /**
     * Contratos constructor.
     * @param $idContatos_Publicos
     * @param $Tipo_Proceso
     * @param $Estado
     * @param $RC
     * @param $Descripcion_Objeto_Contratar
     * @param $Cuantia
     * @param $Tipo_Contrato
     * @param $departamento_Ejecucion
     * @param $municipio_ejecucion
     * @param $Departamento_Obtenciondocumentos
     * @param $Municipio_Obtencion_Documentos
     * @param $Direccion_Entrega_Documentos
     * @param $Fecha_Hora_Apertura_Proceso
     * @param $idPersona



     */





    public function __construct($Contratos_data=array())
    {
        parent::__construct(); //
        if(count($Contratos_data)>1){ //
            foreach ($Contratos_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
            $this->idContatos_Publicos = "";
            $this->Tipo_Proceso = "";
            $this->Estado = "";
            $this->RC = "";
            $this->Descripcion_Objeto_Contratar = "";
            $this->Cuantia = "";
            $this->Tipo_Contrato = "";
            $this->departamento_Ejecucion = "";
            $this->municipio_ejecucion =  "";
            $this->Departamento_Obtenciondocumentos =  "";
            $this->Municipio_Obtencion_Documentos =  "";
            $this->Direccion_Entrega_Documentos =  "";
            $this->Fecha_Hora_Apertura_Proceso =  "";
            $this->idPersona =  "";


        }
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
    public function getTipoProceso()
    {
        return $this->Tipo_Proceso;
    }

    /**
     * @param string $Tipo_Proceso
     */
    public function setTipoProceso($Tipo_Proceso)
    {
        $this->Tipo_Proceso = $Tipo_Proceso;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param string $Estado
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }

    public function getRC()
    {
        return $this->RC;
    }

    /**
     * @param string $RC
     */
    public function setRC($RC)
    {
        $this->RC = $RC;
    }

    /**
     * @return string
     */
    public function getDescripcionObjetoContratar()
    {
        return $this->Descripcion_Objeto_Contratar;
    }

    /**
     * @param string $Descripcion_Objeto_Contratar
     */
    public function setDescripcionObjetoContratar($Descripcion_Objeto_Contratar)
    {
        $this->Descripcion_Objeto_Contratar = $Descripcion_Objeto_Contratar;
    }

    /**
     * @return string
     */
    public function getCuantia()
    {
        return $this->Cuantia;
    }

    /**
     * @param string $Cuantia
     */
    public function setCuantia($Cuantia)
    {
        $this->Cuantia = $Cuantia;
    }

    /**
     * @return string
     */
    public function getTipoContrato()
    {
        return $this->Tipo_Contrato;
    }

    /**
     * @param string $Tipo_Contrato
     */
    public function setTipoContrato($Tipo_Contrato)
    {
        $this->Tipo_Contrato = $Tipo_Contrato;
    }

    /**
     * @return string
     */
    public function getDepartamentoEjecucion()
    {
        return $this->departamento_Ejecucion;
    }

    /**
     * @param string $departamento_Ejecucion
     */
    public function setDepartamentoEjecucion($departamento_Ejecucion)
    {
        $this->departamento_Ejecucion = $departamento_Ejecucion;
    }

    /**
     * @return string
     */
    public function getMunicipioEjecucion()
    {
        return $this->municipio_Ejecucion;
    }

    /**
     * @param string $municipio_Ejecucion
     */
    public function setMunicipioejecucion($municipio_ejecucion)
    {
        $this->municipio_Ejecucion = $municipio_ejecucion;
    }

    /**
     * @return string
     */
    public function getDepartamentoObtenciondocumentos()
    {
        return $this->Departamento_Obtenciondocumentos;
    }

    /**
     * @param string $Departamento_Obtenciondocumentos
     */
    public function setDepartamentoObtenciondocumentos($Departamento_Obtenciondocumentos)
    {
        $this->Departamento_Obtenciondocumentos = $Departamento_Obtenciondocumentos;
    }

    /**
     * @return string
     */
    public function getMunicipioObtencionDocumentos()
    {
        return $this->Municipio_Obtencion_Documentos;
    }

    /**
     * @param string $Municipio_Obtencion_Documentos
     */
    public function setMunicipioObtencionDocumentos($Municipio_Obtencion_Documentos)
    {
        $this->Municipio_Obtencion_Documentos = $Municipio_Obtencion_Documentos;
    }

    /**
     * @return string
     */
    public function getDireccionEntregaDocumentos()
    {
        return $this->Direccion_Entrega_Documentos;
    }

    /**
     * @param string $Direccion_Entrega_Documentos
     */
    public function setDireccionEntregaDocumentos($Direccion_Entrega_Documentos)
    {
        $this->Direccion_Entrega_Documentos = $Direccion_Entrega_Documentos;
    }

    /**
     * @return string
     */
    public function getFechaHoraAperturaProceso()
    {
        return $this->Fecha_Hora_Apertura_Proceso;
    }

    /**
     * @param string $Fecha_Hora_Apertura_Proceso
     */
    public function setFechaHoraAperturaProceso($Fecha_Hora_Apertura_Proceso)
    {
        $this->Fecha_Hora_Apertura_Proceso = $Fecha_Hora_Apertura_Proceso;
    }

    /**
     * @return mixed
     */


    public function getidPersona()
    {
        return $this->id;
    }




    public function insertar()
    {
        $this->insertRow("INSERT INTO contatos_publicos VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)",array(
            $this->Tipo_Proceso,
            $this->Estado,
            $this->RC,
            $this->Descripcion_Objeto_Contratar,
            $this->Cuantia,
            $this->Tipo_Contrato,
            $this->departamento_Ejecucion,
            $this->municipio_ejecucion,
            $this->Departamento_Obtenciondocumentos,
            $this->Municipio_Obtencion_Documentos,
            $this->Direccion_Entrega_Documentos,
            $this->Fecha_Hora_Apertura_Proceso,
            $this->idPersona,
            )
        );
        $this->Disconnect();

    }
    public static function showCount()
    {
        $tmp = new Secretaria();
        $getRow = $tmp->getRow("SELECT COUNT(contatos_publicos.idContatos_Publicos) as NumSecretarias FROM proyectophp.contatos_publicos");
        $html ="";
        print_r($getRow['NumSecretarias']);
        $tmp->Disconnect();
        return $html;
    }
    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }

    public static function buscarForId($id)
    {

    }

    public static function buscar($query)
    {
        $arrContratos = array();
        $tmp = new Contratos();
        $getrows = $tmp->getRows($query);

        foreach ($getrows as $valor) {
            $Contratos = new Contratos();
            $Contratos->idContatos_Publicos = $valor['idContatos_Publicos'];
            $Contratos->Tipo_Proceso = $valor['Tipo_Proceso'];
            $Contratos->estado = $valor['Estado'];
            $Contratos->RC = $valor['RC'];
            $Contratos->Descripcion_Objeto_Contratar = $valor['Descripcion_Objeto_Contratar'];
            $Contratos->Cuantia = $valor['Cuantia'];
            $Contratos->Tipo_Contrato = $valor['Tipo_Contrato'];
            $Contratos->departamento_Ejecucion = $valor['departamento_Ejecucion'];
            $Contratos->municipio_ejecucion = $valor['municipio_ejecucion'];
            $Contratos->Depertamento_Obtenciondocumentos = $valor['Departamento_Obtenciondocumentos'];
            $Contratos->Municipio_Obtencion_Documentos = $valor['Municipio_Obtencion_Documentos'];
            $Contratos->Direccion_Entrega_Documentos = $valor['Direccion_Entrega_Documentos'];
            $Contratos->Fecha_Hora_Apertura_Proceso = $valor['Fecha_Hora_Apertura_Proceso'];
            $Contratos->IdPersona = $valor['idPersona'];
            array_push($arrContratos, $Contratos);
        }
            $tmp->Disconnect();
            return $arrContratos;

    }


    public static function getAll()
    {
        return Contratos::buscar("SELECT * FROM proyectophp.contatos_publicos");
    }




}
