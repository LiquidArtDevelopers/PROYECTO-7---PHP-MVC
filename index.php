<?php

require_once "./php/config/helpers.php";


// 0) ARRAY DE LENGUAJES PERMITIDOS
$langs=['es', 'eu'];

// 1) DOBLE ARRAY (ASOCIATIVO Y NORMAL) DE RUTAS PERMITIDAS
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/php/views/es/inicio.php'
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/php/views/es/quienesSomos.php'
        ],
        '/es/servicios' => [
            'view'      => '/php/views/es/servicios.php'
        ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/php/views/eu/inicio.php'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/php/views/eu/quienesSomos.php'
        ],
        '/eu/serbitzuak' => [
            'view'      => '/php/views/eu/servicios.php'
        ],
    ]
];


// 2) COMO TODAS LAS PETICIONES LLEGAN AL INDEX.PHP (POR REDIRECCIONAMIENTO DEL HTACCESS), AQUÍ ANALIZAMOS LA URL POR LA QUE VIENE PARA VER SI ES VÁLIDA O NO Y EN CASO DE SER VÁLIDA, CARGARLE LA VISTA (VIEW) ASIGNADA A ESA URL EN EL ARRAY.

//Obtenemos la url entera desde la raiz del dominio, en caso de fallo, la URL será la raiz
$url = urldecode($_SERVER["REQUEST_URI"]) ?? "/es";

//Si la URL viene finalizada con alguna ruta más allá de "/", por ejemplo "/es", o "/es/servicios", cogemos el urllang (es) y la ruta (servicios)
if ($url != "/") {
    $url = rtrim($url, "/");  
    $urlParse = explode("/", $url);
    $lang = $urlParse[1];
    $ruta = $urlParse[count($urlParse) - 1];    
} else {
    // Si la ruta termina viene vacía como "/", redirigimos a la ruta principal con el idioma principal para que venga como "/es"
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /es");
    exit;
}

//Si no existe el idioma extraido de la URL dentro del array de idiomas permitidos, redirigimos al idioma principal
if (!in_array($lang, $langs)) {    
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /es");
    exit;
}



// 2) INCLUDE DEL CONTENIDO (VISTA) CORRESPONDIENTE A LA URL POR LA QUE VIENE EL USUARIO

//Si la ruta amigable está dentro del array de rutas GET permitidas, procedemos
if (isset($arrayRutasGet[$lang][$url])) {
       
    $view = $arrayRutasGet[$lang][$url]['view']; //será el valor con la ruta del archivo que será la vista
    
    //----VISTA----------
    require_once  __DIR__.$view;
    
} else {

    
    //----VISTA----------
    require_once __DIR__.'/php/views/404.php';
}


