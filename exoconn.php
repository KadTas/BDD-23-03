<?php
header('Content-type: text/plain');

$nomCinema = $_POST['nomCinema'];
$villeCinema = $_POST['villeCinema'];
$adresseCinema = $_POST['adresseCinema'];
$mailCinema = $_POST['mailCinema'];
$numeroCinema = $_POST['numeroCinema'];
?>
<?php
     // on se connecte à notre base
     $server = "db5000303655.hosting-data.io";
     $dbname = "dbs296642";
     $user = "dbu526627";
     $pass = ")uq6PE.9";
 
     try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass,$pdo_options);
     }

//        // On recupere tout le contenu de la table news
//        $reponse = $bdd->query('SELECT nom_cinema,ville_cinema,adresse_cinema,mail_cinema,telephone_cinema FROM cinema');

// On affiche le resultat
//        while ($donnees = $reponse->fetch()){
            //On affiche les données dans le tableau
//            echo "</tr>";
//            echo "<td> $donnees[nom_cinema] </td>";
//            echo "<td> $donnees[ville_cinema] </td>";
//            echo "<td> $donnees[adresse_cinema] </td>";
//            echo "<td> $donnees[mail_cinema] </td>";
//            echo "<td> $donnees[telephone_cinema] </td>";
//            echo "</tr>";
//            echo "<br>";
//        }
//        $reponse->closeCursor();
//        }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

//      Envoyer données dans la BDD.
$stmt = $bdd->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
$stmt->bindParam(':nom_cinema', $nomCinema);
$stmt->bindParam(':ville_cinema', $villeCinema);
$stmt->bindParam(':adresse_cinema', $adresseCinema);
$stmt->bindParam(':mail_cinema', $mailCinema);
$stmt->bindParam(':telephone_cinema', $numeroCinema);
$stmt->execute();
     
?>