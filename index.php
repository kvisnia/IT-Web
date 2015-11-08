
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/timeline.css" media="screen">
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css" media="screen">
  </head>

<?PHP require("phpscripts/progfunc.php"); ?>
<?PHP require("phpscripts/func.php"); ?>

  <body>
  <?PHP include("./pages/panels/menu.php"); ?>

    <div class="container" id="container">
      <?PHP
         if(isset($_GET['c']) && !empty($_GET['c']))

          {

            if(file_exists(realpath('pages/')."/".$_GET['c'].".php"))

            {

              include(realpath('pages/')."/".$_GET['c'].".php");

            }

            else {

              include(realpath('pages/').'/home.php');

            }

          } else

          {

            include(realpath('./pages/').'/home.php');

          }

          ?>
    </div>


    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>


  </body>
</html>
