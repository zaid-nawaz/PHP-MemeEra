<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello world</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
    body{
      background-color: #1a202c;
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

    <?php 
        include 'tailheader.php';
        
    ?>
    <div class="container  alertslide">
    <form action="search.php" method="POST" enctype="multipart/form-data" style="height:10px">
    <input class="bg-gray-800 text-white rounded border border-gray-700 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" style="    width: 66rem;
    padding: 10px 53px;" placeholder="Search any username" type="text" name="searchquery">
    <button type="submit"><i class="fa fa-search fa-2x" aria-hidden="true" style="    position: absolute;
    top: 8px;
    left: 63rem;"></i></button>
    </form>

<section class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto" style="min-height: 34rem;">
  <?php 
include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $searchquery = $_POST['searchquery'];
//  $sql =  "SELECT * FROM `profile` WHERE MATCH(profilename) AGAINST ('$searchquery')";
 $sql =  "SELECT * FROM `profile` WHERE profilename = '$searchquery'";
 $result = mysqli_query($conn,$sql);

 $numrow = mysqli_num_rows($result);
 $halfnumrow = $numrow / 2;
 while ($numrow > $halfnumrow) {
  if ($row = mysqli_fetch_assoc($result)) {
    $profileof = $row['profileof'];
    echo'<div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-800 sm:flex-row flex-col">


    <img class="xl:w-1/4 lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded profile" style="
    
    
    padding: 5px 6px;
    /* margin: 10px; */
    width: 236px;
    height: 210px;
    margin-right: 100px;
    border: 2px solid;
" alt="hero" src="profileuploads/'.$row['picture'].'">



      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-white text-lg title-font font-medium mb-2"><a href="profile.php?username='.$profileof.'">'.$row['profilename'].' </a></h2>
        <p class="leading-relaxed text-base">'.$row['description'].'</p>
        <a class="mt-3 text-red-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>';
   
  }
  if ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-800 sm:flex-row flex-col">
    <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
      <h2 class="text-white text-lg title-font font-medium mb-2">'.$row['profilename'].'</h2>
      <p class="leading-relaxed text-base">'.$row['description'].'</p>
      <a class="mt-3 text-red-500 inline-flex items-center">Learn More
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>

    <img class="xl:w-1/4 lg:w-1/3 md:w-1/2 w-2/3 block mx-auto mb-10 object-cover object-center rounded profile" style="
    
    
    padding: 5px 6px;
    /* margin: 10px; */
    width: 236px;
    height: 210px;
    margin-left: 100px;
    border: 2px solid;
" alt="waiting" src="profileuploads/'.$row['picture'].'">
  



  </div>';
 
  }
 
  $numrow--;
 }

}
  
?>


  </div>
</section>

     </div>
     
<script src="https://kit.fontawesome.com/c89c8c3672.js" crossorigin="anonymous"></script>
</body>
</html>