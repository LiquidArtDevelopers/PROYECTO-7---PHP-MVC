<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aginagako Okindegia | Kalitate handiko gozotegi lantegia</title>
    <meta name="description" content="120 eta 320 karaktere">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/inicio.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu">

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
        <h1>Aginagako Okindegia</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="boton">Jarri gurekin harremanetan</a>    
    </header>

    <main>

        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Hona hemen zure okindegia Aginagan</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Egunero-eguneroko produktu artisaua</h3>
                    <p>70 urte baino gehiago daramatzagu Aginagan gure bezeroak kalitate oneneko ama orez eta irinez egindako ogi onenekin asetzen. Gure gozotegiak produktu sorta zabala du, produktu onenak erabiliz egina</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Lanbidez okinak</h4>
                            <p>Ezagutu gure lantegi eta okinen taldea.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/guri-buruz" class="moduloBoton01">
                                <span>Ezagutu gure taldea</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Lehen mailako produktuak</h4>
                            <p>Egunero eginak maisuek irin onenekin.</p>
                            <a href="<?=$_ENV['RUTA']?>/eu/produktuak" class="moduloBoton01">
                                <span>Gure produktuak</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/eu/kontaktua" class="moduloBoton02">
                        <span>Jarri gurekin harremanetan</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Ezagutu gure taldea</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Art03-ko h3 izenburua</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>
        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Gure produktuak</h2>
            </div>
            <!-- Artículo 02 -->
            <article class="art02">

                <div class="textos">
                    <h3>Art02-ko h3 izenburua</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae repudiandae obcaecati magni odio eius maxime iste expedita? Cum vel ad nihil laborum. Nobis unde aperiam rerum pariatur dignissimos, quam consequatur.</p>
                    <a href="" class="moduloBoton02">
                        <span>Informazio gehiago</span>
                        <img src="./assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>

                <div class="imagenes">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                    <img src="https://dummyimage.com/900x900" alt="" title="">
                </div>

            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include './php/includes/eu/footer.php'?>

</body>
</html>