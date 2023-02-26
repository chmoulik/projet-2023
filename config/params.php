<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'projet_2023',
        'DB_USER' => 'root',
        'DB_PSWD' => 'root',
    ],
    'app' => [
        'name' => 'projet_2023',
        'projectBaseUrl' => 'http://localhost:8888/php/wabstart-mvc/projet_2023'
    ]
];


/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/' . "user";
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR . 'public/upload/';
const COVER = '../../public/upload/';

// echo BASE_DIR;

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  =>  ['AppController', 'index'],
    '/add-user'     => ['UserController', 'add_user']
    //le slash dans ('/add--user') est important pour l'URL.
];
