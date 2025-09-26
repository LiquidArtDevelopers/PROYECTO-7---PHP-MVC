<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/inicio.min.css">
    <?php include './php/includes/eu/metadatos_globales.php' ?>
</head>
<body>

    <!-- NAV -->
    <?php include './php/includes/eu/nav.php' ?>

    <!-- HERO01 -->
    <header>        
        <h1>PROIEKTUA 7 MVC</h1>
        <div>            
            <img src="/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="" class="boton">CTA</a>    
    </header>

    <main>

        <!-- PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2>Presentación panadería</h2>
            </div>
            <article>
                <!-- hijo 1 -->
                <div>
                    <h3>Encabezado h3</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae vitae amet rem earum maiores similique provident dolorem sunt odit sequi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="./assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="https://dummyimage.com/40x40" alt="">
                            <h4>Encabezado h4</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat iusto ipsam quam porro, rem non nulla distinctio eligendi id possimus.</p>
                            <a href="" class="moduloBoton01">
                                <span>Leer más</span>
                                <img src="./assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="" class="moduloBoton02">
                        <span>Contacta con nosotros</span>
                        <img src="./assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="https://dummyimage.com/1000x1500" alt="">
                </div>
            </article>
        </section>

        <!-- SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Nuestro equipo</h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                
                <h3>Encabezado h3 del art03</h3>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro impedit deleniti cupiditate laudantium facere explicabo quo doloremque amet, molestias molestiae cum beatae, dolorum temporibus similique itaque dolore. Assumenda, possimus laborum.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae dolor a asperiores recusandae necessitatibus. Consequatur, molestiae ducimus? Eum, assumenda labore.</p>

                <img src="https://dummyimage.com/1500x900" alt="" title="">

            </article>
        </section>

        <!-- PRODUCTOS -->
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
    <?php include './php/includes/eu/footer.php'?>
    




</body>
</html>