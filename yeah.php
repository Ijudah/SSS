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
    .paper, .pape {      
      transition: box-shadow .60s ease-out;
      padding: 20px;
      margin: 0.5rem 0 1rem 0;
      border-radius: 2px;
      background-color: #fff; 
      position: absolute;      
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    
    .divider {
 	position: relative;
 	left: 0px;
	opacity: 0;
     }
     
     .visitors {
      position : absolute;
      top: 250px;
      left: 230px;
      width: 504px;
      height: 201px;
      opacity: 0;
      z-index: -1;
      padding: 0;
    }

    .img1 {
 	margin: 10px; 
	float: right;
	top: -85px;	
	position: relative;	
	width: 64px;
	height: 90px;
    }
    
    .imgCap {	
	width: 64px;
	height: 64px;
	border-radius: 5%;
	shape-outside: rect();
	shape-margin: 15px;
    }
    
    .box {
	padding: 0;
	left: 30%;
	width: 504px;
	height: 80px; /*100px*/
    }
    .details {
	margin: 10px;
    }
    
    h1{
	font-size: 20px;
	margin: 0;
	padding: 2px;
    }
    h2{
	font-size: 15px;
	margin: 0;
	padding: 2px;
    }
    h3{
	font-size: 12px;
	margin: 0;
	padding: 2px;
    }
    
    .img2 {
	float: right;
	bottom: 0px;
	right: 0px;
	opacity : 1;
    }
    
    .inputTransit {  
	left: 40%;
	top: 200px;
	width: 200px;
	height: 50px;
	padding: 0;
     }
     
     .button {
	position: relative;
	margin: 5px;	
	background-color: #fff;
	opacity: .5;
	width: 190px;
	height: 40px;
	-webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
	transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
     }
     
     .button.circle {
	border-radius: 50%;
	width: 40px;
	height: 40px;
	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
	transform: translateX(140px);
	-webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
	transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
     }
    
   .button.up {
	transform: translateY(-50px);
	-webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
	transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
   }
    
    .button:hover {
	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    
    .dots {
	float: left;
	margin: 0px;
	background: #fff;
	width: 5px;
	height: 24px;
	float: right;
    }

    .dots span {
	text-align: center;
	border-radius: 50%;
	background-color: #000;
	display: block;
	position: absolute;
	left: 1px;
	width: 3.5px;
	height: 3.5px;
	position: relative;
	-webkit-transform: translateY(29px);
	transform: translateY(18px); 
    }

    .dots .third {
	-webkit-transform: translateY(0);
	transform: translateY(-2px);
    }

    .dots .second {
	-webkit-transform: translateY(10px);
	  transform: translateY(8px);
    }
    .iconInfo {
      width: 75px;
      height: 64px;
      position: relative;
      right: 8px;
    }
    
    .textPro, .pic {
	width: 200px;
	height: 200px;	
    }
    
    .textPro {
	position: absolute;
	top: -1px;
	left: -1px;
	background: -webkit-linear-gradient(white, black); 
	background: linear-gradient(white, black); 
	opacity: .2;
    }
    
    .pic {	
	position: relative;
	top: 100px;
	left: 40%;	
	background-image: url("office.jpg");
	background-size: 200px 200px;
    }
    
    .whiteText {
	color: white;
    }
    
</style>

<body>
	

	<!--<div class="inputTransit pape">
	  <div class="button"></div>
	</div>-->
	
	<div class="pic pape">	
	  <h2 class="whiteText">Hello</h2>
	  <div class="textPro"></div>
	</div>
	
<!--  Scripts-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery-transit.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="work.js"></script>

<script>
     $(document).ready( function () {
// Button 
// ----------------------------------------
//       $('.button').click( function() {
//  	$(this).toggleClass("circle");
//       }); 
// ----------------------------------------


// 	$('.visitors').transition( { delay: 2000} );
//  	$('.visitors').transition( { top: '275px', opacity: .5 }, 500, 'ease-in' );
// 	$('.visitors').transition( { top: '280px', opacity: 1 }, 1500, 'ease-out' );
	
// 	for ( i = 0, pos = 65, num = ""; i < 2; i++, pos += 70 ) {
// 	  num = pos + "px";
// 	  $('.visitors').find('.divider').eq(i).transition( { top: num, /*left: '-20px',*/ opacity: 1 }, 1500, 'ease-out' );
//  	}
// 
	
//          for ( i = 0; i < 1; i++ )
//    	  $('body').append( makeVisitor() );
//        
//           for ( i = 0, pos = 0, num = ""; i < 1; i++, pos += 81 ) {
// 	    num = pos + "px";
// 	    $('.box').eq( i ).transition( { top: num } );
//           }
 
//         $('.box').on({
//  	  mouseenter: function () {
//  	    $(this).siblings().transition( { zIndex: -1 } );
//  	    $(this).transition({ width: '514px', height: '90px', margin: '10px 0px'});
//  	  },
//  	  mouseleave: function () {
//  	    $(this).siblings().transition( { zIndex: 1 } );
//  	    $(this).transition({ width: '504px', height: '80px',margin: '0px'});
//  	  }
//         });

//         $('.box').on({
//  	  mouseenter: function () {
// 	     $(this).siblings().transition( { zIndex: -1 } );
// 	     $(this).transition({ width: '524px', height: '100px'/*, margin: '10px 0px'*/});	     
//  	     $(this).find(".img2").transition({ opacity: 1 });
//  	  },
//  	  mouseleave: function () {
// 	     $(this).siblings().transition( { zIndex: 1 } );
//  	     $(this).transition({ width: '504px', height: '80px', delay: 100/*,margin: '0px'*/});
//  	     $(this).find(".img2").transition({ opacity: 0 });
//  	  }
//         });
// 
//         $(".img2").click( function () {
//  	  var index = $(this).parentsUntil('.box').length;
//  	  var box = $(this).parentsUntil('body').eq( index );
//  	  box.transition( { left: '120px' } );
//         });
//         
//          function makeVisitor () {
// 	    return $( '<div class="box pape">' +
// 		  '<div class="details">' +
// 		    '<h1>Oluwaseeki I.J</h1>' +
// 		    '<h2>A02197485</h2>' +
// 		    '<h3>12:45</h3>' +
// 		  '</div>' +
// 		'<div class="img1">' +
// 		    '<div class="iconInfo">' +
// 		      '<img class="imgCap" src="office.jpg" />' +
// 			'<div class="dots">' +
// 			  '<span class="first"></span>' +
// 			  '<span class="second"></span>' +
// 			  '<span class="third"></span>' +
// 			'</div>' +
// 		    '</div>' +		    
// 		    '<a><img class="img2" src="Pictures/emos/ic_delete_black_18dp.png"></a>' +
// 		'</div>'+
// 	      '</div>' 
// 	    );
// 	}


  });
</script>

</body>
</html>
