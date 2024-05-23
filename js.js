function abrirLog() {
    let menu = document.getElementById("menu");
    let log = document.getElementById("login");
    

    // Alternar la clase "abierto" en el menú para abrir o cerrar
    menu.classList.toggle("abierto");

    // Alternar la clase "sombralog" en el botón de inicio de sesión para añadir o quitar la sombra
    log.classList.toggle("sombralog");


    document.addEventListener('click', function (event) {
        // Comprobar si el clic ocurrió fuera del menú
        if (!log.contains(event.target) && event.target !== log) {
            menu.classList.remove("abierto");
        }
    });

}

function abririnicio() {
    let cuadroinicio = document.getElementById("cuadroinicio");
    let overlay = document.getElementById("overlay");
    let cuadro = document.getElementById("centra");

    cuadroinicio.classList.toggle("abierto");

    document.body.classList.toggle("no-scroll");

    // Alternar la clase "opaco" en el cuerpo y mostrar/ocultar el overlay para hacerlo semitransparente y deshabilitar la interacción
    overlay.style.display = (overlay.style.display === "block") ? "none" : "block";

    cuadro.style.display = (cuadroinicio.style.display === 'none') ? 'none' : 'flex';

    document.addEventListener('click', function (event) {
        // Comprobar si el clic ocurrió fuera del menú
        if (!cuadroinicio.contains(event.target) && event.target == overlay) {
            cuadroinicio.classList.remove("abierto");
            cuadroinicio.classList.remove("abierto");
            document.body.classList.remove("no-scroll");
            overlay.style.display = 'none';
            cuadro.style.display = 'none';
        }
    });
}

function cerrarcuadroini() {
    let cuadroinicio = document.getElementById("cuadroinicio");
    let overlay = document.getElementById("overlay");

    cuadroinicio.classList.remove("abierto");
    document.body.classList.remove("no-scroll");
    overlay.style.display = 'none';
}

function limitarLongitud() {
    let input = document.getElementById("codigo");
    if (input.value.length > 5) {
      input.value = input.value.slice(0, 5); // Recortar a 5 caracteres si excede
    }
  }

  function seleccionarImagen() {
    // Simula el clic en el campo de entrada de archivos al hacer clic en el div de la foto de perfil
    document.getElementById('imagen-input').click();
}

function mostrarImagen() {
    var input = document.getElementById('imagen-input');
    var imagenPerfil = document.getElementById('imagen-perfil');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        // Cuando se carga la imagen, establece el src de la imagen de perfil y la muestra
        reader.onload = function(e) {
            imagenPerfil.src = e.target.result;
            imagenPerfil.style.display = 'block';
        };

        // Lee el archivo como URL de datos
        reader.readAsDataURL(input.files[0]);
    }
}

function validarContra() {
    // Obtener el valor de las contraseñas ingresadas
    var contraseña1 = document.getElementById("contraseña1").value;
    var contraseña2 = document.getElementById("contraseña2").value;

    // Verificar si las contraseñas son iguales
    if (contraseña1 !== contraseña2) {
        // Mostrar un mensaje de error
        alert("Las contraseñas no coinciden");
        // Evitar el envío del formulario
        return false;
    }
    // Permitir el envío del formulario si las contraseñas son iguales
    return true;
}

function electricistas(){
    let elect = document.getElementById('ele');
    let plom = document.getElementById('plo');

    elect.style.display = 'flex';
    plom.style.display = 'none';

}

function plomeros(){
    let elect = document.getElementById('ele');
    let plom = document.getElementById('plo');

    elect.style.display = 'none';
    plom.style.display = 'flex';

}


function alerta(){
    Swal.fire({
        title: "Lo haz contratado!",
        text: "Te enviaremos correo electronico para darte la información detallada!",
        icon: "success"
      });
}