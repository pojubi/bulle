<?php
    include 'includes/classes.php';
    $message = new Contact2();
    $messages = $message->getContact2();
    echo '<table id="tab">
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>MESSAGE</th>
                <th>DATE</th>
                <th>TELEPHONE</th>
            </tr>';
    foreach($messages as $m) {
        if(!empty($m['contact_id'])) {
            $contactId = $m['contact_id'];
        } else {
            $contactId = 'null';
        }
        
        if(!empty($m['nom'])) {
            $nom = $m['nom'];
        } else {
            $nom = 'null';
        }

        if(!empty($m['prenom'])) {
            $prenom = $m['prenom'];
        } else {
            $prenom = 'null';
        }

        if(!empty($m['email'])) {
            $email = $m['email'];
        } else {
            $email = 'null';
        }

        if(!empty($m['message'])) {
            $message = $m['message'];
        } else {
            $message = 'null';
        }

        if(!empty($m['date'])) {
            $date = $m['date'];
        } else {
            $date = 'null';
        }

        if(!empty($m['telephone'])) {
            $telephone = $m['telephone'];
        } else {
            $telephone = 'null';
        }


        
        
            echo '<tr>
                    <td>'.$contactId.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$email.'</td>
                    <td>'.$message.'</td>
                    <td>'.$date.'</td>
                    <td>'.$telephone.'</td>
                    <td><button id="read" value="'.$contactId.'" onclick="showMess(this.value)">LIRE</button></td>
                    <td><button id="read" value="'.$contactId.'" onclick="showMess(this.value)">REPONDRE</button></td>
                    <td><button><a href="delete.php?contactid='.$contactId.'">SUPPRIMER</a></button></td>
                    </tr>';
                
    
    
            
        
    }
    echo '</table>';
    