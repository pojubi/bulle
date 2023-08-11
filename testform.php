<?php
include 'includes/classes.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = new Posted;
  $arr = $post->set_data();
  if($createPost = $post->createPost($arr)) {
    echo 'done';
  }
}
?>

<form action="#" method="post" enctype="multipart/form-data" id="postForm">
  Titre <input type="text" name="titre"><br>
  <br>
  Auteur <input type="text" name="auteur"><br>
  <br>
  Description<br>
  <textarea name="description" rows="5" cols="33"></textarea><br>
  <br>
  Prix <input type="text" name="prix"><br>
  <br>
  Lieu <input type="text" name="lieu"><br>
  <br>
  Date <input type="date" name="date"><br>
  <br>
  Heure <input type="time" name="heure"><br>
  <br>
  Select image to upload:<br>
  <br>
    <input type="file" name="imgFile" id="imgFile"><br>
  <br>
  Category<br>
  <br>
  <select name="typeId">
    <option value="">--Please choose an option--</option>
    <?php
      $types = new Type;
      $options = $types->getType();
        foreach($options as $option) {
          $typeName = $option['type'];
          $typeId = $option['type_id'];
          echo '<option value="'.$typeId.'">'.$typeName.'</option>';
        }
     ?>
  </select><br>
  <br>
  <button type="submit">Creer Post</button><br>
  <br>
</form>
