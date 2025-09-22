<footer>
    <!-- caja superior de información -->
    <div>
        <div class="cajaInfo"> 
            <?php
            // enlaces de la web
            include './php/includes/eu/enlaces_menu.php'
            ?>
        </div>

        <div class="cajaInfo">
            <ul>
                <li><a href="">Página de interés de Área</a></li>
                <li><a href="">Página de interés 2</a></li>
            </ul>
            <div class="rrss">
                <a href="" title="Facebook de la [empresa]" target="_blank">
                    <img src="<?=$ruta?>/assets/img/system/logo-facebook.svg" alt="Facebook de la [empresa]" title="Facebook de la [empresa]" width="30" height="30">
                </a>

                <a href="https://www.linkedin.com/in/igor-aranaz-pastor/" title="Visita nuestro linkedin" target="_blank">
                    <img src="<?=$ruta?>/assets/img/system/logo-linkedin.svg" alt="Visita nuestro linkedin" title="Visita nuestro linkedin" width="30" height="30">
                </a>

                <a href="" title="Instagram de nuestra [empresa]" target="_blank">
                    <img src="<?=$ruta?>/assets/img/system/logo-instagram.svg" alt="Instagram de nuestra [empresa]" title="Instagram de nuestra [empresa]" width="30" height="30">
                </a>

                <a href="https://www.youtube.com/@LiquidArtDevelopers" title="YouTube de nuestra [empresa]" target="_blank">
                    <img src="<?=$ruta?>/assets/img/system/logo-youtube.svg" alt="YouTube de nuestra [empresa]" title="YouTube de nuestra [empresa]" width="30" height="30">
                </a>
            </div>
        </div>

        <div class="cajaInfo">
            <ul>
                <li>
                    <a href="tel:+34943123123" title="Llámanos al 943 123 123" target="_blank">
                        <img src="<?=$ruta?>/assets/img/system/call.svg" alt="Llámanos al 943 123 123" title="Llámanos al 943 123 123" width="20" height="20"> 
                        <span>943 123 123</span>
                    </a>
                </li>

                <li>
                    <a href="https://api.whatsapp.com/send/?phone=34628749350" title="Escríbenos al whatsapp 600 123 123" target="_blank">
                        <img src="<?=$ruta?>/assets/img/system/logo-whatsapp.svg" alt="Escríbenos al whatsapp 600 123 123" title="Escríbenos al whatsapp 600 123 123" width="20" height="20"> 
                        <span>600 123 123</span>
                    </a>
                </li>       

                <li>
                    <a href="mailto:aranaz@gmail.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" target="_blank">
                        <img src="<?=$ruta?>/assets/img/system/mail.svg" alt="Mándanos un correo a la siguiente dirección correo@correo.com" title="Mándanos un correo a la siguiente dirección correo@correo.com" width="20" height="20"> 
                        <span>correo@correo.com</span>
                    </a>
                </li>

                <li>
                    <a href="https://maps.app.goo.gl/EB3bPiGW1yfoJg3p9" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" target="_blank">
                        <img src="<?=$ruta?>/assets/img/system/location.svg" alt="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" title="Estamos en Donostia en la dirección Paseo Portuetxe 23b, 413 Donostia" width="20" height="20"> 
                        <span>Paseo Portuetxe 23b<br>413 Donostia</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- caja inferior de info -->
    <div>
        <img src="<?=$ruta?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="" title="" width="200" height="80">
        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, nostrum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, animi quod fugiat dolor eius enim odio vitae cum exercitationem. Deserunt saepe culpa officia expedita corrupti quo rerum ipsum dolore veniam!</p>
            <div id="zonaTerminos">
                <a href="./terminos.php#legalZona">Aviso legal</a>
                <a href="./terminos.php#cookiesZona">Gestión de cookies</a>
                <a href="./terminos.php#privacidadZona">Política de privacidad</a>
            </div>
            <p>© <?php echo $anio?> Todos los derechos reservados</p>
        </div>
    </div>
</footer>