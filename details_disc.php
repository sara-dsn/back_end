<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test pdo</title>
</head>
<body>
    <?php 
   
        // Connexion à la base de données
        $db=new PDO('mysql:host=localhost;charset=utf8;dbname=record','admin','dosana');
        // configurer le mode erreur PDO pour générer des exceptions :
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Vous etes conectée avec succès à la base de données";

        // // Vérifier la présence du paramètre "disc_id"
        // if (isset($_GET["disc_id"])) {
        //     echo "ça existe";

       // Exécution d'une requête SQL
       $requete = $db->prepare("SELECT * FROM disc where disc_id=1");
       $requete->execute();
       $disc = $requete->fetch(PDO::FETCH_OBJ);
       
        // }
      
    

    ?>
<br>
    Disc N° <?= $disc->disc_id ?> <br>
    Disc name <?= $disc->disc_title ?><br>
    Disc year <?= $disc->disc_year ?>
</body>
</html>