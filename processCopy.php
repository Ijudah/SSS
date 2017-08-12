<?php
  mysql_connect("localhost","root","root");
  mysql_select_db("The Fields");
 
   
  $action=$_POST["action"];
 
  if($action=="showcomment"){
     $show=mysql_query("SELECT * FROM Visitor WHERE status=1");
 
      $r = array(); 	  
      while ( $array = mysql_fetch_array( $show ) ) {
	  $r[] = $array;
      }
      echo json_encode($r); 	
  } else if ( $action == "loadPage") {
  
      $flat_No = $_POST["Flat_No"];
	  
      $sql = "SELECT * FROM Tenants WHERE Flat_No ='". $flat_No ."'"; 
      $result = mysql_query($sql);          //query

      $r = array();
      
      while ( $array = mysql_fetch_array( $result ) ) {
	  $r[] = $array;
      }

      $sql = "SELECT * FROM Visitor WHERE Flat_No ='". $flat_No ."' AND status=1"; 
      $result = mysql_query($sql);          //query

      $a = array();
      
      while ( $array = mysql_fetch_array( $result ) ) {
	  $a[] = $array;
      }
      
      $in[0] = $r;
      $in[1] = $a;
      
      echo json_encode($in);	  
  }
  else if($action=="addVisitor"){
    $name=$_POST["name"];
    $visitor=$_POST["visitor"];
    $tenant = $_POST["tenant"];
    $flat_No = $_POST["Flat_No"];
    $time = $_POST["time"];    
    $query=mysql_query("INSERT INTO Visitor(name,visitor,tenant,Flat_No,time,status) values('$name','$visitor','$tenant','$flat_No','$time',1) ");
    
//      echo "Hello";
 
//      if($query){
//         echo "Your comment has been sent";
//      }
//      else{
//         echo "Error in sending your comment";
//      }

  } else if($action=="delete") {
    $visitor = $_POST["visitor"];    
    mysql_query( "UPDATE Visitor SET status = 0 WHERE visitor='". $visitor ."'" );    
     echo $visitor;
  }
  else if( $action == "search" ) {
      $visitor=$_POST["visitor"];      
      $flat_No = $_POST["Flat_No"];
      $time = $_POST["time"];
      
      $sql = "SELECT * FROM Visitor WHERE Flat_No ='". $flat_No ."'"; 
      $result = mysql_query($sql);          //query

      if ( mysql_num_rows( $result ) > 0 )
	  mysql_query( "UPDATE Visitor SET time = '". $time ."',status = 1 WHERE visitor='". $visitor ."'" );  	  	  
      
      else
	  echo "Not found!";
      
  } else if( $action == "advance" ) {
  
      $visitor=$_POST["visitor"];      
      $flat_No = $_POST["Flat_No"];
      $time = $_POST["time"];
      
      $sql = "SELECT * FROM Visitor WHERE Flat_No ='". $flat_No ."' AND visitor='". $visitor ."'"; 
      $result = mysql_query($sql);          //query

      if ( mysql_num_rows( $result ) > 0 )
	  mysql_query( "UPDATE Visitor SET time = '". $time ."',status = 1 WHERE visitor='". $visitor ."'" );    	  
      
      else
	  echo "Not found!";
  }
?>