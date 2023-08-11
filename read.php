<?php
    include 'includes/classes.php';
    session_start();
    if(isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $admin = new Admin();
        $admins = $admin->getAdmin();
        foreach($admins as $ad) {
            $username = $ad['username'];
            if($user == $username) {
                $adminId = $ad['admin_id'];
            }
        }
    }


    $contactId = $_GET["contactid"];
    $message = new Contact2();
    $messages = $message->getContact2();
    foreach($messages as $mess) {
        if($contactId == $mess['contact_id']) {
            $id = $mess['contact_id'];
            $nom = $mess['nom'];
            $prenom = $mess['prenom'];
            $text = $mess['message'];
            $tel = $mess['telephone'];
            $email = $mess['email'];
            $date = $mess['date'];
            echo 'Message de : '.$prenom.' '.$nom;
            echo '<br><br>';
            echo 'Date et heure : '.$date;
            echo '<br><br>';
            echo 'Adresse Mail : '.$email;
            echo '<br><br>';
            echo 'Telephone : '.$tel;
            echo '<br><br>';
            echo 'Message : '.$text;
            
            
        }
    }
    echo '<br><br>';
    echo '<form id="replyForm" action="mailer.php" method="post" style="display:block;">';
            echo '<textarea id="replyBox" name="replyText">Enter message here to reply</textarea><br>';
            echo '<input type ="hidden" name="adminid" value="'.$adminId.'"><br>';
            echo '<input type ="hidden" name="contactid" value="'.$id.'"><br>';
            echo '<input type ="hidden" name="email" value="'.$email.'"><br>';
            echo '<button id="reply" type="submit" name="submit" onclick="reply(this.value)" value="submit">Reply</button><br>';
            echo '</form>'; 

    echo '<br><br>';
    echo '<button id="retour" name="message" onclick="retourner()">Retour</button>';