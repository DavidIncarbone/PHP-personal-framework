<?php
define('SITE_NAME', 'php-personal-framework');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '/boolean/PHP-personal-framework');

//DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Dekithedragon.91');
define('DB_NAME', 'php_personal_framework');

// DB Link

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // per mostrare eccezioni in caso di errore
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // per ottenere array associativi
    PDO::ATTR_EMULATE_PREPARES   => false,                  // per usare vere prepared statements
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
    echo 'Connessione stabilita';
} catch (\PDOException $e) {
    echo 'Errore nella connessione: ' . $e->getMessage();
}
