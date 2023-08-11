<?php
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = new Res();
    $set = $post->set_data();
    $result = $post->createRes($set);
    header('Location: reservation.php');
}
?>
