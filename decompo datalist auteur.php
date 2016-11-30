<?php
$template = file_get_contents("lsdkfjlsjfdlsk.html");

connecte à la BD
on fait une requete pour récupére rles noms d'auteurs

on récupère le snoms d'auteurs  dans un tableau $tabAuthor

pour chaque ligne 
        $tpl = str_replace("{{value}}", $tabAuthor[i] , $template);


        echo $tpl;


?>