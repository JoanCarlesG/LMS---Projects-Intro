
<!-- INI of our HTML -->
<?php
include("header.php");
include('inc/router.php');
?>

<?php 
    $page = "";
    if(isset($_GET['page'])) {
        $page=$_GET['page'];
    }
    else{
        $page="";
    }
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>LMS System</title>
    <!-- cdn per incorporar Tailwind al projecte  -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
     <div class="container">
        <?php loadContent($page); ?>
     </div>
  </body>
</html>
