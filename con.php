<?php
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = new Contact2();
    $set = $post->set_data();
    $conn = $post->connect();
    $result = $post->createContact2($set);
    header('Location: /bulle/contact.php');
}
?>
