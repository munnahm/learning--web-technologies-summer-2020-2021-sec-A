<?php
$location =  "uploads/" . $_FILES["fileToUpload"]["name"];
if(isset($_POST["submit"])) {
  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$location)) {
    echo "File uploaded...";
  } 
  else {
    echo "File not uploaded!";
  }
}
?>