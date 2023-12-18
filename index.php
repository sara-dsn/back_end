<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 2 pdo</title>
</head>
<body>
    <?php 
   if(!isset($_GET['page'])| empty($_GET['page'])|($_GET['page'])=='index'){
    include('index.php');
   } else if (($_GET['page'])=='details'){
    include('details.php');
   }else if(($_GET['page'])=='add_form'){
    include('add_form.php');
   }else if(($_GET['page'])=='update_form'){
    include('update_form.php');
   } else if(($_GET['page']=='delete_form')){
    include('delet_form.php');
   } else if(($_POST['page'])=='add_script'){
    include('add_script.php');
   } else if(($_POST['page'])=='update_script'){
    include('update_script.php');
   } else if(($_POST['page'])=='delete_script'){
    include('delete_script.php');
   };

   
   try {
       // Connexion à la base de données
       $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'dosana');
       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
       // Exécution d'une requête SQL
       $requete = $db->query("SELECT * FROM artist");
       $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
       $requete->closeCursor();
   
       // Affichage des résultats
       foreach ($tableau as $artist) {
           echo $artist->artist_name . "<br>";
       }
   } catch (PDOException $e) {
       echo "Erreur PDO : " . $e->getMessage() . "<br>";
       echo "Code d'erreur PDO : " . $e->getCode() . "<br>";
       die("Fin du script");
   } catch (Exception $e) {
       echo "Erreur générale : " . $e->getMessage() . "<br>";
       echo "Code d'erreur : " . $e->getCode() . "<br>";
       die("Fin du script");
   }
   
   
    ?>
<?php if (!empty($tableau)): ?>
    <?php foreach ($tableau as $artist): ?>
        <div>
            <?= $artist->artist_name ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun résultat trouvé.</p>
<?php endif; ?>

</body>
</html>