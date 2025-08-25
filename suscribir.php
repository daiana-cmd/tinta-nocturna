<?php
include 'conexion.php';
include 'enviar-correo.php';

// Validar correo
if (!isset($_POST['correo']) || empty($_POST['correo'])) {
    mostrarMensaje("⚠️ No se recibió ningún correo.", false);
    exit;
}

$email = $_POST['correo'];

// Guardar en la base de datos
$consulta = "INSERT INTO suscriptores (email) VALUES ('$email')";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    enviarEmail($email); // si querés
    mostrarMensaje("🖋️ ¡Gracias por sumarte a la noche!", true);
} else {
    mostrarMensaje("❌ Error al guardar: " . mysqli_error($conexion), false);
}

exit;

// Función para mostrar la respuesta con botón
// este es el mensaje que te manda cuando se envia el email lo podes cambiar de aca
function mostrarMensaje($mensaje, $exito) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado de Suscripción</title>
        <style>
            body {
                font-family: sans-serif;
                background-color: #121212;
                color: white;
                text-align: center;
                padding: 2em;
            }
            .mensaje {
                background-color: <?= $exito ? '#1e7f1e' : '#7f1e1e' ?>;
                padding: 1em;
                margin-bottom: 2em;
                border-radius: 10px;
            }
            .volver {
                background-color: #333;
                color: white;
                padding: 0.7em 1.5em;
                text-decoration: none;
                border-radius: 8px;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }
            .volver:hover {
                background-color: #555;
            }
        </style>
    </head>
    <body>
        <div class="mensaje">
            <?= $mensaje ?>
        </div>
        <a href="index.php" class="volver">Volver al inicio</a>
    </body>
    </html>
    <?php
}
?>
