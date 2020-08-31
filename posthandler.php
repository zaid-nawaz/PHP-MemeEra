<?php 
session_start();
include 'dbconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $target_dir = 'uploads/';
        $target_file = $target_dir.$_FILES['photo']['name'];
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $photo = $_FILES['photo']['name'];
        $tphoto = $_FILES['photo']['tmp_name'];
        $ext = substr($photo,-4);
        if ($ext == ".mp4") {
            $target_dir = 'videouploads/';
            $target_file = $target_dir.$_FILES['photo']['name'];
            move_uploaded_file($tphoto,$target_file);
        }else{
            move_uploaded_file($tphoto,$target_file);
        }
       
        $username = $_SESSION['username'];

        $sql = "INSERT INTO `memeera`.`posts` ( `title`, `description`, `image`,`postby`) VALUES ( '$title', '$desc', '$photo','$username')";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            header('location: index.php?postsuccess=true');
        }else{
            header('location: index.php?postsuccess=false');
        }


    }
    
?>