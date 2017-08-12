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
</head>

<style>

    nav {
      background-color: ;
    }

    .header {
      height: 50px;
      width: 100%;      
      top: -4px;
      background-color: #b2dfdb;
    }
    
    .header1 {
      height: 20px;
      width: 100%;
      top: -10px;
      background-color: #4db6ac;
    }
    
    .containerMine {
      width: 98%;
      height: 700px;
      position: relative;
      background-color: #29b6f6;
/*       top: 0px; */
      left: 12px;
      z-index: -1;
    }
    
    .containerMine {
	width: 1232px;
	height: 100%;
	left: 19px;
	transition: box-shadow .60s ease-out;
/* 	padding: 20px; */
	margin: 0.5rem 0 1rem 0;
	border-radius: 2px;
	background-color: #fff; 
 	position: fixed;
 	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);	
 	z-index: -1;
 	top: 75px;
    }    
    
    .yea {
	position: relative;    
	width: 100%;
	height: 784px;
	opacity: 1;
    }
    
    .yea1 {
	position: relative;
	left: 40%;
	width: 264px;
	height: 784px;
    }
    
    .preloader {
 	top: 85px;
	position: absolute;
	width: 224px;
	height: 224px;
	display: none;
	overflow: hidden;
    }
    
    
    .paper, .pape {      
      transition: box-shadow .60s ease-out;
      padding: 20px;
      margin: 0.5rem 0 1rem 0;
      border-radius: 2px;
      background-color: #fff; 
      position: absolute;      
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    
    .p1, .p3 {
	left: 245px;
	width: 728px;
	height: 56px;	
     }
     
     .p1{ top: 0px; }
     .p3{ top: 575px; }
     
     .p2 {	     	
	left: 38px;
	width: 1120px;
	height: 504px;
	top: 65px;      	
     }    
     
      .cards {
	  position: absolute;
  	  top: 146px;
   	  left: 197px;
	  box-shadow: none;	  
	  width: 168px;
	  height: 224px;
	  opacity: 0;
      }
      
      .smallTop {		
	width: 168px;
	height: 168px;
	margin: 0px;
	background-image: url('icon-user-default.png');
	background-size: 168px 168px;	
     }
     
     .smallDown {	
	box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);	
	width: 168px;
	height: 224px;
	margin: 0px;	
     }
     
     .divider {
 	position: relative;
 	left: 0px;
 	/*top: 56px*/
	opacity: 0;
     }
     
    .paper:hover {
      box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
     }
     
     .input {
      position: relative;
      top: -15px;
     }
     
     .button {
      position: relative;
      top: -15px;
      text-align: center;
     }
     
     .sign_up {
      position: absolute;
      top: 200px;
      left: 0px;
      width: 728px;
      height: 560px;
      opacity: 0;
     }
     
     .info {
      position: absolute;
      left: 280px;
      vertical-align: center;
      opacity: 0;
     }
     
     .emos {
      position: absolute;
      width: 24px;
      height: 24px;
      bottom: 10px;      
      border-radius: 5px;
      background-color: #fff;  
      opacity: .6;
      vertical-align: center;
      padding: 0;
      margin: 5px;
    }
    
    .emos:hover {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }
    
    .emos1 {
      right: 10px;
    }
    
    .emos2 {
      right: 65px;
      -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
      transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    
    .emos2.active {
      width: 1000px;
      height: 500px;
      -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
      transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
    }
    
    .emos3 {
      right: 120px;
    }
    
    .visitors {
      position : absolute;
      top: 250px;
      left: 230px;
      width: 504px;
      height: 201px;
      opacity: 0;
      z-index: -1;
/*       padding-right: 10px; */
    }
    
    .the-return {
      position: absolute; 
      top: 0px;
      right: 0px;
    }
    
    .text {
	position: absolute;
	bottom: 0px;
	padding: 24px 16px 16px;
	margin: 0;
	color: #424242;
	left: 0px;
     }
     
     .row1 {
	display: none;
     }     
/* -----------------------------------------------------------  */
     
/* ------------------------------------------ */
/* Box  */
/* ------------------------------------------ */
.box {
    padding: 0;
    left: 230px;
    width: 504px;
    height: 80px; /*100px*/
    opacity: 0;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.box:hover {
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.details {
    margin: 10px;
}

.details h1{
    font-size: 20px;
    margin: 0;
    padding: 2px;
}
.details h2{
    font-size: 15px;
    margin: 0;
    padding: 2px;
}
.details h3{
    font-size: 12px;
    margin: 0;
    padding: 2px;
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
    border-radius: 50%;
    shape-outside: circle();
    shape-margin: 15px;
}

.img2 {
    float: right;
    bottom: 0px;
    right: 0px;
    opacity: 0;
}
.home {
    float: right;	
    margin: 40px;
    height: 24px;
    width: 24px;
    opacity: 0;
}
/* -----------------------------------------------------------  */
    
/* ------------------------------------------ */    
/* Wrapper class     */
/* -----------------------------------------------------------  */
.wrapper {
  background: #e6e6e6;
  width: 100%;
  height: 100vh;
  position: relative;
}

.wrap h1 {
  color: #c7c7c7;
  font-weight: 200;
  text-align: center;
  position: absolute;
  top: 45%;
  width: 100%;
}
 
.wrap h2 {
  color: #007fed;
  font-weight: bold;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
  margin-bottom: 15px;
}
 
.wrap p {
  color: #001818;
}

.wrap {
  position: absolute;
  overflow: hidden;
  top: 10%;
  right: 20%;
  bottom: 50%;
  left: 20%;
  padding: 20px 50px;
  display: block;
  border-radius: 4px;
  transform: translateY(20px);
  transition: all 0.5s;
  visibility: hidden;
}
.wrap .content {
  opacity: 0;
}
.wrap:before {
  position: absolute;
  width: 1px;
  height: 1px;
  background: white;
  content: "";
  bottom: 10px;
  left: 50%;
  top: 95%;
  color: #fff;
  border-radius: 50%;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.wrap.active {
  display: block;
  visibility: visible;
  box-shadow: 2px 3px 16px silver;
  transition: all 600ms;
  transform: translateY(0px);
  transition: all 0.5s;
}
.wrap.active:before {
  height: 1200px;
  width: 1200px;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  margin-left: -1000px;
  margin-top: -1000px;
  display: block;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.wrap.active .content {
  position: relative;
  z-index: 1;
  opacity: 1;
  transition: all 600ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

/* -----------------------------------------------------------  */
    
/* ------------------------------------------ */    
/* SignUpWrap class     */
/* -----------------------------------------------------------  */    
    
.signUpwrap h1 {
  color: #c7c7c7;
  font-weight: 200;
  text-align: center;
  position: absolute;
  top: 45%;
  width: 100%;
}
 
.signUpwrap h2 {
  font-size: 20px;
  color: #007fed;
  font-weight: bold;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
  margin-bottom: 15px;
}
 
.signUpwrap p {
  color: #001818;
}

.signUpwrap {
  position: absolute;
  overflow: hidden;
  top: 15%;
  right: 35%;
  bottom: 60%;
  left: 35%;
  padding: 20px 50px;
  display: block;
  border-radius: 4px;
  transform: translateY(20px);
  transition: all 0.5s;
  visibility: hidden;
}
.signUpwrap .content {
  opacity: 0;
}
.signUpwrap:before {
  position: absolute;
  width: 1px;
  height: 1px;
  background: white;
  content: "";
  bottom: 10px;
  left: 50%;
  top: 95%;
  color: #fff;
  border-radius: 50%;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.signUpwrap.active {
  display: block;
  visibility: visible;
  box-shadow: 2px 3px 16px silver;
  transition: all 600ms;
  transform: translateY(0px);
  transition: all 0.5s;
}
.signUpwrap.active:before {
  height: 1200px;
  width: 1200px;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  margin-left: -1000px;
  margin-top: -1000px;
  display: block;
  -webkit-transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
  transition: all 600ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.signUpwrap.active .content {
  position: relative;
  z-index: 1;
  opacity: 1;
  transition: all 600ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}
    
    
    
/* ----------------------------------------- */
/* Classss arrow  */
/* ----------------------------------------- */

.smallArrow {
    float: left;
    margin: 40px;
    background: #fff;
    width: 24px;
    height: 24px;
    opacity: 0;
    display: none;
}

.smallArrow span {
    background-color: #000;
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    position: relative;
    -webkit-transform: translateY(10px) translateX(4px); 
    transform: translateY(10px) translateX(4px); 
}

.smallArrow .second,
.smallArrow .third {
      -webkit-transform: rotate(45deg) translateY(5.5px) translateX(6px);
     transform: rotate(45deg) translateY(5.5px) translateX(6px);
     width: 15px;
}

.smallArrow .second {
     -webkit-transform: rotate(-45deg) translateY(2.5px) translateX(-2px);
      transform: rotate(-45deg) translateY(2.5px) translateX(-2px);
}
/* --------------------------------------------------- */

/* ADVANCE */
/* --------------------------------------------------- */

.advanceSearch {
    display: none;
    vertical-align: center;
    margin-top: 45px;
}

/* --------------------------------------------------- */
/* Tenant Background */
/* --------------------------------------------------- */
.tenantDiv {
    display: none;
    width: 100%;
    height: 350px;
    position: relative;
    background-color: #ffe0b2;
    z-index: 0;
    opacity: .8;
}
/* --------------------------------------------------- */
/* 3 dots Icon */

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
  right: 10px;
}
/* --------------------------------------------------- */

</style>

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
			    <label for="flat_number">Flat No.</label>
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
	
      </div>  
      
      
      
    </div>
<!--  Scripts-->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery-transit.js"></script>
<script src="js/material-click.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script src="work.js"></script>

<script>
    $(document).ready( function () {

    });
    
    $('.smallArrow').click( function () {      
    
	if ( $('.wrap').hasClass('active') )
	  $('.wrap').toggleClass('active');      
	  
	else if ( $('.signUpwrap').hasClass('active') )
	  $('.signUpwrap').toggleClass('active');      
	  
	$('.signCheck').show();	
	$('.advanceSearch').hide();
	
 	$('.yea').children().not('.smallArrow, .tenantDiv').fadeIn(1000).show();

 	$('.tenantDiv').show();
 	$(this).hide();
    });

    $(".home").click( function () {
	location.reload(true);
    } );
 
    function startUp( data ) {
    
	$(".tenantDiv").transition({ delay: 1500});
	$(".tenantDiv").show().fadeIn(1000);
	$('.tenantDiv').transition( { opacity: 1 });
	
	for ( i = 0; i < data[0].length; i++)
	    $(".yea").append(makeCard( i, data[1].length )); 	    	    

 	for ( i = 0; i < data[1].length; i++ )
 	  $('.yea').append( makeVisitor() );
	  
// 	alert( "boxLength : " + boxLength );
// --------------------------------------------------------------------------------
//  	$('.preloader').fadeIn(3000);	
//  	
//  	for ( i = 0; i < 2; i++ ) {
// 	  $('.yea1').transition({  opacity: 0, delay: 100 },500,'ease-in');
// 	  $('.yea1').transition({  opacity: 0.5, delay: 100 },500,'ease-in'); 		  	  
// 	  $('.yea1').transition({  opacity: 1, delay: 100 },500,'ease-out'); 	
// 	} 	
// --------------------------------------------------------------------------------

	$('.yea1').transition({ left: '100%', opacity: 0, delay: 100 },500,'ease-in');
	$('.yea1').hide();
   	showGrids ( data );
   	
   	$('.advance').click( function () {
	      
	      var id_number = $('.advanceSearch').find(".id_number").val();
	      var card = $('.cards').filter('.active');	      
 	      var Flat_No = card.find('.flat_No').text();
 	      var time = timeIn();
 	      
	      $.ajax({
		    type:"post",
		    url:"processCopy.php",
		    data:"visitor="+id_number+"&Flat_No="+Flat_No+"&time="+time+"&action=advance",
		    success:function(data){	
		    
			if ( data == "Not found!" )
			    alert(data);
			else
			    showComment();
		    }
	      }); return false;
   	});
   	
   	$('.search').click( function () {
	      
	      var id_number = $('.advanceSearch').find(".id_number").val();
	      var card = $('.cards').filter('.active');	      
 	      var Flat_No = card.find('.flat_No').text();
 	      var time = timeIn();
 	      
	      $.ajax({
		    type:"post",
		    url:"processCopy.php",
		    data:"visitor="+id_number+"&Flat_No="+Flat_No+"&time="+time+"&action=search",
		    success:function(data){	
		    
			if ( data == "Not found!" )
			    alert(data);
			else
			    showComment();
		    }
	      }); return false;
   	});
   	
   	$('.existing').click( function () {
	    $('.signCheck').fadeOut(500).hide();
	    $('.advanceSearch').fadeIn(700).show();
   	});
   	
    	$('.new').click( function () { // After clicking the new botton for adding new visitors
	    var card = $('.cards').filter('.active');
	    $('.signUpwrap').hide();
	    $('.smallArrow').hide();
	    card.show();
	    
	    card.transition( { delay: 50 } );
	    card.children().transition( { delay: 50 } );
	    
	    card.transition( { left: '230px', top: '320px'} );
	    card.css( { "width":"728px", "height":"560px" } ); 		
	    
	    $('.containerMine').transition( { delay: 200 } );
	    $('.containerMine').transition( { background: 'url("The Fields.png") no-repeat'} );
	    
	    card.children().eq(1).css({ transformOrigin: '0px 0px' }).transition({ width: '212px', height: '212px', backgroundSize: "212px 212px" });
	    card.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ height: '212px' });
	    card.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ width: '728px' });
	    card.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ height: '560px' });
	    
	    card.transition( { top: "-20px" , delay: 500 }, 700, 'ease-in' );
	    
	    card.find('.info').transition( { opacity: 1, delay: 2500 } );
	    card.find('.sign_up').transition( { opacity: 1, delay: 2800 } );
	    card.find('.emos').hide();
	    card.find('.text').hide();
	    
	    card.transition( { top: "30px" , delay: 300 }, 1000, 'ease-out' );		    
    	});
   	
	
	$('.emos1').click( function () { // takes out the new visitor div
	    $('.yea').children().not('.home, .signUpwrap').fadeOut(500).hide();
	    $('.signUpwrap').toggleClass('active');
	    
	    var index = $(this).parentsUntil('.cards').length;
	    var card = $(this).parentsUntil('.yea').eq( index );
	    
	    card.addClass("active");
	    
	    $(".smallArrow").show();
	    $(".smallArrow").transition( { opacity: .5 },500, 'ease-in' );
	    $(".smallArrow").transition( { opacity: 1 },1500, 'ease-out' );	    
	    return false;
   	});

   	$('.emos2, .imgCap ').click( function() {
	    $('.yea').children().not('.home, .wrap').fadeOut(500).hide();
	    $('.wrap').toggleClass('active');
	    
	    $(".smallArrow").show();
	    $(".smallArrow").transition( { opacity: .5 },500, 'ease-in' );
	    $(".smallArrow").transition( { opacity: 1 },1500, 'ease-out' );
	    
	    return false;
   	});

	$(".visitorBtn").click(function(){
	      
	      var this1 = $(this).parentsUntil(".sign_up").eq(3);
	      var index = $(this).parentsUntil(".smallDown").length;
	      var thisId = $(this).parentsUntil(".cards").eq( index );
	      
	      var name = this1.find(".name").val();
	      var visitor = this1.find(".visitor").val();	      
 	      var tenant = thisId.find('.identity').text();	    
  	      var flat_No = thisId.find('.flat_No').text();
  	      var time = timeIn();
 	      
	      $.ajax({
		  type:"post",
		  url:"processCopy.php",
		  data:"name="+name+"&visitor="+visitor+"&tenant="+tenant+"&Flat_No="+flat_No+"&time="+time+"&action=addVisitor",
		  success:function(data){		    	     
 		    showComment();	      
		  }

	      });	      
	});
	
	$('.dots').on({
 	  click: function () {
 	     var index = $(this).parentsUntil('.box').length;
 	     var box = $(this).parentsUntil('.yea').eq( index );

	     box.siblings().not(".home").transition( { zIndex: -1 } );
	     box.transition({ width: '524px', height: '100px'/*, margin: '10px 0px'*/});	     
 	     box.find(".img2").transition({ opacity: 1, delay: 220 });
 	  }
 	});
 	
 	$('.box').on({
 	  mouseleave: function () {	      
	     $(this).siblings().not(".home").transition( { zIndex: 1 } );
	     $('.home').transition( { zIndex : 2 } );
 	     $(this).transition({ width: '504px', height: '80px', delay: 220/*,margin: '0px'*/});
 	     $(this).find(".img2").transition({ opacity: 0 });
 	  }
        });

       $(".img2").click( function () {
	  var index = $(this).parentsUntil('.box').length;
	  var box = $(this).parentsUntil('.yea').eq( index );
	  
	  box.siblings().transition( { zIndex: 1 } );
	  
 	  box.transition({ width: '504px', height: '80px'});
 	  box.transition({ left: '120px', opacity: 0, delay: 200 },500,'ease-out'); 	  
 	  
 	  var visitorId = box.find("h2").text(); 	  
 	  box.remove();
 	  
 	  var cardLength = $('.cards').length;
	  var boxLength = $('.box').length;
 	  cardBox( cardLength, boxLength );
 	  
 	  $.ajax({
	      type:"post",
	      url:"processCopy.php",
	      data:"visitor="+visitorId+"&action=delete",
	      success:function(data) {		
	      } 
	  });
       });
       
    }

    function timeIn () {
	
	var dt = new Date();
	var time = "";
	if ( dt.getHours() < 10 )
	  time += "0";
	time += dt.getHours() + ":";
	
	if ( dt.getMinutes() < 10 )
	  time += "0";
	time += dt.getMinutes();
	
	return time;
    }
    
    function showComment(){
    
	$.ajax({
	  type:"post",
	  dataType: "json",
	  url:"processCopy.php",
	  data:"action=showcomment", 
	  success:function(data){
 		insertVisitors( data );
 		funcOpp();
 		if ( $('.wrap').hasClass('active') )
		  $('.wrap').toggleClass('active');      
		  
		else if ( $('.signUpwrap').hasClass('active') )
		  $('.signUpwrap').toggleClass('active');      
		      
		$('.yea').children().not('.smallArrow').fadeIn(3000).show();
 		$('.smallArrow').hide();
	  }
	});
    }
    
    function insertVisitors ( data ) {
    
	if ( data.length != $(".box").length ) {
	    var length = data.length - $(".box").length;
	    for ( i = 0; i < length; i++ )
	      $('.yea').append( makeVisitor() );
	}
	
 	for ( i = 0; i < data.length; i++ ) {
 	  $('.box').eq(i).find("h1").text(data[ i ]["name"]);
 	  $('.box').eq(i).find("h2").text(data[ i ]["visitor"]);
 	  $('.box').eq(i).find("h3").text(data[ i ]["time"]); 	 
 	}
    }
    
    function findCard ( data ) {
    
	var length = $('.cards').length;
	var this1 = $('.cards');
	
	for ( i = 0; i < length; i++ )
	    if( this1.eq( i ).find(".identity").text() == data[0][ "tenant" ] ) 
		return i;
    }
    
    function showGrids ( data ) {
//  	$('.cards').transition({delay: 4350 }); // For loop 4 -> delay: 7350, for 2 -> delay: 4350
	 var cardLength = $('.cards').length;
	 var boxLength = $('.box').length;
	 
	 if ( data != null ) {
	    cardLength = data[0].length;	    
	    boxLength = data[1].length;
	    
	    for ( i = 0; i < cardLength ; i++ ) {
		$('.cards').eq(i).find('.lastName').text( data[0][i]['LastName']);
		$('.cards').eq(i).find('.firstName').text( data[0][i]['FirstName']);
		
		$('.cards').eq(i).find('.names').text( data[0][i]['FirstName'] + " " + data[0][i]['LastName'] );
		$('.cards').eq(i).find('.identity').text( data[0][i]['Id'] );
		$('.cards').eq(i).find('.flat_No').text( data[0][i]['Flat_No'] );
	    } 
	    
	    for ( i = 0; i < boxLength; i++  ) {
		$('.box').eq(i).find("h1").text(data[1][ i ]["name"]);
		$('.box').eq(i).find("h2").text(data[1][ i ]["visitor"]);
		$('.box').eq(i).find("h3").text(data[1][ i ]["time"]);
	    }	
	}
	
	
	$(".home").transition( { opacity: .5 },500, 'ease-in' );
	$(".home").transition( { opacity: 1 },1500, 'ease-out' );	
	leftMove( cardLength );
	cardBox( cardLength, boxLength );
    }    
    
    function leftMove( cardLength ) {

	for ( i = 0, pos = 230, num = ""; i < cardLength ; i++, pos += 185 ) {
	    num = ( pos - 10 ) + "px";
	    $('.cards').eq(i).transition( { left: num, opacity: .5 }, 500, 'ease-in' );
	    num = pos + "px";
	    $('.cards').eq(i).transition( { left: num, opacity: 1 },1500, 'ease-out' );
	}    

    }    
    
// 	May be a loading signal, waiting for visitors to display

    function cardBox ( cardLength,boxLength ) {
	var numCard = "100px",
	    numBox, tenantDiv = "300px" ;
	
	if( boxLength > 0 ) {
	    if ( boxLength == 2 ) {
		numCard = "45px";
		numBox = 280;
 		tenantDiv = "245px";
	    }
	    else { // Number of visitors is 1
		numCard = "76px";
		numBox = 311;
 		tenantDiv = "276px";
	    }
	}
	
	$('.tenantDiv').transition( { height: tenantDiv },800,'cubic-bezier(0,0.9,0.3,1)');
	
	for ( i = 0; i < cardLength ; i++ ) {
	    $('.cards').eq(i).transition( { top : numCard }, 500, 'ease-out' );
	}
	
	if( boxLength > 0 ) {
	    
	    $('.box').transition( { delay: 2000} );
	    
	    for ( i = 0, pos = numBox, num = ""; i < boxLength; i++, pos += 81 ) {
 	      num = ( pos - 5 ) + "px";
 	      $('.box').eq( i ).transition( { top: num, opacity: .2 }, 500, 'ease-in' );
 	      num = pos + "px";
 	      $('.box').eq( i ).transition( { top: num, opacity: 1 }, 1500, 'ease-out' );
	    }
	 }
    }
    
    function funcOpp() { // Submit signed In
 	
	var this1 = $('.cards').filter('.active');
	
 	this1.find('.info').transition( { opacity: 0, delay: 1500 } );
 	this1.find('.sign_up').transition( { opacity: 0, delay: 1800 } );

 	this1.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ height: '212px' });
 	this1.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ width: '168px' });
 	this1.children().eq(0).css({ transformOrigin: '0px 0px' }).transition({ height: '224px' });
 	this1.children().eq(1).css({ transformOrigin: '0px 0px' }).transition({ width: '168px', height: '168px' });
 	
 	this1.children().eq(1).transition( { backgroundSize: "168px 168px" } );
 	
 	this1.css( { "width":"168px", "height":"224px" } ); 	
 	this1.transition({ top: '146px'});

 	this1.find('.emos').show();
 	this1.find('.text').show();
 	$(".home").show();

 	$('.containerMine').transition( { delay: 200 } );
 	$('.containerMine').transition( { background: 'url("")'} );
 	this1.siblings().fadeIn();	
 	
 	var cardLength = $('.cards').length;
	var boxLength = $('.box').length;
	
	leftMove( cardLength );
	cardBox( cardLength, boxLength );
	
	this1.removeClass('active');
    }
	
    function makeCard( i, numOfVisitors ) {
      
      return $('<div class="cards">' + 
		    '<div class="pape smallDown lighten-2 waves-effect waves-light">' + 
// 		      '<div class="divider">' +
// 		      '</div>' + 
			'<div class="info">' +
			  '<div class="row"> Name: <div class="names"> Oluwaseeki </div> </div>' +
			  '<div class="row"> ID/Passport: <div class="identity"> A0219485 </div> </div>' +
			  '<div class="row"> Flat No.: <div class="flat_No"> 201 </div> </div>' +
			'</div>' +
			
			'<div class="sign_up pape">'+
			 ' <form action="processCopy.php" method="post">'+
			  '  <fieldset>'+
			   ' <legend>Visitor\'s Info</legend>'+
			    
			    '  <div class="row">'+
				'<div class="input-field col s12">'+
				 '   <input type="text" name="name" class="name"/>'+
				  '  <label for="icon_prefix">'+
				   '   <div>Name</div>'+
				    '</label>'+
				'</div>'+
			      '</div>'+
			      
			      '<div class="row">'+
				'<div class="input-field col s12">'+
				 '   <input type="text" name="visitor" class="visitor" />'+
				  '  <label for="icon_prefix">'+
				'	<div>Visitor\'s Id</div>'+
				 '   </label>'+
				'</div>'+
			      '</div>'+
			      
			      '<div class="row">'+
				'<div class="input-field col s12 button">'+
				 '   <input class="waves-effect waves-light btn blue lighten-2 visitorBtn" type="button" value="Submit">		  '+
				'</div>'+
			      '</div>'+
			      
			    '</fieldset>'+
			     ' <div id="info" />'+
			      '<ul id="comment"></ul>'+
			  '</form>    '+
			'</div>'+
// 			 Sign in as ( New or Existing ) visitor
			'<div class="ripple-effect emos emos1 waves-effect waves-teal btn-flat" data-ripple-color="#82b1ff" data-ripple-limit=".containerMine">' +	 
			    '<img src="Pictures/emos/1454518416_add_user.png"/>' +
			'</div>' +
		      
 			'<div class="ripple-effect emos emos2 waves-effect waves-teal btn-flat">' +	 			    
 			    '<img src="Pictures/emos/ic_info_black_24dp.png"/>' +
 			'</div>' +
 			
 			'<div class="ripple-effect emos emos3 waves-effect waves-teal btn-flat" data-ripple-color="#82b1ff" data-ripple-limit=".containerMine"">' +	 
 			    '<img src="Pictures/emos/ic_aspect_ratio_black_24dp.png"/>' +
 			'</div>' +
		      
		    '</div>' + 
		    '<div class="pape smallTop lighten-2 waves-effect waves-light">' +	   
		      '<div class="text">' +
			'<h5>' + '<span class="lastName">Last Name</span> <br/>' + '</h5>' + 
			'<h6>' + '<span class="firstName">First Name</span>' + '</h6>' +
		    '</div>' + 
		'</div>');
		
		
    }

    function emo2() {
    
    }
    
    function makeVisitor () {
	  return $( '<div class="box pape">' +
 		'<div class="details">' +
 		  '<h1>Oluwaseeki I.J</h1>' +
 		  '<h2>A02197485</h2>' +
 		  '<h3>12:45</h3>' +
 		'</div>' +
	      '<div class="img1">' +
		  '<div class="iconInfo">' +
		      '<img class="imgCap" src="office.jpg" />' +
			'<div class="dots">' +
			  '<span class="first"></span>' +
			  '<span class="second"></span>' +
			  '<span class="third"></span>' +
			'</div>' +
		    '</div>' +		    
		  '<a><img class="img2" src="Pictures/emos/ic_delete_black_18dp.png"></a>' +
	      '</div>'+
 	    '</div>'  
	  );
    }
    
    $('.tenant').click( function () {
    
	var flat_No = $('.tenants').find('.flat_number').val();
	
 	$.ajax({
 	    type:"post",
 	    dataType: "json",
 	    url:"processCopy.php", 	    
 	    data:"Flat_No="+flat_No+"&action=loadPage",
 	    success:function(data){		    	     
	      console.log("response fgrom");
	      console.log( data );
 	      startUp( data );
 	    }
 	});	
	return false;
    });
    
</script>

</body>
</html>
