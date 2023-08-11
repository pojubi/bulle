<?php
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = new Type();
    $set = $type->set_data();
    $conn = $type->connect();
    $result = $type->createType($set);
    print_r($result);
}
?>

<!DOCTYPE html>
    <html>
        <body>
            <form action="#" method="post" enctype="multipart/form-data" id="form1">
                Type <input type="text" name="type"><br>
                <br>
                <button type="submit" value="Create dedicace" name="submitDedicace">Creer Dedicace</button><br>
            </form>
        </body>
    </html>