
<div class="container-fluid">
	<div class="row">
	<!--	<div class="col-md-2">
      <div class="list-group">
        <a class="list-group-item <?php echo setactive("main") ?>" href="index.php?c=prog&pm=main"><i class="fa fa-calendar fa-fw"></i>&nbsp; Ανά εξάμηνο</a>
        <a class="list-group-item <?php echo setactive("prof") ?>" href="index.php?c=prog&pm=prof"><i class="fa fa-male fa-fw"></i>&nbsp; Ανά καθηγητή</a>
        <a class="list-group-item <?php echo setactive("main3") ?>" href="#"><i class="fa fa-university fa-fw"></i>&nbsp; Ανά αίθουσα</a>
      </div>
		</div>-->
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
