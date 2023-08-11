<?php 
    session_start();
    include 'includes/classes.php';
        
        $contact = new Contact;
        $messages = $contact->getContact();
        print_r($messages);
        $i = 1;
        foreach($messages as $message) {
            $change = "showMsg()";
            $id = $message['contact_id'];
            $text = $message['message'];
            $nom = $message['nom'];
            echo '<div class="message" name="msg" value='.$id.' onclick='.$change.'>1.'.$nom.'</div>';
            $i++;
        }
    
?>

<html>
<body>

<div id="text"></div>

<script>
    const text = document.getElementById('text');
    const messages = document.getElementsByClassName('message');
    let value;

    
    for(let message of messages) {
        value = message.getAttribute('value');
        function showMsg() {
        var xhttp;
        if (value == "") {
            text.innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            text.innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "processor.php?q="+value, true);
        xhttp.send();
        }
    
    }


    
    

    
    

    
</script>

</body>
</html>