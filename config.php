<?php
define('BASE_PATH', __DIR__ . '/');
$base_path = '/base_path/'; // Chemin pour les liens HTML

// Définir le chemin vers un répertoire externe
define('EXTERNAL_PATH', '/opt/lampp/htdocs/FDJ_scraping/');

// Configuration d'affichage des erreurs
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', BASE_PATH . 'logs/php-error.log');
?>