<?php
    include 'includes/classes.php';
    $admin = new Admin();
    $admins = $admin->getAdmin();
    echo '<table id="tab">
            <tr>
                <th>NOM</th>
                <th>USERNAME</th>
            </tr>';
    foreach($admins as $a) {
        $id = $a['id'];
        $nom = $a['nom'];
        $username = $a['username'];
        
            echo '<tr>
                    <td>'.$nom.'</td>
                    <td>'.$username.'</td>
                    <td><a href="#">MODIFIER</a></td>
                    <td><a href="#">SUPPRIMER</a></td>
                    </tr>';
                
    
    
            
        
    }
    echo '</table>';