<?php


// const CONFIG = [
//     'db' => [
//         'DB_HOST' => 'localhost',
//         'DB_PORT' => '3306',
//         'DB_NAME' => 'u122269387_dv22aziza',
//         'DB_USER' => 'u122269387_dv22aziza',
//         'DB_PSWD' => 'Fwyv4vo3UPmSXqFJ',
//     ],
//     'app' => [
//         'name' => 'projet_2023',
//         'projectBaseUrl' => 'https://mjm03.fr/dv22aziza' //= index/accueil
//     ]
// ];


// server 

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

//  * Constantes pour accéder rapidement aux dossiers importants du MVC
//  */
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR . 'public/upload/';
const COVER = '../../public/upload/';
const ASSETS = CONFIG['app']['projectBaseUrl'] . '/assets/';



/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [ //  Route : utilisateur.
    ''  =>  ['AppController', 'index'],

    '/inscription'     => ['UserController', 'add_user'],
    '/modification_utilisateur' => ['UserController', 'update_user'],
    '/profil' => ['UserController', 'updateProfil'],
    '/alluser' => ['UserController', 'all_user'],
    '/supprimer' => ['UserController', 'delete_user'],
    '/connexion' => ['UserController', 'connexion_user'],
    '/deconnexion' => ['UserController', 'deconnexion'],


    // routes : nouvel article.
    '/new-produit' => ['ProduitController', 'new_produit'],
    '/' => ['ProduitController', 'show_categories'],
    '/articles' => ['ProduitController', 'articles'],
    '/article' => ['ProduitController', 'article'],
    '/add_panier' => ['ProduitController', 'add_panier'],
    '/panier' => ['ProduitController', 'panier'],
    '/supprimer' => ['AppController', 'requestFromCart'],

];
