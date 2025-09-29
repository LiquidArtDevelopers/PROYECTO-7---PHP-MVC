<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/quienesSomos.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es/sobre-nosotros">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/es/metadatos_globales.php'
    ?>
</head>
<body>
    <!-- NAV -->
    <?php include './php/includes/es/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1>PROYECTO 7 MVC</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>
        
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>
</body>
</html>