<!DOCTYPE html>

<html>
  <head>
    <title>AWS Technical RDS Tutorial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

	<div class="row">
		<div class="col-md-12">
      <?php include('menu.php'); ?>

			<div class="jumbotron">

      <?php
        include 'rds.conf.php';

        if ($RDS_URL == "") {  // if this has already run and a value is added for the RDS endpoint use rds-read-data
          include 'rds-config.php';
        }
        else {
          include 'rds-read-data.php';
        }

      ?>
    </div>
  </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
