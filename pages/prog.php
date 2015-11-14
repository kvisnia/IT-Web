
        <?PHP
           if(isset($_GET['pm']) && !empty($_GET['pm']))

            {

              if(file_exists(realpath('pages/prog')."/".$_GET['pm'].".php"))

              {

                include(realpath('pages/prog')."/".$_GET['pm'].".php");

              }

              else {

                include(realpath('pages/prog').'/main.php');

              }

            } else

            {

              include(realpath('./pages/prog').'/main.php');

            }

            ?>
