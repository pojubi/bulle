<?php
    include 'includes/classes.php';
    $contactId = $_GET['contactid'];
    $delete = new Contact2();
    if($delete->removeContact2($contactId)) {
        echo 'success';
    }
    