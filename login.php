<?php
session_start();
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $login = new Login();
    $set = $login->set_data();
    $admins = $login->getAdmin();
    foreach($admins as $admin) {
      if($admin['username'] == $set[0]) {
        $pwd2 = $admin['password'];
      }
    }
    $verify = $login->verifier($set[1], $pwd2);
    if($verify) {
      $_SESSION['user'] = $set[0];
      header('Location: /admin-page.php');
    }
  }
  else {
    header('Location: /bulle/admin-login.php');
  }
}
