<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lilipizz_members; charset=UTF8','root','userpop');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>