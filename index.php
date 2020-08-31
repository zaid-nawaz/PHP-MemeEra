<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
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
 
    
    </style>
  </head>
  <body>

    <?php include 'dbconnect.php';?>
    <?php include 'tailheader.php'; ?>

 <?php 

$sql = "SELECT * FROM `posts`";
$result = mysqli_query($conn,$sql);

  while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['title'];
    $desc = $row['description'];
    $image = $row['image'];
    $extension = substr($image,-4);

    if($extension == '.mp4'){
      echo ' <div class="container alertslide" style="    background-color: #1a202c;">
      
      
<video width="850" class="mx-auto d-block" height="240" controls>
<source src="videouploads/'.$image.'" type="video/mp4">

Your browser does not support the video tag.
</video>
      <p class="lead" style="margin: 20px 70px;padding: 0px 90px;color:white;">'.$title.'</p>
      
      <p class="lead" style="margin: 20px 70px;padding: 0px 90px;color:white;">'.$desc.'</p>
      <hr>
      </div>';
      
    }else{
      echo ' <div class="container alertslide " style="    background-color: #1a202c;">
      <img src="uploads/'.$image.'" class="mx-auto d-block" alt="" style="height : 30rem;">
      <p class="lead" style="margin: 20px 70px;padding: 0px 90px; color:white;">'.$title.'</p>
      
      <p class="lead" style="margin: 20px 70px;padding: 0px 90px; color:white;">'.$desc.'</p>
      <hr>
      </div>';
    }
  
    
    
  }
    
  ?> 


    <script>

let alerting = document.getElementsByClassName('alerting');
    setTimeout(()=> {
      alerting[0].style.display = 'none';
    },3000);
    </script>
    <script src="https://kit.fontawesome.com/c89c8c3672.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>