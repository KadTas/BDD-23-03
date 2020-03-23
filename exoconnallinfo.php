<html>
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
     catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
     ?>
<table>
    <tr>
        <th>Id</th><th>Ville</th><th>Adresse</th><th>Mail</th><th>Téléphone</th>
    </tr>
    <?php
    $sql = 'SELECT * FROM cinema';
    $stmt = $bdd->prepare($sql);
    $stmt->execute();

    while ($donnees = $stmt->fetch(PDO::FETCH_OBJ))
    {
        echo '
        <tr>
            <td>'.$donnees->id_cinema.'</td>
            <td>'.$donnees->nom_cinema.'</td>
            <td>'.$donnees->adresse_cinema.'</td>
            <td>'.$donnees->ville_cinema.'</td>
            <td>'.$donnees->mail_cinema.'</td>
            <td>'.$donnees->telephone_cinema.'</td>
        </tr>
        ';
         }
         $stmt->closeCursor(); //fin de requête
         ?>
</table>
<table>
<?php 
        $sql_cinema = "SELECT * FROM cinema";
        $stmt_cinema = $bdd->prepare($sql_cinema);
        $stmt_cinema->execute();

        while($cinema = $stmt_cinema->fetch(PDO::FETCH_OBJ)) {
            echo '<br><br><h2>' . $cinema->nom_cinema . ' : </h2><br>';
            $sql_salle = 'SELECT * FROM salle WHERE id_cinema = ' . $cinema->id_cinema;
            echo $sql_salle;
            $stmt_salle = $bdd->prepare($sql_salle);
            $stmt_salle->execute();

            echo '
                <table>
                <tr>
                    <th>id</th><th>Numéro</th><th>Capacité</th>
                </tr>
                ';
                while($row = $stmt_salle->fetch(PDO::FETCH_OBJ)) {
                    echo '
                    <tr>
                        <td>'.$row->id_salle.'</td>
                        <td>'.$row->numero_salle.'</td>
                        <td>'.$row->capacite_salle.'</td>
                    </tr>
                    ';
                }
                echo '</table>';
        }
    ?>
    </html>