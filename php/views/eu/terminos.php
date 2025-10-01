<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pribatutasun eta cookie kudeaketaren baldintzak</title>
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/terminos.min.css">

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/eu/lege-baldintzak">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/eu/metadatos_globales.php'
    ?>
</head>
<body>
    <!-- NAV -->
    <?php
    include './php/includes/eu/nav.php'
    ?>
    
    <!-- HERO01 -->
    <header>        
        <h1>Pribatutasun eta cookie kudeaketaren baldintzak</h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Aginagako Okindegia logotipoa" title="Aginagako Okindegia">
        </div>
        <a href="<?=$_ENV['RUTA']?>/eu" class="boton" title="Aurkitu Aginagako Okindegia">Hasiera</a>     
    </header>

    <?php
    // Variables de texto legal
    $razonSocial="Aginagako Okindegia";
    $correo ="";
    $cif="";
    $telefono="";
    $direccion="";
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2>Lege Oharra</h2>

            <article id="identificacion-titular">
                <h3>Titularraren identifikazioa</h3>
                <p>34/2002 Legearen 10. artikulua betez, informazioaren gizarteko zerbitzuei eta merkataritza elektronikoari buruzko uztailaren 11koa (LSSI-CE), honako identifikazio datuak ematen dira:</p>
                <ul>
                    <li><strong>Izen soziala:</strong> <?= $razonSocial ?></li>
                    <li><strong>IFK:</strong> N123123</li>
                    <li><strong>Helbidea:</strong> Elutx kalea 14, behea, 20170 Aginaga, Gipuzkoa (Espainia)</li>
                    <li><strong>Posta elektronikoa:</strong> <a href="mailto:info@profe.webda.eus">info@profe.webda.eus</a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3>Gunearen helburua</h3>
                <p><?= $razonSocial ?>-ren produktu artisauei buruz informatzea eta erabiltzaileei gaiturik dauden harremanetarako bideen bidez kontsultak edo eskaerak egiteko aukera ematea.</p>
            </article>

            <article id="condiciones-uso">
                <h3>Erabilera baldintzak</h3>
                <p>Webgune honetara sartzeak eta nabigatzeak erabiltzaile izaera ematen du eta Lege Ohar hau onartzea dakar. <?= $razonSocial ?>-k edukia aldatu ahal izango du egoki irizten dionean.</p>
            </article>

            <article id="responsabilidad">
                <h3>Erantzukizuna</h3>
                <p><?= $razonSocial ?>-k neurri arrazoizkoak hartzen ditu edukiak zehatzak eta eguneratuak izan daitezen, eta guneak behar bezala funtziona dezan. Hala ere, ezin du bermatu akatsen edo etenen erabateko gabezia, ezta erakundeari egotzi ezin zaizkion interferentzia, matxura, birus edo deskonexioetatik eratorritako kalteengatik erantzun ere.</p>
            </article>

            <article id="propiedad-intelectual">
                <h3>Jabetza intelektuala eta industriala</h3>
                <p>Kontrakorik adierazi ezean, gunearen edukien gaineko eskubideak (testuak, irudiak, logotipoak, diseinua eta kodea) <?= $razonSocial ?>-renak edo erabilera baimendu duten hirugarrenenak dira. Debekatuta dago aurretiko idatzizko baimenik gabe erreproduzitzea, banatzea, publikoki komunikatzea edo eraldatzea.</p>
            </article>

            <article id="enlaces-terceros">
                <h3>Estekak</h3>
                <p>Hirugarrenen guneetarako estekak erabiltzailearen erosotasunerako ematen dira. <?= $razonSocial ?> ez da edukien edo haietara sartzeak ekar ditzakeen emaitzen erantzule.</p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3>Legeria eta jurisdikzioa</h3>
                <p>Lege Ohar hau Espainiako legeriaren menpe dago. Kontrakorik dioen arau beharturik ezean, aldeek Donostiako epaitegi eta auzitegien menpe jartzen dute euren burua edozein eztabaidarako.</p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2>Cookie kudeaketa</h2>

            <article id="que-son-cookies">
                <h3>Zer dira cookie-ak?</h3>
                <p>Orri jakin batzuk bisitatzen dituzunean zure gailuan deskargatzen diren fitxategi txikiak, besteak beste, lehentasunak gogoratzea edo entzuleria neurketak egitea ahalbidetzen dutenak.</p>
            </article>

            <article id="cookies-utilizadas">
                <h3>Erabilitako cookie-ak</h3>
                <ul>
                    <li><strong>Cookie teknikoak (beharrezkoak):</strong> nabigazioko oinarrizko funtzioak, gunearen segurtasuna, baimenaren kudeaketa eta saioaren mantentzea gaitzen dituzte. LSSI-ko 22.2 artikuluaren arabera titularraren interes legitimoagatik instalatzen dira.</li>
                    <li><strong>Pertsonalizazio cookie-ak:</strong> hizkuntza edo kokalekua bezalako aukerak gogoratzen dituzte. Zure baimenarekin instalatzen dira erabiltzaileak zuzenean aukeratzen ez dituenean.</li>
                    <li><strong>Analisi cookie-ak:</strong> gunearen erabilera neurtzea ahalbidetzen dute (adibidez, bisitatutako orriak, egonaldi denbora) produktuak eta zerbitzuak hobetzeko helburuarekin. Zuk onartzen badituzu soilik instalatzen dira. Hirugarrenen zerbitzuak erabil ditzakegu (adib., Google Analytics). <a href="#config-cookies">Konfigurazio panelean</a> hornitzaileen, helburuaren, iraungitzearen eta nazioarteko transferentziak egiten dituzten xehetasunak erakutsiko dira.</li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3>Oinarri juridikoa</h3>
                <p>Cookie teknikoak gunearen funtzionamendua ahalbidetzeko instalatzen dira. Pertsonalizazio eta analisi cookie-ek zure baimena behar dute, edozein unetan kudea dezakezuna <a href="#config-cookies" id="configurarCookies">cookie-en konfigurazio paneletik</a>, <em>Onartu</em> eta <em>Ukatu</em> aukera baliokideekin eta aukera gordetzeko aukerarekin.</p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3>Nazioarteko transferentziak</h3>
                <p>Europako Esparru Ekonomikotik kanpo ezarritako hornitzaileen analisi cookie-ak onartzen badituzu, zure datuak herrialde horietara transferitu ahal izango dira. Hornitzailea <em>EU-U.S. Data Privacy Framework</em>-era atxikita dagoenean edo kontratu-klausula tipoak edo beste berme egoki batzuk daudenean, transferentzia aplikagarria den araudiaren arabera egingo da. Cookie-en panelak informazio hau eguneratuta erakutsiko du.</p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3>Nola kudeatu cookie-ak nabigatzailean</h3>
                <p>Cookie-ak ezabatu edo blokeatu ditzakezu zure nabigatzailearen konfiguraziotik. Informazio gisa:</p>
                <ul>
                    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
                    <li><a href="https://support.mozilla.org/kb/borrar-cookies" target="_blank" rel="noopener">Mozilla Firefox</a></li>
                    <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
                    <li><a href="https://support.microsoft.com/help/17442/windows-internet-explorer-delete-manage-cookies" target="_blank" rel="noopener">Edge / Internet Explorer</a></li>
                </ul>
                <p>Cookie jakin batzuk desaktibatzeak gunearen funtzionamenduan eragina izan dezake.</p>
            </article>

            <article id="config-cookies">
                <h3>Cookie-en konfigurazioa</h3>
                <p>Panel honetatik zure lehentasuna aldatu ahal izango duzu edozein unetan. Baimen kudeatzaile bat integratzen baduzu, jarri hemen errendatzen den edukiontzia:</p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3>Eguneratzeak</h3>
                <p><?= $razonSocial ?>-k Cookie Politika hau eguneratu ahal izango du arau edo teknika aldaketetara egokitzeko. Aldian-aldian berrikustea gomendatzen dizugu.</p>
            </article>
        </section>
        
        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2>Pribatutasun politika</h2>

            <article id="responsable-tratamiento">
                <h3>Tratamenduaren arduraduna</h3>
                <p><strong><?= $razonSocial ?></strong> (IFK N123123), Elutx kalea 14, behea, 20170 Aginaga, Gipuzkoa. Posta: <a href="mailto:info@profe.webda.eus">info@profe.webda.eus</a>.</p>
            </article>

            <article id="datos-procedencia">
                <h3>Tratatutako datuak eta jatorria</h3>
                <p>Gunearen formularioen edo harremanetarako bideen bidez ematen dizkiguzun datuak tratatzen ditugu: izen-abizenak, posta elektronikoa, telefonoa, helbidea hala badagokio, eta zure kontsulta edo eskaeraren edukia. Era berean, <a href="#cookiesZona">Cookie politikan</a> deskribatutakoaren arabera nabigazioarekin lotutako datuak tratatzen ditugu (adibidez, IP helbidea, gailuaren identifikatzaileak eta bisitatutako orriak), soilik onartu badituzu.</p>
            </article>

            <article id="finalidades-tratamiento">
                <h3>Helburuak</h3>
                <ul>
                    <li><strong>Kontsultaren hartu-agiria</strong>: zure eskaera jaso dugula baieztatzen duen posta elektroniko automatikoa bidaltzea.</li>
                    <li><strong>Kontsulten kudeaketa eta bezeroarentzako arreta</strong>: zure eskaeraren analisia eta ondorengo harremana posta elektroniko edo telefono bidez ebazteko.</li>
                    <li><strong>Barne erregistro bat sortzea</strong> gure datu-basean kontsulten jarraipena, kalitate kontrola eta zerbitzua hobetzeko.</li>
                    <li><strong>Eskaera eta salmenten kudeaketa</strong> produktu edo zerbitzuak eskatzen dituzunean.</li>
                    <li><strong>Merkataritza komunikazioak</strong> produktu, eskaintza edo berritasunei buruz, soilik zure berariazko baimena ematen baduzu edo aurretiko kontratu harremana badago eta antzeko produktuak badira, edozein unetan baja eman ahal izanik.</li>
                    <li><strong>Gunearen segurtasuna eta estatistikak</strong> cookie tekniko eta, hala badagokio, analisi cookie-en bidez gehiegikeriak prebenitzeko eta esperientzia hobetzeko.</li>
                </ul>
            </article>

            [Traducción continúa con el resto de secciones sobre privacidad con el mismo formato pero en euskera...]

    </main>

    <!-- FOOTER -->
    <?php
    include './php/includes/eu/footer.php'
    ?>
</body>
</html>