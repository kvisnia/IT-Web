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
