<?php
session_start();
include 'includes/classes.php';
    $q = ($_GET['q']);
    echo $q;
    $reserve = new Reserve();
    $reservations = $reserve->getReservation();
    $i = 1;
    foreach($reservations as $reservation) {
        $nom = $reservation['nom'];
        $prenom = $reservation['prenom'];
        $numPlace = $reservation['numPlace'];
        $event = $reservation['event'];
        $confirmed = $reservation['confirmed'];
        $email = $reservation['email'];
        $telephone = $reservation['telephone'];
        $id = $reservation['reservation_id'];
        if($id == $q) {
            echo 'Nom : '.$nom.'<br>';
            echo '<br>';
            echo 'Preom : '.$prenom.'<br>';
            echo '<br>';
            echo 'Combien de place : '.$numPlace.'<br>';
            echo '<br>';
            echo 'Evenement : '.$event.'<br>';
            echo '<br>';
            echo 'Confirmer : '.$confirmed.'<br>';
            echo '<br>';
            echo 'Email : '.$email.'<br>';
            echo '<br>';
            echo 'Telephone : '.$telephone.'<br>';
            echo '<br>';
            echo '<form id="confirmForm" action="mailer.php" method="post" style="display:block;">';
            echo '<button id="confirm" type="submit" name="confirm" value='.$email.'>Confirmer</button><br>';
            echo '</form>';
            echo '<br>';
            echo '<button id="retour" onclick="retour()">Retour</button><br>';
            echo '<br>';
        }
        
    }
?>
