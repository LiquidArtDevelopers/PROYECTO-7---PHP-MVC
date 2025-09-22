<?php

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

// Variable de configuración para establecer la ruta del servidor.
// Mientars esté trabajando en localhost, dejaré comentada la de producción, y cuando suba a producción, al revés.
$ruta = "http://localhost:3000";
// $ruta = "https://profe.webda.eus/proyecto07";