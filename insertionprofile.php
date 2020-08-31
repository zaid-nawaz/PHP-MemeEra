<?php 
session_start();
    include 'dbconnect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $profilepicturename = $_FILES['profilepicture']['name'];
        $tempname = $_FILES['profilepicture']['tmp_name'];
        $target_dir = 'profileuploads/';
        $target_file = $target_dir.$profilepicturename;
        move_uploaded_file($tempname,$target_file);
        $editname = $_POST['editedname'];
        $editdesc = $_POST['editedDesc'];
        $profileof = $_SESSION['username'];
      
        $sql = "INSERT INTO `memeera`.`profile` ( `profilename`, `description`, `picture`, `profileof`) VALUES ( '$editname', '$editdesc', '$profilepicturename', '$profileof')";
        $result = mysqli_query($conn,$sql);
        
        header('location: profile.php?username='.$profileof.'');
    }
    
?>