<?php
session_start();
include 'includes/classes.php';
    $q = ($_GET['q']);
    echo $q;
    $contact = new Contact;
    $messages = $contact->getContact();
    $i = 1;
    foreach($messages as $message) {
        $nom = $message['nom'];
        $prenom = $message['prenom'];
        $email = $message['email'];
        $tel = $message['telephone'];
        $text = $message['message'];
        $id = $message['contact_id'];
        $date = $message['date'];
        if($message['contact_id'] == $q) {
            echo 'Nom : '.$nom.'<br>';
            echo '<br>';
            echo 'Prenom : '.$prenom.'<br>';
            echo '<br>';
            echo 'Email : '.$email.'<br>';
            echo '<br>';
            echo 'Numero de telephone : '.$tel.'<br>';
            echo '<br>';
            echo 'Message : '.$text.'<br>';
            echo '<br>';
            echo 'Id : '.$id.'<br>';
            echo '<br>';
            echo 'Date : '.$date.'<br>';
            echo '<br>';
            echo '<form id="replyForm" action="mailer.php" method="post" style="display:block;">';
            echo '<textarea id="replyBox" name="post">Enter message here to reply</textarea><br>';
            echo '<button id="reply" type="submit" name="submit" onclick="reply(this.value)" value='.$email.'>Reply</button><br>';
            echo '</form>';
            echo '<br>';
            echo '<button id="retour" onclick="retour()">Retour</button><br>';
            echo '<br>';
        }
        
    }
?>

