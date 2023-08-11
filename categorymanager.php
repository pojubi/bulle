<?php
    include 'includes/classes.php';
    $type = new Type();
    $types = $type->getType();
    echo '<table id="tab">
            <tr>
                <th>ID</th>
                <th>CATEGORY</th>
            </tr>';
    foreach($types as $t) {
        $category = $t['type'];
        $typeId = $t['type_id'];
        
            echo '<tr>
                    <td>'.$typeId.'</td>
                    <td>'.$category.'</td>
                    <td><a href="#">MODIFIER</a></td>
                    <td><a href="#">SUPPRIMER</a></td>
                    </tr>';
                
    
    
            
        
    }
    echo '</table>';