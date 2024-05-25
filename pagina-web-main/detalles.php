<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomelyFix</title>
    <link rel="icon" type="image/png" href="homelyfix.png" />
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js.js"></script>
</head>

<body>
    <div class="overlay" id="overlay"></div>
    <div class="header-container">
        <header>
            <div class="nav-bar">
                <a href="index.php">
                <div class="nav-logo">
                    <img src="homelyfix.png" alt="" class="logo">
                </div>
                </a>
                <div class="nav-central">
                    <div class="codigo-postal" style="visibility: hidden;">
                        <form action="">
                            <input type="number" name="" id="codigo" placeholder="Código Postal" class="cp"
                                inputmode="numeric" maxlength="5" minlength="5" oninput="limitarLongitud()">
                        </form>
                        <span class="material-symbols-sharp icon-search">
                            search
                        </span>
                    </div>
                </div>
                <div class="nav-buscador">
                    <div class="log" id="login" onclick="abrirLog()">
                        <span class="material-symbols-sharp menu">
                            menu
                        </span>
                        <span class="material-symbols-sharp account">
                            account_circle
                        </span>

                    </div>
                    <div class="log-menu" id="menu">
                        <ul>
                            <a href="registro.php">
                                <li><span>Regístrate</span></li>
                            </a>
                            <li onclick="abririnicio()"><span>Iniciar de sesión</span></li>
                        </ul>
                        <ul class="unete">
                            <a href="unete.php">
                                <li><span class="unete-vip">Únete a HomelyFix
                                        <span class="material-symbols-sharp vip">
                                            workspace_premium
                                        </span>
                                    </span>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

        </header>

        
    </div>
    <div class="mar">

        <img src="proovedor.png" alt="" style="width: 100%; margin-top: 50px;" onclick="alerta()">
        <img src="comentarios.png" alt="" style="width: 100%;">
        
    </div>
    <div class="centrado" id="centra">
        <div class="inicio" id="cuadroinicio">
            <div class="cerrar-inicio">
                <span class="material-symbols-sharp icono-close" onclick="cerrarcuadroini()" id="cerrar-inicio">
                    close
                </span>
                <span id="titulo-inicio">Accede o regístrate</span>
            </div>
            <div class="centrado-base">
                <span class="bienvenida-inicio">¡Bienvenido a HomelyFix!</span>
            </div>
            <form action="inicio.php" autocomplete="off" method="post">
                <input type="email" placeholder="Correo Electronico*" class="datos-inicio" name="correo">
                <input type="password" name="contraseña" id="" placeholder="Contraseña*" class="datos-inicio">
                <input type="submit" value="Entrar" class="entrar">

                <span class="no-cuenta">¿No tienes cuenta? <a href="registro.html"
                        class="registro">Regístrate</a></span>

            </form>
        </div>
    </div>


    <?php 
    include('footer.php');
    ?>

</body>

</html>