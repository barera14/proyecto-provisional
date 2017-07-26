
<div id="left">
    <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
            <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
                <img class="media-object img-thumbnail user-img" alt="Imagen usuario" src="<?= $_SESSION["DataPersona"]["Foto"]; ?>" width="64" height="64">
            </a>

            <div class="media-body">
                        <?php echo "<h5>".($_SESSION['DataPersona']["Nombres"])." ".($_SESSION['DataPersona']["Apellidos"])."</h5>";
                              echo "<ul class='list-unstyled user-info'>";
                              echo "<li><a href=''>".($_SESSION['DataPersona']["Cargo"])."</a></li>";
                              echo "<li>Estado: ".($_SESSION['DataPersona']["Estado"])." <br>";
                              echo "<small><i class='fa fa-calendar'></i>"; echo date("d")." de ",date("F")." del ".date("Y")."</small>";
                              ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #menu -->
    <ul id="menu" class="bg-blue dker">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="">
            <a href="javascript:;">
                <i class="glyphicon  glyphicon-home "></i>
                <span class="link-title">Inicio</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="index.php">
                        <i class="glyphicon  glyphicon-home"></i> Volver al inicio </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="glyphicon glyphicon-user"></i>
                <span class="link-title">Personas</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreatePersona.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar </a>
                </li>
                <li>
                    <a href="AdministrarPersona.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Administrar </a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="javascript:;">
                <i class="glyphicon glyphicon-list-alt"></i>
                <span class="link-title">Secretaria</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateSecretaria.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Contratos</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateContratos.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Contratos </a>
                </li>

            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Empresas</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateEmpresas.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Empresas      </a>
                </li>
                <li>
                    <a href="AdministrarEmpresas.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Administrar Empresas </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Licitacion</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateLicitacion.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Licitaciones      </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="glyphicon glyphicon-file"></i>
                <span class="link-title">Entregables</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateEntregables.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Entregables </a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="glyphicon glyphicon-file"></i>
                <span class="link-title">Documentos</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="collapse">
                <li>
                    <a href="CreateDocumentos.php">
                        <i class="fa  glyphicon-user"></i>&nbsp; Registrar Documentos </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /#menu -->
</div>
