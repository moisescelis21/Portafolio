<?php
$privilegio = $_SESSION["privilegio"]

?>

<?php
if ($privilegio == 1) {
?>
<nav class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class="icon-bolt"></i>
            <p class="logo_name">AppWeb</p>
        </div>
        <i class="icon-view-list" id="btn"></i>
    </div>
    <ul class="nav_list-ul">
        <li>
            <a href="inicio.php">
                <i class="icon-home" title="inicio"></i>
                <span class="links_name">Inicio</span>
            </a>
        </li>
        <li>
            <a href="usuarios.php">
                <i class="icon-user-add" title="Agregar Usuarios"></i>
                <span class="links_name">Usuarios</span>
            </a>
        </li>
        <li>
            <a href="configuracion.php">
                <i class="icon-wrench" title="Configuración"></i>
                <span class="links_name">Ajustes</span>
            </a>
        </li>
        <li>
            <a href="infactas.php">
                <i class="icon-news-paper" title="Informes - Actas"></i>
                <span class="links_name">Info/Actas</span>
            </a>
        </li>
        <li class="close">
            <a href="php/logout.php">
                <i class="icon-close-solid" title="Cerrar Sesión"></i>
                <span class="links_name">Salir</span>
            </a>
        </li>
    </ul>


    <div class="profile">
        <a class="profile-link" href="perfil.php">
            <i class="icon-user-solid-circle user-icon" title="Perfil de usuario"></i>
        </a>
        <div class="profile__content">
            <i class="icon-user-solid-circle"></i>
            <div class="profile__details">
                <p class="profile__details-name"><?php echo $_SESSION["usuario"]; ?></p>
                <a href="perfil.php">Ver Perfil</a>
            </div>
        </div>
    </div>

</nav>

<?php
}else{
?>

<nav class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class="icon-bolt"></i>
            <p class="logo_name">AppWeb</p>
        </div>
        <i class="icon-view-list" id="btn"></i>
    </div>
    <ul class="nav_list-ul">
        <li>
            <a href="inicio.php">
                <i class="icon-home" title="inicio"></i>
                <span class="links_name">Inicio</span>
            </a>
        </li>
        <li>
            <a href="infactas.php">
                <i class="icon-news-paper" title="Informes - Actas"></i>
                <span class="links_name">Info/Actas</span>
            </a>
        </li>
        <li class="close">
            <a href="php/logout.php">
                <i class="icon-close-solid" title="Cerrar Sesión"></i>
                <span class="links_name">Cerrar</span>
            </a>
        </li>
    </ul>


    <div class="profile">
        <a class="profile-link" href="perfil.php">
            <i class="icon-user-solid-circle user-icon" title="Perfil de usuario"></i>
        </a>
        <div class="profile__content">
            <i class="icon-user-solid-circle"></i>
            <div class="profile__details">
                <p class="profile__details-name"><?php echo $_SESSION["usuario"]; ?></p>
                <a href="perfil.php">Ver Perfil</a>
            </div>
        </div>
    </div>

</nav>

































<?php
}
?>
