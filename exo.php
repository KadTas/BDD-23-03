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
//    $stmt = $connex->prepare("INSERT INTO entite0 (prenom, nom, mail, contenu) VALUES (:prenom, :nom, :mail, :contenu)");
//    $stmt->bindParam(':prenom', $prenom);
//    $stmt->bindParam(':nom', $nom);
//    $stmt->bindParam(':mail', $mail);
//    $stmt->bindParam(':contenu', $contenu);
//    $stmt->execute();

//      Récupérer données dans la BDD.
//  $sql = 'SELECT nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema FROM cinema ORDER BY nom_cinema';
//   foreach  ($connex->query($sql) as $row) {
//       echo $row['nom_cinema'] . "\t";
//       echo $row['ville_cinema'] . "\t";
//      echo $row['adresse_cinema'] . "\t";
//      echo $row['mail_cinema'] . "\t";
//      echo $row['telephone_cinema'] . "\n";

// $sth = $connex->prepare("SELECT * FROM entite0");
// $sth->execute();
// print("Toutes les données :\n");
// $result = $sth->fetchAll();
// print_r($result);
//  }

$response = $connex->query('SELECT * FROM cinema');
while ($data = $response->fetch());
echo $data['nom'];
 }
?>