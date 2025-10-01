<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros | Panadería Aginaga - Tradición desde 1925</title>
    <meta name="description" content="Conoce al equipo de profesionales de Panadería Aginaga. Casi un siglo de tradición panadera en el corazón de Aginaga, elaborando productos artesanales de la mejor calidad.">
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
        <h1>Panaderos por tradición desde 1925</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Panadería Aginaga" title="Panadería Aginaga">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Contáctanos</a>    
    </header>

    <main>
        
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestro equipo de profesionales</h2>
            </div>

            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Un trato personal y cercano</h3>

                <p>En Panadería Aginaga, nuestro equipo es nuestra mayor fortaleza. Con más de 20 profesionales dedicados al arte de la panadería y pastelería artesanal, mantenemos viva la tradición que comenzó hace casi un siglo. Cada miembro de nuestro equipo aporta su experiencia y pasión para crear productos excepcionales que deleitan a nuestros clientes día tras día.</p>

                <p>La formación continua y el amor por nuestro oficio son los pilares que nos permiten mantener los más altos estándares de calidad. Desde maestros panaderos con décadas de experiencia hasta jóvenes aprendices que mantienen vivo el espíritu de innovación, todos compartimos el mismo compromiso: ofrecer el mejor producto artesanal con un trato cercano y personalizado.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>

            <!-- artículo 4 -->
            <article class="art04">
                <h3>Obradores de profesión</h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4>Mikel Arrizabalaga</h4>
                        <img src="https://dummyimage.com/90x90" alt="Mikel Arrizabalaga - Maestro Panadero" title="Mikel Arrizabalaga">                        
                        <p>Maestro panadero con más de 30 años de experiencia. Especialista en masas madre y panes tradicionales vascos. Su dedicación y conocimiento son el corazón de nuestra panadería.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>María Etxeberria</h4>
                        <img src="https://dummyimage.com/90x90" alt="María Etxeberria - Maestra Pastelera" title="María Etxeberria">                        
                        <p>Maestra pastelera que combina técnicas tradicionales con toques innovadores. Su creatividad ha dado lugar a algunas de nuestras especialidades más populares.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Jon Lizarraga</h4>
                        <img src="https://dummyimage.com/90x90" alt="Jon Lizarraga - Especialista en Bollería" title="Jon Lizarraga">                        
                        <p>Especialista en bollería artesanal. Su pasión por los detalles y la perfección técnica se refleja en cada croissant y pieza de bollería que sale de nuestro obrador.</p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4>Ana Mendizabal</h4>
                        <img src="https://dummyimage.com/90x90" alt="Ana Mendizabal - Panadera Artesana" title="Ana Mendizabal">                        
                        <p>Panadera artesana especializada en panes especiales y sin gluten. Su compromiso con la innovación nos permite ofrecer productos para todos los gustos y necesidades.</p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Desde 1925 en Aginaga</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Cercanía y tradición</h3>
                    <p>Nuestra historia comenzó en 1925 cuando la familia Arrizabalaga abrió las puertas de su pequeña panadería en Aginaga. Desde entonces, cuatro generaciones han mantenido vivo el espíritu artesanal y el compromiso con la calidad que nos caracteriza. Cada día elaboramos nuestros productos siguiendo las recetas tradicionales, combinando el saber hacer heredado con las técnicas más actuales.</p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="Icono historia" title="Nuestra historia">
                            <h4>Una historia llena de harina</h4>
                            <p>Casi un siglo de tradición panadera en Aginaga nos avala. Descubre cómo una pequeña panadería familiar se ha convertido en referente de la panadería artesanal en la comarca.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/nuestra-historia" class="moduloBoton01">
                                <span>Nuestra historia</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="Icono calidad" title="Calidad artesanal">
                            <h4>Productos de la mejor calidad</h4>
                            <p>Seleccionamos las mejores materias primas y mantenemos los procesos artesanales para garantizar el sabor y la calidad que nos distingue desde hace generaciones.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span>Nuestros productos</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>


    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>
</body>
</html>