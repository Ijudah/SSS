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
  
    .paper, .pape {
      transition: box-shadow .60s ease-out;
      padding: 20px;
      margin: 0.5rem 0 1rem 0;
      border-radius: 2px;
      background-color: #fff; 
      position: absolute;
      width: 400px;
      left: 400px;
    }
    
    .paper {
      height: 85px;      
      top: 50px;
      
    }
    
    .pape {
      height: 400px;
      top: 67px;
      display: none;
    }
    
    .paper:hover {
      box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
     }
    
    .container1 {
      margin: 0 auto;
      max-width: 1280px;
      width: 90%; 
    }
    
  </style>
</head>
<body>

  <div class="container">
    <div class="contain"></div>
  </div>  
  <div class="container1">
    <div class="pape teal lighten-2 waves-effect waves-light"></div>
  </div>  
  
  <!--  Scripts-->
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/jquery-transit.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  <script>
      $(document).ready( function() {
      
	  for ( i = 0; i < 5; i++ )
	    $('.contain').append(makeCard());
	    
  	  for ( i = 1, pos = 100, _delay = 0; i < 5; i++, pos += 100, _delay += 1000 )  
 	    $('.contain').children().eq(i).transition( { y: pos, delay: 1000} );
 	    
 	  for ( i = 0, _delay = 2000; i < 5; i++, _delay += 100 )
 	    $('.contain').children().eq(i).transition({ delay: _delay });
 	    
//    	  for ( i = 0; i < 5; i++ ) {
//   	    $('.container').children().eq(i).transition({ boxShadow: "0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22)"},1000,'ease-in');
//   	    $('.container').children().eq(i).transition({ boxShadow: "0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12)"},1000,'ease-out');
//   	  }
	  
// 	  for ( i = 0, _delay = 5000; i < 5; i++, _delay += 1000 )
// 	    $('.container').children().eq(i).transition({ delay: _delay });
	  
//  	  for ( i = 1, j = 4, pos = 200; i < j; i++, j--, pos -= 100 )  {
// //  	    alert("Done");
//   	    $('.container').children().eq(i).transition( { y: pos , delay: 1000} );
//   	    $('.container').children().eq(j).transition( { y: ( -1 * ( pos ) ), delay:1000 } );  	    
//   	  } 

	  
	  $('.contain').children().eq(1).transition( { y: 116, delay: 10} );
   	  $('.contain').children().eq(3).transition( { y: 284 , delay: 10} );
   	  $('.contain').children().eq(0).transition( { y: 81, delay: 1000} );
   	  $('.contain').children().eq(4).transition( { y: 368, delay: 10} );
   	  
   	  $('.contain').transition({ perspective: '10px', rotate: '45deg', delay :10000 });
//    	  $('.container').children().eq(4).fadeOut(1000);
   	  
//    	  $(".container").transition({ display: none, delay : 500 });
//     	  $(".container").transition({ display: none, delay : 500 });
   	  
//    	  $(".pape").fadeIn(9000);
      });
	
      function makeCard() {
	return $("<div class='paper teal lighten-2 waves-effect waves-light'></div>");
      }
      
  </script>
  </body>
</html>


