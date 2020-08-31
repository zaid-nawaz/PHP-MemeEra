<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->

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
  height: 39rem;
    }



    </style>
    <title>Hello, world!</title>
  </head>
  <body>
        <?php 
          include 'dbconnect.php';
          include 'tailheader.php';
          
        ?>

  <section class="text-gray-500 bg-gray-900 body-font alertslide">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
    <h1 class="title-font font-medium text-3xl text-white">A platform dedicated to Meme lover and meme maker</h1>
    <p class="leading-relaxed mt-4">Please do not go out of the way to mislead someone or spread hatred.</p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0" style="    margin-right: 30px;">
      <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
      <form action="loginphp.php" method="post" enctype="multipart/form-data">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" name="email" placeholder="Email" type="email">
      <input class="bg-gray-900 rounded border text-white border-gray-900 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4 extrawidth" placeholder="password" name="password" type="password">
      <button class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg extrawidth">Login</button></form>
      <p class="text-xs text-gray-600 mt-3">we're not going to share your credentials to anyone.</p>
    </div>
  </div>
</section>
<script src="https://kit.fontawesome.com/c89c8c3672.js" crossorigin="anonymous"></script>
 
  </body>
</html>


