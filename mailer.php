<?php
session_start();
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['replyText']) && isset($_POST['submit'])) {
        $reply = new Reply();
        $set = $reply->set_data();
        $result = $reply->createReply($set);
        print_r($_POST); 
    }

    if(isset($_POST['confirm'])) {
        $connect = new Connect();
        $text = 'yes';
        $email = $connect->sanitize($_POST['confirm']);
        $sql = "UPDATE `reservation` SET `confirmed`= ? WHERE `email`= ?";
        $connection = $connect->conn();
        $prepare = $connection->prepare($sql);
        if($prepare->execute([$text, $email])) {
            header('Location: /bulle/admin-page.php');
            echo 'success';
        }
        print_r($_POST); 
    }
}

