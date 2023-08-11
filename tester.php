<?php
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = new Post();
    $set = $post->set_data();
    $conn = $post->connect();
    $result = $post->createPost($set);
    header('Location: /bulle/reservation.php');
}
?>