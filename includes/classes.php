<?php




/*
 * retrieve form data
 * sanitize form data
 * hash password
 * connect to db
 * insert to db
 */



class Posted {
  public $arr = [];


  public function set_data() {
    if(isset($_POST['titre'])) {
      if(empty($_POST['titre'])) {
        $titre = '';
        array_push($this->arr, $titre);
      } else  {
        $titre = $_POST['titre'];
        array_push($this->arr, $titre);
      }
    }

    if(isset($_POST['auteur'])) {
      if(empty($_POST['auteur'])) {
        $auteur = 'null';
        array_push($this->arr, $auteur);
      } else  {
        $auteur = $_POST['auteur'];
        array_push($this->arr, $auteur);
      }
    }

    if(isset($_POST['description'])) {
      if(empty($_POST['description'])) {
        $description = 'null';
        array_push($this->arr, $description);
      } else  {
        $description = $_POST['description'];
        array_push($this->arr, $description);
      }
    }

    if(isset($_POST['prix'])) {
      if(empty($_POST['prix'])) {
        $prix = 'null';
        array_push($this->arr, $prix);
      } else  {
        $prix = $_POST['prix'];
        array_push($this->arr, $prix);
      }
    }

    if(isset($_POST['lieu'])) {
      if(empty($_POST['lieu'])) {
        $lieu = 'null';
        array_push($this->arr, $lieu);
      } else  {
        $lieu = $_POST['lieu'];
        array_push($this->arr, $lieu);
      }
    }


    if(isset($_POST['date'])) {
      if(empty($_POST['date'])) {
        $date = 'null';
        array_push($this->arr, $date);
      } else  {
        $date = $_POST['date'];
        array_push($this->arr, $date);
      }
    }

    if(isset($_POST['heure'])) {
      if(empty($_POST['heure'])) {
        $heure = 'null';
        array_push($this->arr, $heure);
      } else  {
        $heure = $_POST['heure'];
        array_push($this->arr, $heure);
      }
    }


    if(is_uploaded_file($_FILES['imgFile']['tmp_name'])) {
      $imgLink = $this->sanitize($this->imgVerifier());
      array_push($this->arr, $imgLink);
    } else  {
        $imgLink = '';
        array_push($this->arr, $imgLink);
    }

    if(isset($_POST['typeId'])) {
      if(empty($_POST['typeId'])) {
        $typeId = '';
        array_push($this->arr, $typeId);
      } else  {
        $typeId = $_POST['typeId'];
        array_push($this->arr, $typeId);
      }
    }

    foreach($this->arr as $a) {
      $this->sanitize($a);
    }

    return $this->arr;
  }



  public function sanitize($data) {
    $this->data = trim($data);
    $this->data = stripslashes($data);
    $this->data = htmlspecialchars($data);
    return $this->data;
  }

  public function imgVerifier() {
    if(is_uploaded_file($_FILES['imgFile']['tmp_name'])) {
      $uploads_dir = 'uploads/';
      $error = $_FILES["imgFile"]["error"];
        if ($error == 0) {
        $tmp_name = $_FILES["imgFile"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["imgFile"]["name"]);
        $imgLink = "uploads/$name";
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        return $imgLink;
        }
    }
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
}

  public function createPost($args) {
      $connection = $this->connect();
      $stmt = "INSERT INTO `post`(`titre`, `auteur`, `description`, `prix`, `lieu`, `date`, `heure`, `img_link`, `type_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $prepare = $connection->prepare($stmt);
      $prepare->execute([$args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7], $args[8]]);
  }

  public function getPosts($num) {
      $stmt = "SELECT * FROM `post` WHERE `type_id` = ?";
      $connection = $this->connect();
      $get = $connection->prepare($stmt);
      $get->execute([$num]);
      return $get->fetchAll();
  }

  public function removePost() {
    $this->conn();
    $get = $this->conn->prepare($this->stmt);
    $get->execute($this->arg1, $this->arg2, $this->arg3, $this->arg4, $this->arg5);
  }
}




class Type {
  public $type;
  public $conn;

  public function set_data() {
    if(isset($_POST['type'])) {
      if(empty($_POST['type'])) {
        echo 'type does not exist';
      } else  {
        $type = $_POST['type'];
      }
    }
    return $this->sanitize($type);
  }



  public function sanitize($data) {
    $this->data = trim($data);
    $this->data = stripslashes($data);
    $this->data = htmlspecialchars($data);
    return $this->data;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
}

  public function createType($arg) {
    $stmt = "INSERT INTO `types`(`type`) VALUES (?)";
    $connection = $this->connect();
    $prepare = $connection->prepare($stmt);
    if($prepare->execute([$arg])) {
      echo 'im done';
    } else {
      echo 'error';
    }
  }



  public function getType() {
    $stmt = "SELECT * FROM `types`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute();
    return $get->fetchAll();
  }

