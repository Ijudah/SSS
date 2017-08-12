<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="work.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<style>
    nav {
      background-color: #4db6ac;
    }
    .the-return {
      position: fixed;
      bottom: 50px;
      right:0px;
    }
</style>

<body>
      <?php include 'connect_dp.php';?>        
<!-- ############################## Header section ###########################################-->
      <?php include 'nav.php';?>        
<!-- ############################## Header section ends #############################################-->

<!-- ############################## The main body ##################################################-->
	<?php include 'mainBody.php';?>
<!-- ############################# The End of the main body #######################################-->

<!-- ############################# The Footer #################################################### -->
	<?php include 'footer.php';?>
<!-- ############################# The End Footer #################################################### -->

<!--  Scripts-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery-transit.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="work.js"></script>

<script>
    startUp();
</script>

</body>
</html>
