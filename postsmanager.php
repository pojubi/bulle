<?php
    include 'includes/classes.php';
    $q = ($_GET['q']);
    $post = new Posted();
    $posts = $post->getPosts($q);
    echo '<table id="tab">
            <tr>
                <th>ID</th>
                <th>TITRE</th>
                <th>AUTEUR</th>
                <th>DESCRIPTION</th>
                <th>PRIX</th>
                <th>LIEU</th>
                <th>DATE</th>
                <th>HEURE</th>
                <th>IMAGE LINK</th>
                <th>CATEGORY</th>
            </tr>';
    foreach($posts as $p) {
        if(!empty($p['post_id'])) {
            $postId = $p['post_id'];
        } else {
            $postId = 'null';
        }

        if(!empty($p['titre'])) {
            $titre = $p['titre'];
        } else {
            $titre = 'null';
        }

        if(!empty($p['auteur'])) {
            $auteur = $p['auteur'];
        } else {
            $auteur = 'null';
        }

        if(!empty($p['description'])) {
            $description = $p['description'];
        } else {
            $description = 'null';
        }

        if(!empty($p['prix'])) {
            $prix = $p['prix'];
        } else {
            $prix = 'null';
        }

        if(!empty($p['lieu'])) {
            $lieu = $p['lieu'];
        } else {
            $lieu = 'null';
        }

        if(!empty($p['date'])) {
            $date = $p['date'];
        } else {
            $date = 'null';
        }

        if(!empty($p['heure'])) {
            $heure = $p['heure'];
        } else {
            $heure = 'null';
        }

        if(!empty($p['img_link'])) {
            $imgLink = $p['img_link'];
        } else {
            $imgLink = 'null';
        }

        if(!empty($p['type_id'])) {
            $typeId = $p['type_id'];
            $type = new Type();
            $types = $type->getType();
            foreach($types as $t) {
                if($t['type_id'] == $typeId) {
                    $category = $t['type'];
                }
            }
        }

        if($typeId == $q) {

            echo '<tr>
                    <td>'.$postId.'</td>
                    <td>'.$titre.'</td>
                    <td>'.$auteur.'</td>
                    <td>'.$description.'</td>
                    <td>'.$prix.'</td>
                    <td>'.$lieu.'</td>
                    <td>'.$date.'</td>
                    <td>'.$heure.'</td>
                    <td>'.$imgLink.'</td>
                    <td>'.$category.'</td>
                    <td><a href="#">MODIFIER</a></td>
                    <td><a href="#">SUPPRIMER</a></td>
                    </tr>';

        }



    }
    echo '</table>';
