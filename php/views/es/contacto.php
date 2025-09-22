<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/contacto.min.css">
</head>

<body>

    <!-- HERO01 -->
    <header>        
        <h1>Estamos cerca de ti</h1>
        <div>            
            <img src="/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>        
    </header>

    <!-- NAV -->
    <?php include './php/includes/es/nav.php' ?>

    <main>
        <section>
            <div class="h2Especial">
                <span></span>
                <h2>Contáctanos</h2>
            </div>
            <!-- artículo form -->
            <article class="artForm">
                <h3>Lorem ipsum dolor sit.</h3>

                <form action="<?php echo __DIR__."../../app/gestionForm.php" ?>" method="post">

                    <label for="nombre">Nombre *</label>
                    <input type="text" name="" id="nombre" placeholder="* Escribe tu nombre" required minlength="3" maxlength="20">

                    <label for="tel">Teléfono</label>
                    <input type="tel" name="" id="tel" placeholder="Aquí tu teléfono">

                    <label for="email">Email *</label>
                    <input type="email" name="" id="email" placeholder="* Correo electrónico" required>

                    <label for="mensaje">Comentarios</label>
                    <textarea name="" id="mensaje" placeholder="Escribe aquí tu mensaje" minlength="5" maxlength="200"></textarea>

                    <input type="submit" value="ENVIAR" class="boton">

                    <p>* Campos obligatorios</p>

                </form>                
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>
</body>


</html>