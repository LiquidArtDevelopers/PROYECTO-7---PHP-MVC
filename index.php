<?php

require_once "./php/config/helpers.php";


// FASE 1 - CONFIGURAMOS LOS IDIOMAS Y RUTAS PERMITIDAS
// A CADA RUTA PERMITIDA LE ASIGNAMOS LA UBICACIÓN DEL ARCHIVO QUE TIENE SU CONTENIDO

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/php/views/es/inicio.php' 
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/php/views/es/quienesSomos.php'
        ],
        '/es/productos' => [
            'view'      => '/php/views/es/productos.php'
        ],
        '/es/contacto' => [
            'view'      => '/php/views/es/contacto.php'
        ]
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/php/views/eu/inicio.php'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/php/views/eu/quienesSomos.php'
        ],
        '/eu/produktuak' => [
            'view'      => '/php/views/eu/productos.php'
        ],
        '/eu/kontaktua' => [
            'view'      => '/php/views/eu/contacto.php'
        ]
    ]
];

// FASE 2 - COMO TODAS LAS PETICIONES LLEGAN AL INDEX.PHP (POR ACCIÓN DEL HTACCESS), AQUÍ ANALIZAMOS LA URL POR LA QUE VIENE PARA VER SI ES VÁLIDA O NO Y EN CASO DE SER VÁLIDA, CARGARLE LA VISTA (VIEW) ASIGNADA A ESA URL EN EL ARRAY.
// EN ESTA FASE 2 ANALIZAMOS LA URL POR LA QUE EL USUARIO VIENE, Y EXTRAEMOS EL LENGUAJE EN $lang Y LA RUTA AMIGABLE EN $url, SIENDO ESTAS DOS VARIABLES NECESARIAS PARA LA FASE 3


//Obtenemos la url entera desde la raiz
// Ejemplo: "/es/contacto?id=10"
$request = urldecode($_SERVER["REQUEST_URI"]) ?? '/es';



// Extraemos únicamente el path para ignorar los parámetros de consulta
// ejemplo: "/es/contacto"
$url = parse_url($request, PHP_URL_PATH) ?? "/es";


// Compruebo que $url no sea un "/", sino que sea otras url como "/es/contacto"
if ($url != "/") {
    // quito la "/" del final en caso de que la tenga
    // Ejemplo: Si $url es "/es/contacto/" me quita "/" del final, es decir, me dehja $url en "/es/contacto"
    $url = rtrim($url, "/");
    // De $url me divide y extrae todos los valores teniendo la "/" como divisor.
    // Ejemplo: en $urlParse tengo un array con estos valores ["", "es", "contacto"] ya que $url es "/es/contacto"
    // Ejemplo de explode a una $url que es "/es/productos/taza/amarilla" ["", "es", "productos", "taza", "amarilla"]
    // Ejemplo si fuese $url "/es", entonces el array sería ["", "es"]
    $urlParse = explode("/", $url);
    // Metemos dentro de $lang, el valor del array enb la posición 1, que es donde está el idioma. El arrat cuenta sus items empezando desde el 0, por lo tanto en el array ["", "es", "contacto"], la posición 1 es "es"
    $lang = $urlParse[1];
    // Obtener $lang me sirve para determinar en qué carpeta tengo que buscar $view, que es la vista del contenido que se cargará.
} else {
    // Si la ruta termina viene vacía como "/", redirigimos a la ruta principal con el idioma principal para que venga como "/es"
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /es");
    exit;
}

// Una barrera para contener que si el usuario ha metido a mano o la url viene con un $lang que no se contempla en el array, le redirijamos a la página de inicio, pero con el idioma que queramos por defecto,
if (!in_array($lang, $langs)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /es");
    exit;
}


// FASE 3 - UNA VEZ TENEMOS LA $URL DEL USUARIO, Y TENEMOS EL IDIOMA DE LA URL EN $LANG, COMPROBAMOS SI EXISTE ESA URL EN ESE IDIOMA CONSULTANDO EL ARRAY DE URL

if (isset($arrayRutasGet[$lang][$url])) {

    // Si la url existe dentro del array de url's, entonces cogemos el valor de view, que es el archivo que haremos include para cargar el contenido pertienente de esta url.
    $view = $arrayRutasGet[$lang][$url]['view']; 

    
    
    //----VISTA----------
    require_once  __DIR__ . $view;
    
} else {

    // En caso de que $url no exista dentro del array de url permitidas, cargamos el contenido de la 404
    //----VISTA----------
    require_once __DIR__ . '/php/views/404.php';
}
