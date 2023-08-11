<?php
    include 'includes/classes.php';
    $res = new Res();
    $ress = $res->getRes();
    echo '<table id="tab">
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>NOMBRE DE PLACES</th>
                <th>EVENT</th>
                <th>CONFIRMED</th>
                <th>TELEPHONE</th>
                <th>EMAIL</th>
                <th>DATE</th>
            </tr>';
    foreach($ress as $r) {
        if(!empty($r['reservation_id'])) {
            $reservationId = $r['reservation_id'];
        } else {
            $reservationId = 'null';
        }

        if(!empty($r['nom'])) {
            $nom = $r['nom'];
        } else {
            $nom = 'null';
        }

        if(!empty($r['prenom'])) {
            $prenom = $r['prenom'];
        } else {
            $prenom = 'null';
        }

        if(!empty($r['nom_place'])) {
            $numPlace = $r['nom_place'];
        } else {
            $numPlace = 'null';
        }

        if(!empty($r['post_id'])) {
            $postId = $r['post_id'];
            $post = new Posted();
            $posts = $post->getPosts(4);
            foreach($posts as $p) {
                if($p['post_id'] == $postId) {
                    $event = $p['name'];
                }
            }
        } else {
            $postId = 'null';
        }

        if(!empty($r['confirmed'])) {
            $confirmed = $r['confirmed'];
        } else {
            $confirmed = 'null';
        }

        if(!empty($r['telephone'])) {
            $telephone = $r['telephone'];
        } else {
            $telephone = 'null';
        }

        if(!empty($r['email'])) {
            $email = $r['email'];
        } else {
            $email = 'null';
        }

        if(!empty($r['date'])) {
            $date = $r['date'];
        } else {
            $date = 'null';
        }

       echo '<tr>
                    <td>'.$reservationId.'</td>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$numPlace.'</td>
                    <td>'.$event.'</td>
                    <td>'.$confirmed.'</td>
                    <td>'.$telephone.'</td>
                    <td>'.$email.'</td>
                    <td>'.$date.'</td>
                    <td><a href="#">CONFIRMER</a></td>
                    <td><a href="#">SUPPRIMER</a></td>
                    </tr>';





    }
    echo '</table>';
