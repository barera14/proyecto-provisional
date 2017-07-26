<?php session_start();
if(isset($_SESSION['verificar'])&&$_SESSION['verificar']==true)
{
    if(($_SESSION['DataPersona']["Cargo"])=="General"|| ($_SESSION['DataPersona']["Cargo"])=="Subgeneral" || ($_SESSION['DataPersona']["Cargo"])=="Secretari@" ){

    }else{
        header("Location: 503.html");
    }

}else
{
    header("Location: index.php");

}?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registro Secretaria</title>

    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">

    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <!-- Bootstrap -->
    <link rel="icon" href="assets/img/icono.png">
    <!-- Icono -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">

    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">

    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="assets/lib/onoffcanvas/onoffcanvas.css">

    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--For Development Only. Not required -->
    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

</head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <?php require("snippers/MenuSuperior.php");?>
                <!-- /#top -->
                <?php require ("snippers/MenuIzquierdo.php");?>
                    <!-- /#left -->
                 <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            <style>
                                .form-control.col-lg-6 {
                                    width: 50% !important;
                                }

                            </style>
                                <div class="row">
                        <div class="col-lg-12">
                            <div class="box">

                                <header class="dark">
                                    <div class="icons"><i class="fa glyphicon-user"></i></div>
                                    <h5>Registro de Empresas</h5>
                                    <!-- .toolbar -->
                                    <div class="toolbar">
                                        <nav style="padding: 8px;">
                                            <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                                <i class="fa fa-minus"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </nav>
                                    </div>            <!-- /.toolbar -->

                                </header>
                                <div id="collapse2" class="body">

                                    <?php if(!empty($_GET['respuesta'])){ ?>
                                        <?php if ($_GET['respuesta'] == "correcto"){ ?>
                                            <div class="correcto" id="correcto" title="Registro Exitoso" >
                                                <p> <i class="glyphicon glyphicon-ok-sign"></i>
                                                    La Empresa se ha creado correctamente</p>
                                            </div>
                                        <?php }else {?>
                                            <div class="error" id="error" title="Registro Fallido!" >
                                                <p><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;Error! la Empresa no se pudo crear correctamente intentalo nuevamente</p>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                                    <form class="form-horizontal" id="popup-validation"  enctype="multipart/form-data" action="../Controlador/EmpresaController.php?action=crear" method="POST">

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Razon social del contratista </label>
                                            <div class=" col-lg-4">
                                                <input required placeholder="Razon social del contratita"  class="validate[required] form-control" type="text"
                                                       name="Razonsocial_contratista" id="Razonsocial_contratista"/>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nit de la empresa </label>
                                            <div class=" col-lg-4">
                                                <input required placeholder="Nit de la empresa" class="validate[required,custom[number]] form-control" type="number"
                                                       name="Identificacion_Contatista" id="Identificacion_Contatista"/>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Pais del contratista</label>
                                            <div class="col-lg-4">
                                                <select required name="Pais_Contatrista" id="Pais_Contatrista" class="validate[required] form-control">
                                                    <option>Colombia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label class="control-label col-lg-4">Departamento del contratista</label>
                                            <div class="col-lg-4">
                                                <select required name="Departamento_Contatista" id="Departamento_Contatista" class="validate[required] form-control">
                                                    <option>Casanare</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Provincia/Municipio del contratista</label>
                                            <div class="col-lg-4">
                                                <select required name="Provincia_Contratista" id="Provincia_Contratista" class="validate[required] form-control">
                                                    <option>Yopal</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="control-label col-lg-4">Direccion</label>
                                            <div class="col-lg-4">
                                                <input required type="text" placeholder="Direccion" class="validate[required] form-control" name="Direccion_Contratista" id="Direccion_Contratista">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="control-label col-lg-4">Nombre representante legal</label>
                                            <div class="col-lg-4">
                                                <input required type="text" placeholder="Nombre representante legal" class="validate[required] form-control" name="Representante_Contaratista" id="Representante_Contaratista">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Identificacion del contratista  </label>
                                            <div class=" col-lg-4">
                                                <input required placeholder="Identificacion del contratista " class="validate[required,custom[number]] form-control" type="number"
                                                       name="Identificacion_Representante" id="Identificacion_Representante"/>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4"> Estado </label>
                                            <div class="col-lg-4">
                                                <select required name="Estado" id="Estado" class="validate[required] form-control">
                                                    <option>Activo</option>
                                                    <option>Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div hidden class="form-group">
                                            <label  class="control-label col-lg-4">idpersona</label>
                                            <div class="col-lg-4">
                                                <input required type="text" value="<?php echo ($_SESSION['DataPersona']["idPersona"]);?>"  class="validate[required] form-control" name="idPersona" id="idPersona">
                                            </div>
                                        </div>
                                            <div class="form-actions no-margin-bottom">
                                                <input type="submit" value="Enviar" class="btn btn-primary">
                                            </div>
                                    </form>
                                </div>
                                </div>
                        <!-- /.inner -->
                            </div>
                     <!-- /.outer -->
                    </div>
                <!-- /#content -->
                        </div>

                        </div>
                <!-- /#right -->
                    </div>
            </div>

            <!-- /#wrap -->
            <footer class="Footer bg-dark dker">
                <p>2017 &copy; SIC-Sistema Integrado de Contratacion. v1.0</p>
            </footer>
            <!-- /#footer -->
            <!-- #helpModal -->




            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

            <script >
               $(document).ready(function() {

          $( "#correcto" ).dialog({
                       modal: true,
                        buttons: {
                           Ok: function() {
                               $(this).hide("explode");
                               $( this ).dialog( "close" );
                           }
                       }

                   });
                   $( "#error" ).dialog({
                       modal: true,
                       buttons: {
                           Ok: function() {
                               $(this).hide("explode");
                               $( this ).dialog( "close" );
                           }
                       }
                   });
                });
            </script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- onoffcanvas -->
            <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                <script src="assets/lib/jquery-validation/jquery.validate.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>

            <!-- Metis demo scripts -->
                <script src="assets/js/app.js"></script>
                <script>
                    $(function() {
                        Metis.formValidation();
                    });
                </script>

                <script src="assets/js/style-switcher.js"></script>

        </body>

</html>
