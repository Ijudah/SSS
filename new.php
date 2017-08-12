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
  
  <style>
  
    .paper {
      transition: box-shadow .25s;
      padding: 20px;
      margin: 0.5rem 0 1rem 0;
      border-radius: 2px;
      background-color: #fff; 
      position: relative;
      width: 100px;
      height: 100px;
    }
    
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col s4 offset-s4">
	  <div class="card small">
	    <div class="card-image waves-effect waves-block waves-light">
	      <img class="activator" src="6e609595854a.jpg">
	    </div>
	    <div class="card-content">
	      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
	      <p><a href="#">This is a link</a></p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
	      <p>Here is some more information about this product that is only revealed once clicked on.</p>
	    </div>
	  </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s4 offset-s4">
	  <div class="card small">
	    <div class="card-image waves-effect waves-block waves-light">
	      <img class="activator" src="user.jpg" width="150" height="200">
	    </div>
	    <div class="card-content">
	      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
	      <p><a href="#">This is a link</a></p>
	    </div>
	    <div class="card-reveal">
	      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
	      <p>Here is some more information about this product that is only revealed once clicked on.</p>
	    </div>
	  </div>
      </div>
    </div>
  </div>
  
  <div class="container"> 
	  <div class="row">
	    <div class="col s4 offset-l4 cards">	  
	      
	      <div class="card medium">
		
		<div class="row">
		  <div class="col s6 offset-s3">
		    <img src="icon-user-default.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
		  </div>
		</div>       
		
		<div class="card-content">
		    <div class="row">
		      <div class="container">
		      
			<div class="row">
	  <!-- 		<i class="material-icons prefix">room</i> --> <!--Turn on( Uncomment it) when around Wifi-->
			  <div class="input-field col s12">
			    <input id="flat_number" type="text" class="validate">
			    <label for="flat_number">Flat No.</label>
			  </div>
			</div>
			
			<div class="row">		
			  <div class="container col offset-s3">
			    <button class="btn waves-effect waves-light activator" type="submit" name="action" onClick="moveDiv()">Submit
	    <!-- 		  <i class="material-icons right">send</i> -->
			    </button>
			  </div>	      
			</div>
			
		      </div>
		    </div>
		    
		</div>
		
		<div class="card-reveal">
		</div>
		
	      </div>		      
	      
	    </div>
	  </div>      
	</div>
<!--    
  
<!-- Grids Starts   -->
      <div class='container'>
	<div class="row">
	      <div class="grid-example col s12 teal lighten-2">
		      <span class="flow-text">

			  I am always full-width (col s12)

		      </span>
	      </div>
	      <!--<div class="grid-example col s12 m6 l8 teal lighten-2">
		  <span class="flow-text">

		      I am full-width on mobile (col s12 m6 l8)

		  </span>
	      </div>-->
	      
	      <div class="grid-example col s4 teal lighten-2">
		  <span class="flow-text">

		      I am full-width on mobile (col s12 m6 l2)

		  </span>
	      </div>
	</div>
	
  <!--       Second -->

	  <div class="row">
	      <div class="col grid-example s12 blue lighten-1">
		  <span class="flow-text">

		      s12

		  </span>
	      </div>
	      <div class="col grid-example s12 m4 l2 teal lighten-1">
		  <span class="flow-text">

		      s12 m4 l2

		  </span>
	      </div>
	      <div class="col grid-example s12 m4 l8 teal lighten-1">
		  <span class="flow-text">

		      s12 m4 l8

		  </span>
	      </div>
	      <div class="col grid-example s12 m4 l2 teal lighten-1">
		  <span class="flow-text">

		      s12 m4 l2

		  </span>
	      </div>
	      <div class="col grid-example s12 m6 l3 purple lighten-3">
		  <span class="flow-text">

		      s12 m6 l3

		  </span>
	      </div>
	      <div class="col grid-example s12 m6 l3 purple lighten-3">
		  <span class="flow-text">

		      s12 m6 l3

		  </span>
	      </div>
	      <div class="col grid-example s12 m6 l3 purple lighten-3">
		  <span class="flow-text">

		      s12 m6 l3

		  </span>
	      </div>
	      <div class="col grid-example s12 m6 l3 purple lighten-3">
		  <span class="flow-text">

		      s12 m6 l3

		  </span>
	      </div>
	  </div>
      </div>
<!-- Grids Ends      -->
      
  
  <div class="container">
    <div class="row">
      <div class="col s4 offset-s4">
	    <div class="card-panel grey lighten-5 z-depth-1">
	      <div class="row valign-wrapper">
		<div class="col s6 offset-s4">
		  <img src="6e609595854a.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
		</div>
	     </div>
	     <div class="row valign-wrapper">
		<div class="col s10">
		  <span class="black-text">
		    This is a square image. Add the "circle" class to it to make it appear circular.
		  </span>
		</div>
	      </div>
	    </div>
	  </div>
      </div>
  </div>
  
  <!--  Scripts-->
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  <script>
      function gainFocus( divNo ) {
      
        alert("Gain No.: " + divNo );
	
// 	Add classes
	
	for ( i = 1; i <= 4; i++ )
	    if ( divNo != i )
		$('.cards').children().eq(i).addClass("loseFocus");
	
 	$('.cards').children().eq(divNo).addClass("gainFocus");
	    
	$(".loseFocus").transition({ y : 150 },1000,'ease');
	
	for ( i = 0; i <= 3; i++ )
	    $(".loseFocus").eq(i).transition({ scale: [0.8,0.8] },1000,'sharp');
	
	$(".loseFocus").fadeIn();
	
	if ( divNo == 3 ) 
	    $("gainFocus").transition({ x : 1280, y : 200 },500,'ease');		
	else if ( divNo == 4)
	    $("gainFocus").transition({ x : 150, y : 200 },500,'ease');
	else
	    $("gainFocus").transition({ y : 180 },500,'ease');
	
	$("gainFocus").transition({ scale: [1.8,1.8] },1000, 'ease');
	$("gainFocus").css("box-shadow","0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22)");
	
	for ( i = 1; i <= 4; i++ )		
		$('.cards').children().eq(i).remove("loseFocus");
    }
  </script>
  
  </body>
</html>


