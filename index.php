
<?php
// Título principal de la página.
$titulo = "Mi primer sitio wed con PHP";

// Mensaje de bienvenida.
$mensaje = "Hola instructor.";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo; ?></title>

    <!-- Conexión con el archivo de estilos CSS -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Encabezado principal -->
    <header>
        <h1><?php echo $titulo; ?></h1>
        <p>¿Que es?, personal, contacto</p>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="personal.php">Personal</a>
        <a href="contacto.php">Contacto</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <h2>¡Bienvenido!</h2>

        <p><?php echo $mensaje; ?></p>

        <p>
            Este sitio web fue creado como parte de mi proyecto
            de formación en Análisis y Desarrollo de Software
            del SENA, utilizando PHP y HTML.
        </p>

        <section class="tarjeta">
            <h3>¿Que es php?</h3>
            <p>
                Ses un lenguaje de programación interpretado 
                de código abierto, diseñado específicamente para 
                el desarrollo web del lado del servidor
            </p>
        </section>

      <section class="tarjeta">
    <h3>Características principales</h3>
    <ol>
        <li><strong>Es dinámico:</strong> Permite crear sitios que cambian según los datos del usuario o de una base de datos.</li>
        <li><strong>Conexión a bases de datos:</strong> Tiene una integración nativa y muy potente con sistemas de bases de datos como MySQL, PostgreSQL o SQLite.</li>
        <li><strong>Multiplataforma:</strong> Funciona sin problemas en servidores como Apache o Nginx y en sistemas operativos como Windows, Linux o macOS.</li>
        <li><strong>Sintaxis accesible:</strong> Su estructura es relativamente sencilla de aprender para quienes ya conocen bases de C o Java.</li>
    </ol>
</section>


        <p class="centrado">
            Utiliza el menú superior para conocer un poco más
            de php
        </p>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>Proyecto académico SENA ADSO</p>
        <p>Desarrollado con PHP, HTML y CSS</p>
    </footer>

</body>
</html>
