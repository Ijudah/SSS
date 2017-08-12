<?php

// -------------------------------------------
// $barCode=$_GET['id']; // Getting the string
// -------------------------------------------

//--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "root";

  $databaseName = "The Fields";
  $tableName = "variables";

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
//   include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  
?>
<!--
<form action="connect_db.php" method="post">
Name: <input type="text" name="FlatNo"><br>
<input type="submit">
</form>-->

<?php

?> 