    function makeCard( data, divNo ) {	
	return $("<div class='newDivs'><div class='card medium'><a href='#' onclick='gainFocus(" + divNo + ")'><div class='card-image waves-effect waves-block waves-blue darken-4'><img src='user.jpg' width='150' height='200'></div></a><div class='card-content'><span class='card-title activator grey-text text-darken-4'>Card Title<i class='material-icons right'>more_vert</i></span><p><a href='#'>This is a link</a></p></div><div class='card-reveal z-depth-1-half'><span class='card-title grey-text text-darken-4'>Card Title<i class='material-icons right'>close</i></span><p>Here is some more information about this product that is only revealed once clicked on.</p></div></div></div>");
    }

    function moveDiv( data ) {

	for ( i = 1; i <= data.length; i++)
	    $(".cards").append(makeCard(data,i)); 
	
// 	for ( i = 0; i < data.length; i++)
// 	    $(".card-image img").eq(i).attr( "src", data[i]["Images"] );
	
	//Scale main div into something smaller
// 	$('.cards').transition({ delay : 1000 });
	$('.cards').transition({ scale: [0.65,0.55] },1000, 'ease-out');
	
	//Moves main div to its final position
	$('.cards').transition({ x: -700, y: -10 },500,'ease-out');
	
	//Hides it 
	$('.cards').children().eq(0).hide();
	
	//Splits its kids and move them to their final position		
 	for ( i = 1, x_ = 460, delay_ = 1500; 
	     i < data.length;
	     i += 1, x_ += 460, delay_ += 1500) {
 	  
//  	    $('.cards').children().eq(i).transition({delay:250});	
	    $('.cards').children().eq(i).transition({ x: x_- 15 ,delay:1500});
	    $('.cards').children().eq(i).transition({ x: x_},200,'ease-out');
 	}	
    }
    
    function gainFocus( divNo ) {
     
//      Removing gainFocus class Exception
	for ( i = 1; i <= 4; i++ ) {
	    if ($('.cards').children().eq(i).hasClass("gainFocus")) {
	      
	      if ( i == 4 ) {		    
		  $(".gainFocus").transition({ scale: [0.8,0.8] },500,'ease');
		  $(".gainFocus").transition({ x : 0, y : 200 },1000,'ease');
		  $('.cards').children().eq(4).removeClass("gainFocus");
		  
	      } else if ( i == 3 ) {		    
		  $(".gainFocus").transition({ scale: [0.8,0.8] },500,'ease');
		  $(".gainFocus").transition({ x : 1380, y : 200 },1000,'ease');
		  $('.cards').children().eq(3).removeClass("gainFocus");
	      } else 
		  $(".gainFocus").transition({ scale: [0.8,0.8] },500,'ease');
	      $('.cards').children().eq(i).removeClass("gainFocus");
	    }
	}
// 	Add classes	
	for ( i = 1; i <= 4; i++ )
	    if ( divNo != i )
		$('.cards').children().eq(i).addClass("loseFocus");	
  	$('.cards').children().eq(divNo).addClass("gainFocus");
	    
// 	LoseFocus Animation
	$(".loseFocus").transition({ y : 150 },1000,'ease');	
	for ( i = 0; i <= 3; i++ ){
	    $(".loseFocus").eq(i).transition({ scale: [0.8,0.8] },500,'sharp');	
	    $(".loseFocus").css("box-shadow","0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15)");
	}
	
	$(".loseFocus").fadeIn();
	
// 	GainFocus Animation
	if ( divNo == 3 ) 
	    $(".gainFocus").transition({ x : 1280, y : 200 },500,'ease');		
	else if ( divNo == 4)
	    $(".gainFocus").transition({ x : 150, y : 200 },500,'ease');
	else
	    $(".gainFocus").transition({ y : 200 },500,'ease');
	
	$(".gainFocus").transition({ scale: [1.8,1.8] },1000, 'ease');
	$(".gainFocus").css("box-shadow","0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22)");

// 	Removing classes
	for ( i = 1; i <= 4; i++ )		
	    if ( divNo != i )
		$('.cards').children().eq(i).removeClass("loseFocus");	    
    }
    
    function startUp() {
       
      $( "document" ).ready( 
	    
	    function() {	      	      
		$(".js-ajax-php-json").submit(		  
		    function() {	      
		        
			var data = { "action": "test" };
			data = $(this).serialize() + "&" + $.param(data);
// 			alert("Hello1");
			$.ajax({
			type: "POST",
			dataType: "json",
			url: "formHandling.php", //Relative or absolute path to response.php file
			data: data,
			success: 
			    function(data) {
			      console.log("response fgrom");
			      console.log(data);
				moveDiv(data);
 				$(".the-return").html(
 				"Favorite beverage: " + data[1]["FirstName"]
 				);
			    } });
			return false;
		    });
	    });
      }
