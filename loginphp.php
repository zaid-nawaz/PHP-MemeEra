<?php 
  include 'dbconnect.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE email = '$email' AND userpassword = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $username = $row['username'];
      $numrows = mysqli_num_rows($result);
      if ($numrows == 1) {
        session_start();
        $_SESSION['isloggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header('location: index.php?login=true');
      }
  }
?>