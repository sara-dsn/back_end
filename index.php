
    <?php include 'header.php'; ?>
     <?php

   if(!isset($_GET['page'])|| empty($_GET['page'])||$_GET['page']=='index'){
    include_once('index.php');
   } else if (($_GET['page'])=='details'){
    include('details.php');
   }else if(($_GET['page'])=='add_form'){
    include('add_form.php');
   }else if(($_GET['page'])=='update_form'){
    include('update_form.php');
   } else if(($_GET['page']=='delete_form')){
    include('delet_form.php');
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

<?php include 'footer.php' ?>
