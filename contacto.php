
<?php
// Título de la página de contacto.
$titulo = "Contáctame";

// Información de contacto de ejemplo.
$correo = "llaraphp@gmail.com";
$horario = "Lunes a viernes";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo; ?></title>

    <!-- Conexión con los estilos CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Encabezado -->
    <header>
        <h1><?php echo $titulo; ?></h1>
        <p>Estoy aca para ayudarte</p>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="personal.php">Personal</a>
        <a href="contacto.php">Contacto</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <h2>Información de contacto</h2>

        <p>
            Si deseas que te asesore o ayude con tu proyecto en 
            php escribeme. 
        </p>

        <section class="tarjeta">
            <h3>Correo electrónico</h3>
            <p>
                <a href="mailto:<?php echo $correo; ?>">
                    <?php echo $correo; ?>
                </a>
            </p>
        </section>

        <section class="tarjeta">
            <h3>Horario de atención</h3>
            <p><?php echo $horario; ?></p>
        </section>

        <section class="tarjeta">
            <h3>Atención al usuario</h3>
            <p>
                Trabajando en equipo todos aprendemos
                de mejor manera. 
            </p>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Proyecto académico SENA ADSO</p>
        <p>Desarrollado con PHP, HTML y CSS</p>
    </footer>

</body>
</html>
