
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<div class="list-group">
				 <a href="index.php?c=prog&pm=main" class="list-group-item <?php echo setactive("main") ?>">Home</a>
         <a href="#" class="list-group-item <?php echo setactive("home2") ?>">Home 2</a>
         <a href="#" class="list-group-item <?php echo setactive("home3") ?>">Home 3</a>
			</div>
		</div>
		<div class="col-md-10">
			<div class="tabbable" id="tabs-224785">
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

		</div>
	</div>
</div>
