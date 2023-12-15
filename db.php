<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test pdo</title>
</head>
<body>
    <?php 
    try{
    // Connexion à la base de données
        $db=new PDO('mysql:host=localhost;charset=utf8;dbname=record','admin','dosana');
        // configurer le mode erreur PDO pour générer des exceptions :
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Vous etes conectée avec succès à la base de données";

       // Exécution d'une requête SQL
       $requete = $db->query("SELECT * FROM artist");
       $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
       $requete->closeCursor();
     } 

    catch(PDOException $e){
        echo "Erreur de connection à la base de données : ".$e->getMessage()."<br>";
echo "n° : ".$e->getCode();
die("Fin du script");
 }

    ?>

    <?php foreach ($tableau as $artist): ?>
        <div>
            <?=$artist->artist_name?>
        </div>
        <?php endforeach ; ?>
</body>
</html>