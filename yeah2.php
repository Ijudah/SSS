<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="work.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/material-click.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style2.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
    
    <div class='header1 z-depth-3'> </div>             
      <div class='header z-depth-3'></div>
    
    <div class='containerMine'>
    
      <div class='yea'>	
	
	<div class='smallArrow'>
	  <span class="first"></span>
	  <span class="second"></span>
	  <span class="third"></span>
	</div>
	
	<div class="home ripple-effect waves-effect waves-teal btn-flat" data-ripple-color="#82b1ff" data-ripple-limit=".containerMine">
	  <img  src="Pictures/emos/ic_home_black_24dp.png"/>
	</div>
	
	<div class="tenantDiv"></div>
	
	<div class='yea1'>
	  <div class="card">
	    <div class="card-image waves-effect waves-block waves-light">
	      <img class="activator" src="office.jpg">
	    </div>
	    <div class="card-content">
 		    <form action="processCopy.php" class="tenants col s12" method="post" accept-charset="utf-8">
			<div class='input'>
			  <div class="input-field col s12">
			    <input id="flat_number" type="text" class="flat_number" name="FlatNo">
			    <label for="flat_number">Room No.</label>
			  </div>
			</div>
			  
 			 <div class="button">
			   <div class="container col offset-s3">
			      <button class="btn tenant waves-effect waves-light activator" type="submit" name="action">Submit	      
			      </button>
			   </div>
 			  </div>
 		    </form> 
	    </div>
	    
	    <div class="card-reveal">      
		<div class='preloader'>
		  <p class="center flow-text" >Loading...</p>
		  <div class="progress">
		      <div class="indeterminate"></div>
		  </div>
		</div>
		
	    </div>
	  </div>
	</div>

	<div class="wrap">
	  <div class="content">
	    <h2>Well Hello!</h2>
	    <p>contents...</p>
	  </div>
	</div>
	
	<div class="signUpwrap">
	  <div class="content">
	    
	    <form action="processCopy.php" class="advanceSearch col s12" method="post" accept-charset="utf-8">
		<div class='input'>
		  <div class="input-field col s12">
		    <input id="id_number" type="text" class="id_number" name="id_number">
		    <label for="id_number">ID/Passport No.</label>
		  </div>
		</div>
		
		<div class="row">	       
		    <button class="btn-flat advance ripple-effect waves-effect waves-teal" data-ripple-color="#82b1ff" data-ripple-limit=".containerMine" type="submit" name="action">ADVANCE</button>
		    <button class="btn-flat search waves-effect waves-light" type="submit" name="action">SEARCH</button>        
		</div>		  	
	    </form>
	    
	    <div class="signCheck">
	      <h2>Sign in as ( New or Existing ) Visitor</h2>
	      <div class="row">
		  <button class="btn-flat new waves-effect waves-teal" name="action">NEW</button> <!-- <button class="btn-flat advance ripple-effect waves-effect waves-teal" data-ripple-color="#82b1ff" data-ripple-limit=".containerMine" type="submit" name="action">NEW</button> -->
		  <button class="btn-flat existing waves-effect waves-light" type="submit" name="action">EXISTING</button>
	      </div>
	    </div>
	    
	  </div>
	</div>
	
<!-- 	<div class='cardBox'> -->
<!-- 	    <div class='row'></div> -->
<!-- 	</div> -->
	
      </div>
    </div>
<!--  Scripts-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery-transit.js"></script>
<script src="js/material-click.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="work.js"></script>
<script src="js/yeah2.js"></script>
<script>
  $(document).ready( function () {
  });
</script>
</body>
</html>
