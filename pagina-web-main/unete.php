<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomelyFix</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js.js"></script>

    <link rel="shortcut icon" href="icono.ico" type="image/x-icon">
</head>

<body>
<div class="overlay" id="overlay"></div>
    <header>
        <div class="nav-bar">
            <a href="index.php">
                <div class="nav-logo">
                    <img src="homelyfix.png" alt="" class="logo">
                </div>
            </a>
            <div class="nav-central r">
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
                        <li><a href="registro.php"><span>Regístrate</span></a></li>
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
    <div class="mar">
        <div class="reg">
            <div class="no-limpio">
                <h3 class="une">¡Únete!</h3> <h3 class="homely">HomelyFix</h3>
                <img src="icono.png" alt="" style="width: 300px" class="icon">
            </div>
            <div class="form-registro">
                <h2>¡Haz tu registro!</h2>
                <form action="reg-unete.php" enctype="multipart/form-data" method="post"  onsubmit="return validarContra()">
                    <div class="contenedor">
                        <img onclick="seleccionarImagen()" src="electricista.jpg" alt="" id="imagen-perfil">
                        <div class="foto-perfil" onclick="seleccionarImagen()">
                            <div class="la">
                                <label for="" class="fotografia">Fotografía*</label>
                                <span class="material-symbols-sharp">
                                    person_add
                                </span>
                                <input type="file" name="foto" id="imagen-input" style="opacity: 0;" onchange="mostrarImagen()" required>
                            </div>
                        </div>
                    </div>
                    <div class="lin-datos">
                        <div class="datos-per"><span>Datos personales</span></div>
                        <div class="linea"></div>
                    </div>
                    <div class="lnombre">
                        <div class="la">
                            <label for="">Nombre*</label>
                            <input type="text" name="nombre" id="" required>
                        </div>
                        <div class="la">
                            <label for="">Apellido Paterno*</label>
                            <input type="text" name="paterno" id="" required>
                        </div>
                        <div class="la">
                            <label for="">Apellido Materno*</label>
                            <input type="text" name="materno" id="" required>
                        </div>

                    </div>
                    <div class="la">
                        <label for="">Genero*</label>
                    </div>
                    <div class="gen">

                        <label for="M">Masculino</label>
                        <input type="radio" name="gen" id="M" value="M">
                        <label for="F">Femenino</label>
                        <input type="radio" name="gen" id="F" value="F">
                        <label for="O">Otro</label>
                        <input type="radio" name="gen" id="O" value="O">
                    </div>
                    <div class="ltel">
                        <div class="la">
                            <label for="">Teléfono*</label>
                            <input type="tel" name="telefono" id="" required>
                        </div>
                        <div class="la">
                            <label for="">Fecha de nacimiento*</label>
                            <input type="date" name="fecha" id="" required>
                        </div>
                    </div>
                    <div class="lin-datos">
                        <div class="datos-per"><span>Domicilio</span></div>
                        <div class="linea"></div>
                    </div>
                    <div class="direccion">
                        <div class="la">
                            <label for="">Calle*</label>
                            <input type="text" name="calle" id="" required>
                        </div>
                        <div class="la">
                            <label for="">No. exterior*</label>
                            <input type="text" name="exterior" id="" required>
                        </div>
                        <div class="la">
                            <label for="">No. interior</label>
                            <input type="text" name="interior" id="" value='0'>
                        </div>
                    </div>
                    <div class="colo">
                        <div class="la">
                            <label for="">Código postal*</label>
                            <input type="number" name="cp" id="codigo-postal" required>
                        </div>
                        <div class="la">
                            <label for="">Col., Fracc o Barrio*</label>
                            <select name="col" id="colonias" required>
                                <option value="">Selecciona una colonia</option>
                            </select>
                        </div>
                    </div>

                    <div class="lin-datos">
                        <div class="datos-per"><span>Cuenta</span></div>
                        <div class="linea"></div>
                    </div>
                    <div class="cuenta">
                        <div>
                            <div class="la ser-unete">
                                <label for="">Servicio*</label>
                                <select name="servi" id="">
                                    <option value="">Electricista</option>
                                    <option value="">Plomero</option>
                                    <option value="">Limpieza</option>
                                    <option value="">Niñera</option>
                                </select>
                            </div>
                            <div class="la">
                                <label for="">Correo*</label>
                                <input type="email" name="correo" id="" required>
                            </div>
                            <div class="la">
                                <label for="">Contraseña*</label>
                                <input type="password" name="contraseña1" id="contraseña1" required minlength="8">
                            </div>
                            <div class="la">
                                <label for="">Confirme la contraseña*</label>
                                <input type="password" name="contraseña2" id="contraseña2" required minlength="8">
                            </div>
                        </div>
                    </div>
                    <div class="Registrarse">
                        <input type="submit" value="Registrarse">
                    </div>

                </form>
                <script>
                    document.getElementById('codigo-postal').addEventListener('input', function () {
                        var codigoPostal = this.value;

                        // Verificar si el código postal tiene longitud 5
                        if (codigoPostal.length === 5) {
                            // Realizar la solicitud al servicio web de Zippopotam.us
                            var url = `https://api.zippopotam.us/mx/${codigoPostal}`;
                            fetch(url)
                                .then(response => response.json())
                                .then(data => {
                                    // Extraer las colonias de la respuesta
                                    var colonias = data.places.map(place => place["place name"]);

                                    // Actualizar el contenido del select con las colonias
                                    var selectColonias = document.getElementById('colonias');
                                    selectColonias.innerHTML = ''; // Limpiar el contenido anterior
                                    colonias.forEach(colonia => {
                                        var option = document.createElement('option');
                                        option.value = colonia; // Valor de la opción (puede ser el mismo que el texto)
                                        option.textContent = colonia; // Texto visible en la opción
                                        selectColonias.appendChild(option);
                                    });
                                })
                                .catch(error => {
                                    console.error('Error al consultar el código postal:', error);
                                    alert('Error al consultar el código postal.');
                                });
                        }
                    });
                </script>
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