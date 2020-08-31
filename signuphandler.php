<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>

    body{
      background-color: #11161f;
    }
        .extrawidth{
            width: 273px;
        }
        .alertslide{
    width: 66rem;
  margin: auto;
  position: relative;
  right: 29px;
    }


    </style>
    <title>Hello, world!</title>
  </head>
  <body>

  <?php 
    include 'dbconnect.php';
    include 'tailheader.php';
   
 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $showerror = '';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $target_dir = 'uploads/';
    $photoname = $_FILES['profilepic']['name'];
    $target_file = $target_dir.$photoname;
    $tempPhotoName = $_FILES['profilepic']['tmp_name'];

      $sql = "SELECT * FROM `users` WHERE username = '$username' AND email = '$email'";
      $result = mysqli_query($conn,$sql);
      $numrows = mysqli_num_rows($result);
      if ($numrows == 1) {
        $showerror = 'username or email already exists.';
        header('location: signuphandler.php?err=true&exp='.$showerror.'');
      }else{
        if ($password == $confirmpassword) {
          move_uploaded_file($tempPhotoName,$target_file);

          $sql2 = "INSERT INTO `memeera`.`users` (`username`, `email`, `userpassword`, `profilepic`) VALUES ('$username', '$email', '$password', '$photoname');";
         $result2 = mysqli_query($conn,$sql2);
         header('location: index.php?signupsuccess=true');
        }else{
          $showerror = 'password do not match with confirm password.';
          header('location: signuphandler.php?err=true&exp='.$showerror.'');
        }
      }
  
  
  }
  
?>
  
    <?php 
      if(isset($_GET['err']) && $_GET['err'] == true){
        $exp = $_GET['exp'];
        echo '<div class="bg-indigo-900 text-center py-4 lg:px-4">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
          <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Sorry!</span>
          <span class="font-semibold mr-2 text-left flex-auto">'.$exp.'</span>
          <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
      </div>';
      }
      
    ?>

  <section class="text-gray-500 bg-gray-900 body-font alertslide">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
    <h1 class="title-font font-medium text-3xl text-white">A platform dedicated to Meme lover and meme maker</h1>
    <p class="leading-relaxed mt-4">Please do not go out of the way to mislead someone or spread hatred.</p>
    </div>
    
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-white text-lg font-medium title-font my-4 mb-5" style="    position: relative;
    bottom: 20px;
    left: -4px;">Sign Up</h2>
      <form action="signuphandler.php" method="post" enctype="multipart/form-data">
      <label for="profilepic"  class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mx-4 my-4 mb-4 extrawidth" style="    margin: 8px 21px;
    position: relative;
    bottom: 20px;">
       Choose your Profile picture
      </label>
      <input type="file" name="profilepic" id="profilepic" style="display: none;">
 
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" placeholder="Full Name" name="username" type="text">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" placeholder="Email" name="email" type="email">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" placeholder="Password" name="password" type="password">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" placeholder="Confirm password" name="confirmpassword" type="text">
  
      <button class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg extrawidth">Signup</button>
      </form>
      <p class="text-xs text-gray-600 mt-3">we're not going to share your credentials to anyone.</p>
    </div>
  </div>
</section>
<script src="https://kit.fontawesome.com/c89c8c3672.js" crossorigin="anonymous"></script>
   
  </body>
</html>

