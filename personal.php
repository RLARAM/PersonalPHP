
<?php
// Título de la página del personal.
$titulo = "Áreas en las que te puedes desempeñar";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo; ?></title>

    <!-- Archivo de estilos del sitio web -->
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <!-- Encabezado -->
    <header>
        <h1><?php echo $titulo; ?></h1>
        <p>Aquí tienes los principales roles</p>
    </header>

    <!-- Menú de navegación -->
    <nav>
        <a href="index.php">Inicio</a>
        <a href="personal.php">Personal</a>
        <a href="contacto.php">Contacto</a>
    </nav>

    <!-- Contenido principal -->
    <main>
        <h2>Si estudias PHP</h2>

        <p>
            Te capacitas para trabajar principalmente en el desarrollo 
            de aplicaciones web y plataformas digitales.
        </p>

        <section class="tarjeta">
            <h3>Desarrollador Backend PHP:</h3>
            <p>
                Te encargarás de la lógica del servidor, las bases de datos
                y la comunicación entre el servidor y el navegador. Es el rol
                 más natural y directo.
            </p>
        </section>

        <section class="tarjeta">
            <h3>Desarrollador Full Stack:</h3>
            <p>
                Si además de PHP aprendes tecnologías del lado del 
                cliente (como HTML, CSS y JavaScript), podrás crear 
                sitios web completos por tu cuenta.
            </p>
        </section>

        <section class="tarjeta">
            <h3>Desarrollador WordPress / CMS:</h3>
            <p>
                PHP es el motor de sistemas de gestión de contenidos
                como WordPress, Drupal y Joomla. Puedes trabajar 
                creando temas, plugins o personalizando sitios para empresas.
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
