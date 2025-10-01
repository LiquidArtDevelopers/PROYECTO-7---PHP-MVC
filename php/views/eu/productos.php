<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gure okindegiko produktuak</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/productos.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/produktuak">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/eu/metadatos_globales.php'
    ?>

</head>
<body>
    <!-- NAV -->
    <?php include './php/includes/eu/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1>7. PROIEKTUA MVC</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>
        
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/eu/footer.php'?>
</body>
</html>