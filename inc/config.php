<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template as well as the primary navigation array from which the navigation is created
 *
 */

/* Template variables */
$template = array(
    'name'          => 'Molienda Los Molina',
    'author'        => 'Otowil Cuellar',
    'robots'        => 'noindex, nofollow',
    'title'         => 'Molienda Los Molina',
    'description'   => 'Produciendo dulce de panela',
    // true             for a boxed layout
    // false            for a full width layout
    'boxed'         => false,
    'active_page'   => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array) */
$primary_nav = array(
           
    array(
        'name'  => 'Inicio',
        'url'   => 'inicio.php'
    ),
    array(
        'name'  => 'Historia',
        'url'   => 'historia.php'
    ),
    array(
        'name'  => 'Procesos',
        'url'   => 'procesos.php'
    ),
    array(
        'name'  => 'Valores',
        'url'   => 'valores.php'
    ),
    array(
        'name'  => 'Media',
        'url'   => 'media.php'
    ),
    array(
        'name'  => 'Admin',
        'url'   => 'administradores.php'
    ),
    array(
        'name'  => 'Contáctanos',
        'url'   => 'contacto.php'
        )
);