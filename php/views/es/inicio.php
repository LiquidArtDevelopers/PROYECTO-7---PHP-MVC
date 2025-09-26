<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería Aginaga | Obrador pastelería de alta calidad</title>
    <meta name="description" content="120 y 320 caracteres">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/inicio.min.css">
    <?php include './php/includes/es/metadatos_globales.php' ?>
</head>
<body>



    <!-- NAV -->
    <?php include './php/includes/es/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1>Panadería Aginaga</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton">Contáctanos</a>    
    </header>

    <main>

        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Te presentamos tu panadería en Aginaga</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Producto artesanal para el día a día</h3>
                    <p>Llevamos más de 70 años en Aginaga satisfaciendo a nuestros clientes con los mejores panes de masa madre y harinas de la mejor calidad. Nuestra pastelería dispone de un amplio surtido, elaborada los mejores productos </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4>Panaderos de profesión</h4>
                            <p>Conoce nuestro equipo de obradores y panaderos.</p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span>Conoce nuestro equipo</span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4>Productos de primera calidad</h4>
                            <p>Elaborados cada día por los maestros obradores con las mejores harinas.</p>
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

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Conóce nuestro equipo</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Encabezado h3 del art03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>
        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestros productos</h2>
            </div>
            <!-- Artículo 02 -->
            <article class="art02">

                <div class="textos">
                    <h3>Encabezado h3 del art02</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae repudiandae obcaecati magni odio eius maxime iste expedita? Cum vel ad nihil laborum. Nobis unde aperiam rerum pariatur dignissimos, quam consequatur.</p>
                    <!-- <a href="" class="boton">Más info</a> -->
                    <a href="" class="moduloBoton02">
                        <span>Más información</span>
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
    <?php include './php/includes/es/footer.php'?>




</body>
</html>