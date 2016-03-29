<footer class="footer-container footer">
      <div class="container text-center">
         <div class="col-lg-12">
      		<div class="col-md-4">
      			<p><b>Address</b><p>
      			<p><span class = "glyphicon glyphicon-map-marker"></span> G/F Unit 14, East of Galleria, Topaz Road, Ortigas Center, Pasig City PH</p>
      		</div>
      		<div class="col-md-4">
        		<p><b>Email</b><p>
        		<p><span class = "glyphicon glyphicon-envelope"></span> ipostmo@gmail.com</p>
      		</div>
      		<div class="col-md-4">
		        <p><a href = "/what-is-ipostmo.html">What is iPostmo</a><p>
		        <p><a href = "/terms-of-services.html">Terms of Services</a><p>
		        <p><a href = "/privacy-policy.html">Privacy Policy</a><p>
      		</div>
    	</div>
      	<div class="col-md-12">
      		<p class = "text-center">© Copyright 2016 All Rights Reserved - Ipostmo Philippines</p>
      	</div>
  	  </div>
	</footer>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/datepicker.js"></script>
<script type="text/javascript" src="js/imgLiquid.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
<script>
$(document).ready(function(){
	//FOR NAVBAR HOVER
	$('ul.nav li.dropdown').hover(function(){
	  $('.dropdown-menu', this).fadeIn();
	      }, function(){
	        $('.dropdown-menu', this).fadeIn('fast');
	        $('.dropdown-menu', this).fadeOut(100);
	});


	$('#datepicker').datepicker();
		$('.birthdate').on('change', function(){
	   		$('.datepicker').hide();
	});
	$(".imgLiquidFill").imgLiquid({fill:false});
	$('.banner-slider').slick({
		slidesToShow: 1,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 3000,
		fade: true,
		focusOnSelect: true,
		dots: false
	});	
});
</script>
