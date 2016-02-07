<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us!</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

  </head>
  <body>

        <!--Top static navbar.-->
	      <?php include_once('topNav.php');?>
        <!--/Top static navbar-->
   <div class="row">   
        <!-- Header -->
          <?php include_once('header.php'); ?>
        <!-- /Header -->
   </div> 
<!--Main content -->
<div class="row" id="mainContent">
<!--parallax 1 -->
<div id="aboutP" class="row">
    <section class="bg-1 text-center">
     <div id="aboutCaption">
      <h1 style="padding-top: 1.5em;">Invest in your future!</h1>
        <br>
      <p class="lead">Sign up for our newsletter to learn more!</p>
         <br>
        <button class="btn-primary btn-lg"><div></div>Subscribe!</button>
     </div>
    </section>
    </div>
    
    <div class="row" id="aboutMainContent">
    </div>
</div>     
<!-- /Main content -->
<!-- Footer -->
<?php include_once('footer.php'); ?>
<!-- /Footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
(function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    }
}(jQuery));

$('.bg-1').parallax({
	speed :	0.25
});       
</script>
      
  </body>
</html>