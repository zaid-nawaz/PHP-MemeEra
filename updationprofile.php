<?php
session_start();
include 'dbconnect.php';


$profileof = $_SESSION['username'];
$sql1 = "SELECT * FROM `profile` WHERE profileof = '$profileof'";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($result1);
$serialno = $row['serialno'];


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $profilepicturename = $_FILES['profilepicture']['name'];
       
        $tempname = $_FILES['profilepicture']['tmp_name'];
        $target_dir = 'profileuploads/';
        $target_file = $target_dir.$profilepicturename;
        move_uploaded_file($tempname,$target_file);
        $editname = $_POST['editedname'];
        $editdesc = $_POST['editedDesc'];
        $sql = "UPDATE `memeera`.`profile` SET `profilename` = '$editname', `description` = '$editdesc', `picture` = '$profilepicturename' WHERE `profile`.`serialno` = $serialno";
        $result = mysqli_query($conn,$sql);
        header('location: profile.php?username='.$profileof.'');
    }
    
?>