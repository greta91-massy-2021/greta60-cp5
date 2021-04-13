<?php
// Selon la structure d'accueil de l'appli, on adapte 
// les constantes de connexion à la BDD

switch ($_SERVER['HTTP_HOST']) {
    case 'localhost':
    case 'greta60cda3':
        define('HOST', 'localhost');
        define('PORT', 3306);
        define('DATA', 'greta60');
        define('USER', 'root');
        define('PASS', 'root');
        break;
    case 'baobab-svr5': // Fictif
        define('HOST', 'baobab-svr5');
        define('DATA', 'baobab-sql5');
        define('USER', 'baobab-usr1');
        define('PASS', 'aR5*hgt+7uIopp$');
        break;
    default:
        // do nothing
}
