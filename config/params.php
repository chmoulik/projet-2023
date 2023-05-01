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
        'projectBaseUrl' => 'http://localhost:8888/php/projet_2023' //= index/accueil
    ]
];



/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR . 'public/upload/';
const COVER = '../../public/upload/';

// echo BASE_PATH;
//print_r(VIEWS);



/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [ //  Route : utilisateur.
    ''                  =>  ['AppController', 'index'],
    '/inscription'     => ['UserController', 'add_user'],
    '/modification_utilisateur' => ['UserController', 'update_user'],
    '/alluser' => ['UserController', 'all_user'],
    '/supprimer' => ['UserController', 'delete_user'],
    '/connexion' => ['UserController', 'connexion_user'],
    '/profil' => ['UserController'], ['page_profil'],


    //  Route : articles.
    // 'bureauxP' => ['ProduitsController'], ['desks']

];