  public function removeType() {
    $stmt = "SELECT * FROM `types`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute($this->arg1, $this->arg2, $this->arg3, $this->arg4, $this->arg5);
  }
}


class Contact2 {
  public $array = [];

  public function set_data() {
    if(isset($_POST['nom'])) {
      if(empty($_POST['nom'])) {
        $nom = 'null';
        array_push($this->array, $nom);
      } else  {
        $nom = $_POST['nom'];
        array_push($this->array, $nom);
      }
    }

    if(isset($_POST['prenom'])) {
      if(empty($_POST['prenom'])) {
        $prenom = 'null';
        array_push($this->array, $prenom);
      } else  {
        $prenom = $_POST['prenom'];
        array_push($this->array, $prenom);
      }
    }

    if(isset($_POST['email'])) {
      if(empty($_POST['email'])) {
        $email = 'null';
        array_push($this->array, $email);
      } else  {
        $email = $_POST['email'];
        array_push($this->array, $email);
      }
    }

    if(isset($_POST['message'])) {
      if(empty($_POST['message'])) {
        $message = 'null';
        array_push($this->array, $message);
      } else  {
        $message = $_POST['message'];
        array_push($this->array, $message);
      }
    }

    if(isset($_POST['tel'])) {
      if(empty($_POST['tel'])) {
        $tel = 'null';
        array_push($this->array, $tel);
      } else  {
        $tel = $_POST['tel'];
        array_push($this->array, $tel);
      }
    }
    foreach($this->array as $a) {
      $this->sanitize($a);
    }

    return $this->array;
  }

  public function sanitize($data) {
  $this->data = trim($data);
  $this->data = stripslashes($data);
  $this->data = htmlspecialchars($data);
  return $this->data;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
  }

  public function createContact2($args) {
    $stmt = "INSERT INTO `contact`(`nom`, `prenom`, `email`, `message`, `telephone`) VALUES (?, ?, ?, ?, ?)";
    $connection = $this->connect();
    $prepare = $connection->prepare($stmt);
    $prepare->execute([$args[0], $args[1], $args[2], strval($args[3]), $args[4]]);
  }

  public function getContact2() {
    $stmt = "SELECT * FROM `contact`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute();
    return $get->fetchAll();
  }

  public function removeContact2($id) {
    $stmt = "DELETE FROM `contact` WHERE contact_id = ?";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute([$id]);
    return;
  }
}


class Res {
  public $array = [];

  public function set_data() {
    if(isset($_POST['nom'])) {
      if(empty($_POST['nom'])) {
        $nom = 'null';
        array_push($this->array, $nom);
      } else  {
        $nom = $_POST['nom'];
        array_push($this->array, $nom);
      }
    }

    if(isset($_POST['prenom'])) {
      if(empty($_POST['prenom'])) {
        $prenom = 'null';
        array_push($this->array, $prenom);
      } else  {
        $prenom = $_POST['prenom'];
        array_push($this->array, $prenom);
      }
    }

    if(isset($_POST['numPlace'])) {
      if(empty($_POST['numPlace'])) {
        $numPlace = 'null';
        array_push($this->array, $numPlace);
      } else  {
        $numPlace = $_POST['numPlace'];
        array_push($this->array, $numPlace);
      }
    }

    if(isset($_POST['postId'])) {
      if(empty($_POST['postId'])) {
        $postId = 'null';
        array_push($this->array, $postId);
      } else  {
        $postId = $_POST['postId'];
        array_push($this->array, $postId);
      }
    }

    if(isset($_POST['tel'])) {
      if(empty($_POST['tel'])) {
        $tel = 'null';
        array_push($this->array, $tel);
      } else  {
        $tel = $_POST['tel'];
        array_push($this->array, $tel);
      }
    }

    if(isset($_POST['email'])) {
      if(empty($_POST['email'])) {
        $email = 'null';
        array_push($this->array, $email);
      } else  {
        $email = $_POST['email'];
        array_push($this->array, $email);
      }
    }
    foreach($this->array as $a) {
      $this->sanitize($a);
    }

    return $this->array;
  }

  public function sanitize($data) {
  $this->data = trim($data);
  $this->data = stripslashes($data);
  $this->data = htmlspecialchars($data);
  return $this->data;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
  }

  public function createRes($args) {
      $connection = $this->connect();
      $stmt = "INSERT INTO `reservation`(`nom`, `prenom`, `nom_place`, `post_id`, `confirmed`, `telephone`, `email`) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $prepare = $connection->prepare($stmt);
      $prepare->execute([$args[0], $args[1], $args[2], $args[3], 'no', $args[4], $args[5]]);
  }

  public function getRes() {
    $stmt = "SELECT * FROM `reservation`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute();
    return $get->fetchAll();
  }

