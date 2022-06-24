<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
      <title>Le blog de l'AVBN</title>
      <link href="style.css" rel="stylesheet" />
</head>

<body>
      <h1>Le super blog de l'AVBN !</h1>
      <p>Derniers billets du blog :</p>

         <?php
      foreach ($posts as $post)
                { 
         ?>
         <div class="news">
            <h3>
            <?= htmlspecialchars($post['title']); ?>
            <em>le <?= $post['date_creation_fr']; ?></em>
             </h3>
         <p>
         <?php
         // On affiche le contenu du billet
               echo nl2br(htmlspecialchars($post['content']));
         ?>
         <br />
         <em><a href="postAction.php?id=<?= strip_tags($post['id']) ; ?>">Commentaires</a></em>
         </p>
         </div>
         
         <?php } ?>
</body>
</html>
