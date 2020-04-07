<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$message = '';
 if (isset($_POST['submit'])){
    $countfiles = count($_FILES['files']['name']);
    //loop through
    for ($i=0;$i<$countfiles;$i++){
      $filename = $_FILES['files']['name'][$i];
      //upload file
      move_uploaded_file($_FILES['files']['tmp_name'][$i], 'uploaded_files/'.$filename);
    }
  }
header("Location: index.php");
?>
