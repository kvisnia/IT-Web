
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/timeline.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
  </head>

<?PHP require("phpscripts/progfunc.php"); ?>
<?PHP require("phpscripts/func.php"); ?>

  <body onload="mainloader('<?php echo $_GET['c']; ?>')" id="bodyDiv">

  <?PHP include("./pages/panels/menu.php"); ?>

    <div class="container" id="homecontainer">


    </div>



    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/nanobar.js"></script>
    <script src="js/menu.js"></script>


  </body>
</html>
