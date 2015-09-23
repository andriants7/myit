<?php
/**
 * Created by PhpStorm.
 * User: Andriants
 * Date: 01/09/2015
 * Time: 16:18
 */
define('HOST',getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('PORT',getenv('OPENSHIFT_MYSQL_DB_PORT'));

$Base_de_donnees='myitbox';
$login='adminMs2PtrF';
$mot_de_passe=' tcEyPIHJvyYS';




try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.$Base_de_donnees, $login, $mot_de_passe);
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}