<?php 
session_start();
  echo '<header class="text-gray-500 bg-gray-900 body-font" style="width: 66rem;
  margin: auto;
  position: relative;
  right: 29px;">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto" style="    position: relative;
    right: 12rem;">';
    if ( isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
      $username = $_SESSION['username'];
   echo '   <a href="index.php" class="mr-10 hover:text-white"><i class="fas fa-home fa-2x" aria-hidden="true"></i></a>
      <a  href="postbackup.php" class="mr-10 hover:text-white"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
      <a href="logout.php" class="mr-10 hover:text-white"><i class="fas fa-sign-out-alt fa-2x" aria-hidden="true"></i></a>
      <a href="profile.php?username='.$username.'" class="mr-10 hover:text-white"><i class="fas fa-user-circle fa-2x" aria-hidden="true"></i></a>
      <a class="hover:text-white" href="search.php"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>';
    }else{
        echo '<a href="index.php" class="mr-10 hover:text-white"><i class="fas fa-home fa-2x" aria-hidden="true"></i></a>
        <a href="signuphandler.php" class="mr-10 hover:text-white"><i class="fas fa-user-plus fa-2x" aria-hidden="true"></i></a>
        <a href="loginhandler.php" class="mr-10 hover:text-white"><i class="fas fa-sign-in-alt fa-2x" aria-hidden="true"></i></a>
        <a class="hover:text-white" href="search.php"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>';
    }
    

  echo ' </nav>

    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
    <span class="ml-3 text-xl xl:block lg:hidden" style="position: relative;
    top: 1.1rem;
    font-family: montserrat;
    color: #83fff9;">tailblocks</span>
    <img src="—Pngtree—vector camera logo free logo_2000391.png" width="66px">
      
    </div>
  </div>
</header>';

if (isset($_GET['postsuccess']) && $_GET['postsuccess'] == true) {
    echo '<div class="bg-indigo-900 text-center py-4 lg:px-4 alertslide alerting">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
          <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Congratulation!</span>
          <span class="font-semibold mr-2 text-left flex-auto">your post has been posted</span>
          <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
      </div>';
   }

   if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == true) {
    echo '<div class="bg-indigo-900 text-center py-4 lg:px-4 alertslide alerting">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
          <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Congratulation!</span>
          <span class="font-semibold mr-2 text-left flex-auto">you are signed up now.</span>
          <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
      </div>';
  }

  if(isset($_GET['login']) && $_GET['login'] == true){
    echo '<div class="bg-indigo-900 text-center py-4 lg:px-4 alertslide alerting">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Congratulation!</span>
      <span class="font-semibold mr-2 text-left flex-auto">you are logged in now.</span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>';
  }

//   include 'postbackup.php';
  
?>