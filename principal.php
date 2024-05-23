<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomelyFix</title>
    <link rel="icon" type="image/png" href="homelyfix.png" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js.js"></script>
</head>

<body>
    <div class="overlay" id="overlay"></div>
    <div class="header-container">
        <header>
            <div class="nav-bar">
                <div class="nav-logo">
                    <img src="homelyfix.png" alt="" class="logo">
                </div>
                <div class="nav-central">
                    <div class="codigo-postal">
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

        <div class="serviTotal">
            <div class="servicios" onclick="electricistas()">
                <span class="material-symbols-sharp">
                    dynamic_form
                </span>
                <span class="nom-servicios">Electricista</span>
                <div class="linea-servicios">
                </div>
            </div>
            <div class="servicios" onclick="plomeros()">
                <span class="material-symbols-sharp">
                    handyman
                </span>
                <span class="nom-servicios">Plomero</span>
                <div class="linea-servicios">
                </div>
            </div>
            <div class="servicios">
                <span class="material-symbols-sharp">
                    mop
                </span>
                <span class="nom-servicios">Limpieza</span>
                <div class="linea-servicios">
                </div>
            </div>
            <div class="servicios">
                <span class="material-symbols-sharp">
                    escalator_warning
                </span>
                <span class="nom-servicios">Niñera</span>
                <div class="linea-servicios">
                </div>
            </div>
        </div>
    </div>
    <img src="unnamed.jpg" alt="" style="width: 100%; margin-top: 11%;">
    <div class="mar">

        <!--bodyyy-->
        <div class="provedores">
            <div class="elec" id="ele">
                <a href="detalles.php">
                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="electricista.jpg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Electricista</span>
                        </div>
                        <div class="lin1">
                            <span>JOSÉ GONZÁLEZ</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>5</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>28</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>
                </a>

                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="electricista2.jpeg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Electricista</span>
                        </div>
                        <div class="lin1">
                            <span>RAMIRO REYES</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>5</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>28</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="electricista3.jpeg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Electricista</span>
                        </div>
                        <div class="lin1">
                            <span>SEBASTIAN MONTES</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>5</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>28</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <div class="plom" id="plo">
                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="plomero.jpg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Plomero</span>
                        </div>
                        <div class="lin1">
                            <span>CARLOS MONROY</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>3</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>25</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="plomero2.jpeg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Plomero</span>
                        </div>
                        <div class="lin1">
                            <span>EMIR GOMEZ</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>4</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>27</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>


                <div class="cuadro-prov">
                    <div class="foto-prov">
                        <img src="plomero3.jpeg" alt="">
                        <div class="btn-contrato">
                            <form action="">
                                <input type="button" value="Contratar">
                            </form>
                        </div>
                    </div>
                    <div class="datos">
                        <div class="cat">
                            <span class="categoria-cuadro">Plomero</span>
                        </div>
                        <div class="lin1">
                            <span>JORGE PEÑA</span>

                        </div>
                        <div class="estrellas">
                            <span class="num-star">5</span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                            <span class="material-symbols-sharp">
                                star
                            </span>
                        </div>
                        <div class="lin3">
                            <div class="exp" title="Experiencia">
                                <span class="material-symbols-sharp">
                                    social_leaderboard
                                </span>
                                <span><span>6</span> años</span>
                            </div>
                            <div class="exp" title="Género">
                                <span class="material-symbols-sharp">
                                    wc
                                </span>
                                <span>Hombre</span>
                            </div>
                            <div class="exp" title="Edad">
                                <span class="material-symbols-sharp">
                                    calendar_month
                                </span>
                                <span><span>48</span> años</span>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>


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