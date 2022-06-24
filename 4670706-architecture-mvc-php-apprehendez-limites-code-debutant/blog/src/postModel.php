<?php

require("connexion.php");


  
    $sql="SELECT * FROM posts";

    $statement=$database->prepare($sql);

    $statement->execute();

    $post=$statement->fetch(PDO::FETCH_ASSOC);


    $sql="SELECT * FROM comments ";

    $statement=$database->prepare($sql);

    $statement->$execute();

    $comments=$statement->fetch(PDO::FETCH_ASSOC);







