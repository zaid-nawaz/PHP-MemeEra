<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Hello, world!</title>
    <style>

body{
  background-color: #2d3748;
}

    .alertslide{
    width: 66rem;
  margin: auto;
  position: relative;
  right: 29px;
    }

    .profile{
      background: linear-gradient(90deg,#d38312,#a83279);
    }
    </style>
  </head>
  <body>
<?php 
    include 'dbconnect.php';
    include 'tailheader.php';
    
    
?>



<div class="alertslide">
    <section class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
 
<?php 

$profileof = $_GET['username'];
  $sql = "SELECT * FROM `profile` WHERE profileof = '$profileof'";
  $result = mysqli_query($conn,$sql);
  $numrows = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  $profilename = $row['profilename'];
  $profiledesc = $row['description'];
  $profilepicture = $row['picture'];
 

  $serialno = $row['serialno'];


  if ($numrows == 0) {
    echo '<form action="insertionprofile.php" method="post" enctype="multipart/form-data">
    <img class="xl:w-1/4 lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded profile" style="
    
    
    padding: 5px 6px;
    /* margin: 10px; */
    width: 236px;
    height: 210px;
" alt="hero" src="profilepicture.jpg">
<label for="profilepicture"> <img src="edit.png" alt="" srcset="" width="40px" style="    position: relative;
left: 40rem;
bottom: 5rem;"></label>
    <input type="file" style="display: none;" id="profilepicture" name="profilepicture">
    <div class="flex flex-col text-center w-full" style="    align-items: center;">
      <h1 class="text-xl font-medium title-font mb-4 text-white" style="display: flex;
    justify-content: center;
    align-items: center;
    padding: 2px 2px;
    margin: 13px 6px;"><p id="alreadyname" style="display:none;">zaid Nawaz</p>
    <input class=" bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-indigo-500 text-base px-4 py-2"  name="editedname" id="editedname" placeholder="Write your name" type="text">
    <img src="edit.png" id="nameicon" alt="" srcset="" width="40px" style="margin-left: 20px;"></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 2px;
"><span id="alreadydesc" style="display:none;">this is an unfinished description.</span>
<input class=" bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-indigo-500 text-base px-4 py-2"  name="editedDesc" id="editedDesc" placeholder="Write your description"  type="text">
      <img src="edit.png" id="descicon" alt="" srcset="" width="40px" style="margin-left: 20px;">
    </p>
    <button type="submit" id="submitbutton" style="background: linear-gradient(90deg,#360033,#0b8793);
    width: 153px;
    height: 43px;
    border-radius: 6px;
    color: white;
    ">Save changes</button>
    



    </div>
    </form>';
  }else{
    echo '    <form action="updationprofile.php" method="post" enctype="multipart/form-data">
    <img class="xl:w-1/4 lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded profile" style="
    
    
    padding: 5px 6px;
    /* margin: 10px; */
    width: 236px;
    height: 210px;
" alt="hero" src="profileuploads/'.$profilepicture.'">
<label for="profilepicture" ><img id="picicon" src="edit.png" alt="" srcset="" width="40px" style="    position: relative;
left: 40rem;
bottom: 5rem;"></label>
    <input type="file" style="display: none;" id="profilepicture" name="profilepicture">

    <div class="flex flex-col text-center w-full" style="    align-items: center;">
      <h1 class="text-xl font-medium title-font mb-4 text-white" style="display: flex;
    justify-content: center;
    align-items: center;
    padding: 2px 2px;
    margin: 13px 6px;"><p id="alreadyname">'.$profilename.'</p>
    <input class=" bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-indigo-500 text-base px-4 py-2"  name="editedname" id="editedname" placeholder="Edit your name" style="display: none;" type="text">
    <img src="edit.png" id="nameicon" alt="" srcset="" width="40px" style="margin-left: 20px;"></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base" style="    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 2px;
"><span id="alreadydesc">'.$profiledesc.'</span>
<input class=" bg-gray-800 rounded border border-gray-700 text-white focus:outline-none focus:border-indigo-500 text-base px-4 py-2"  name="editedDesc" id="editedDesc" placeholder="Edit your description" style="display: none;" type="text">
      <img src="edit.png" id="descicon" alt="" srcset="" width="40px" style="margin-left: 20px;">
    </p>
    <button type="submit" id="submitbutton" style="background: linear-gradient(90deg,#360033,#0b8793);
    width: 153px;
    height: 43px;
    border-radius: 6px;
    color: white;
    display:none;">Save changes</button>
    



    </div>
    </form>';
  }
  
?>

  </div>
</section>
<section class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Stats</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">hey user, here u can see my stats, all my subscriber count , follower count display here.</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center" style="justify-content: center;">
     
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
        <img src="user.png" width="59px" height="59px" alt="" style="position: relative;
    left: 63px;
    bottom: 5px;" srcset="">
          <h2 class="title-font font-medium text-3xl text-white">0</h2>
            
          <p class="leading-relaxed">Followers</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">

         <img src="blog.png" width="59px" height="59px" alt="" style="position: relative;
    left: 63px;
    bottom: 5px;" srcset="">
          <h2 class="title-font font-medium text-3xl text-white">0</h2>
          <p class="leading-relaxed">Posts</p>
        </div>
      
      </div>
   
     
    </div>
  </div>
</section>
<section class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Here are some posts i've posted.</h1>

    </div>
    <div class="flex flex-wrap -m-4">
      <?php 
      if($_GET['username']){
        $postby = $_GET['username'];
        
     
        $sql = "SELECT * FROM `posts` WHERE postby = '$postby'";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['title'];
        $desc = $row['description'];
        $image = $row['image'];


        echo '<div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative" style="border: 2px solid;">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-contain object-center" src="uploads/'.$image.'">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hover:opacity-100">
            
            <h1 class="title-font text-lg font-medium text-white mb-3">'.$title.'</h1>
            <p class="leading-relaxed">'.$desc.'</p>
          </div>
        </div>
      </div>';
        }
        
      }
        
 
      ?>
     
    </div>
  </div>
</section>
</div>
    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/c89c8c3672.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>