  public function removeRes($id) {
    $stmt = "DELETE FROM `reservation` WHERE contact_id = ?";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute([$id]);
    return;
  }
}

class Reply {
  public $array = [];

  public function set_data() {
    if(isset($_POST['replyText'])) {
      if(empty($_POST['replyText'])) {
        echo 'reply cannot be empty';
      } else  {
        $replyText = $_POST['replyText'];
        array_push($this->array, $replyText);
      }
    }

    if(isset($_POST['contactid'])) {
      if(empty($_POST['contactid'])) {
        $contactId = 'null';
        array_push($this->array, $contactId);
      } else  {
        $contactId = $_POST['contactid'];
        array_push($this->array, $contactId);
      }
    }

    if(isset($_POST['adminid'])) {
      if(empty($_POST['adminid'])) {
        $adminId = 'null';
        array_push($this->array, $adminId);
      } else  {
        $adminId = $_POST['adminid'];
        array_push($this->array, $adminId);
      }
    }


    foreach($this->array as $a) {
      $this->sanitize($a);
    }

    return $this->array;
  }

  public function sanitize($data) {
  $this->data = trim($data);
  $this->data = stripslashes($data);
  $this->data = htmlspecialchars($data);
  return $this->data;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
  }

  public function createReply($args) {
      $connection = $this->connect();
      $stmt = "INSERT INTO `reply`(`message`, `contact_id`, `admin_id`) VALUES (?, ?, ?)";
      $prepare = $connection->prepare($stmt);
      $prepare->execute([$args[0], $args[1], $args[2]]);
  }

  public function getReply() {
    $stmt = "SELECT * FROM `reply`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute();
    return $get->fetchAll();
  }

  public function removeReply($id) {
    $stmt = "DELETE FROM `reply` WHERE contact_id = ?";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute([$id]);
    return;
  }
}



class Admin {
  public $array = [];

  public function set_data() {
    if(isset($_POST['nom'])) {
      if(empty($_POST['nom'])) {
        echo 'reply cannot be empty';
      } else  {
        $nom = $_POST['nom'];
        array_push($this->array, $nom);
      }
    }

    if(isset($_POST['username'])) {
      if(empty($_POST['username'])) {
        $username = 'null';
        array_push($this->array, $username);
      } else  {
        $username = $_POST['username'];
        array_push($this->array, $username);
      }
    }

    if(isset($_POST['password'])) {
      if(empty($_POST['password'])) {
        $password = 'null';
        array_push($this->array, $password);
      } else  {
        $password = $_POST['password'];
      }
    }


    foreach($this->array as $a) {
      $this->sanitize($a);
    }

    $newPass = $this->hashIt($this->array[2]);
    $this->array[2] = $newPass;
    return $this->array;

  }

  public function sanitize($data) {
  $this->data = trim($data);
  $this->data = stripslashes($data);
  $this->data = htmlspecialchars($data);
  return $this->data;
  }

  public function hashIt($pass) {
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    return $hashedPwd;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
  }

  public function createAdmin($args) {
      $connection = $this->connect();
      $stmt = "INSERT INTO `admin`(`nom`, `username`, `password`) VALUES (?, ?, ?)";
      $prepare = $connection->prepare($stmt);
      $prepare->execute([$args[0], $args[1], $args[2]]);
      echo 'success';
  }

  public function getAdmin() {
    $stmt = "SELECT * FROM `admin`";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute();
    return $get->fetchAll();
  }

  public function removeAdmin($id) {
    $stmt = "DELETE FROM `contact` WHERE contact_id = ?";
    $connection = $this->connect();
    $get = $connection->prepare($stmt);
    $get->execute([$id]);
    return;
  }
}


class Login extends Admin {
  public $array = [];

  public function set_data() {
    if(isset($_POST['username'])) {
      if(empty($_POST['username'])) {
        $username = 'null';
        array_push($this->array, $username);
      } else  {
        $username = $_POST['username'];
        array_push($this->array, $username);
      }
    }

    if(isset($_POST['password'])) {
      if(empty($_POST['password'])) {
        $password = 'null';
        array_push($this->array, $password);
      } else  {
        $password = $_POST['password'];
      }
    }


    foreach($this->array as $a) {
      $this->sanitize($a);
    }

    $newPass = $this->hashIt($this->array[1]);
    $this->array[2] = $newPass;
    return $this->array;

  }

  public function sanitize($data) {
  $this->data = trim($data);
  $this->data = stripslashes($data);
  $this->data = htmlspecialchars($data);
  return $this->data;
  }

  public function hashIt($pass) {
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
    return $hashedPwd;
  }

  public function connect() {
    $servername = "localhost";
    $user = "adelion";
    $pass = "Lincoln+10";
    $dbname = "bulle";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    return $conn;
  }

  public function verifier($pwd1, $pwd2) {
    $verify = password_verify($pwd1, $pwd2);
    return $verify;

  }


}
