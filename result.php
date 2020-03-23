<?php
header('Content-type: text/plain');

$nomCinema = $_POST['nomCinema'];
$villeCinema = $_POST['villeCinema'];
$adresseCinema = $_POST['adresseCinema'];
$mailCinema = $_POST['mailCinema'];
$numeroCinema = $_POST['numeroCinema'];
?>

<?php
 
 $dbhost = "db5000303655.hosting-data.io";
 $dbuser = "dbu526627";
 $dbpass = ")uq6PE.9";
 $dbname = "dbs296642";
 {
    
    $connex = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $connex ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($connex->connect_error)
{   die('Nope : ' .£connect_error);
}
//      Envoyer données dans la BDD.
    $stmt = $connex->prepare("INSERT INTO cinema (nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
    $stmt->bindParam(':nom_cinema', $nomCinema);
    $stmt->bindParam(':ville_cinema', $villeCinema);
    $stmt->bindParam(':adresse_cinema', $$adresseCinema);
    $stmt->bindParam(':mail_cinema', $mailCinema);
    $stmt->bindParam(':telephone_cinema', $numeroCinema);
    $stmt->execute();

//      Récupérer données dans la BDD.
//    $sql = 'SELECT prenom, nom, mail, contenu FROM entite0 ORDER BY nom';
//    foreach  ($connex->query($sql) as $row) {
//        echo $row['prenom'] . "\t";
//        echo $row['nom'] . "\t";
//        echo $row['mail'] . "\t";
//        echo $row['contenu'] . "\n";

// $sth = $connex->prepare("SELECT * FROM entite0");
// $sth->execute();
// print("Toutes les données :\n");
// $result = $sth->fetchAll();
// print_r($result);
//  }

//$response = $connex->query('SELECT * FROM entite0');
//while ($data = $response->fetch());
//echo $data['nom'];
 }
?>