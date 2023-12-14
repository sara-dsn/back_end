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
        $db=new PDO('mysql:host=localhost;chartest=utf8;dbname=record','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete =$db->query("SELECT * FROM artist");
        $tableau = $requete->fetchALL(PDO::FETCH_OBJ);
        $requete->closeCursor();
    } 
    catch(Exception $e){
echo "erreur : ".$e->getMessage()."<br>";
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