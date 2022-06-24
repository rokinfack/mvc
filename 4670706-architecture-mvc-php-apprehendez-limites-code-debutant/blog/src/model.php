<?php

function getPost(){


    // Connexion à la base de données
    try
    {
        $database = new PDO('mysql:host=localhost;dbname=mvc;port=3307;charset=utf8', 'root', 'root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e){
          die( 'Erreur : '.$e->getMessage()   );
    }

    // On récupère les 5 derniers billets
    $statement= $database->query('SELECT id, title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM posts ORDER BY date_creation DESC LIMIT 0, 5');
    
   $statement->execute();



    $posts=$statement->fetchAll(PDO::FETCH_ASSOC);
return $posts;
}


?>