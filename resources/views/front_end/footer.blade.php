	
<div class="footer">
	<input type="text" name="text" placeholder="masih dalam pengerjaan">
	<input type="submit" name="submit">

	<div class="container">
		<p> &copy; 2016 Career Builder. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</div>
<!-- //Footer Section -->
<!-- js files -->
<script src="{{ asset ('js/jquery.min.js')}}"></script>
<script src="{{ asset ('js/bootstrap.min.js')}}"></script>

<!-- Scripts For  -->

	<script src="{{ asset ('js/jquery.scrollTo.min.js')}}"></script>

<!--// Scripts For Navbar -->

<!-- Scripts For Gallery Section -->
	<script src="{{ asset ('js/jquery.localScroll.min.js')}}"></script>
	<script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset ('js/common.js')}}"></script>
<!--// Scripts For Gallery Section -->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top,
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>

<!-- /js files -->
<!-- Script For Number Scrolling -->
	<script type="text/javascript" src="{{ asset ('js/numscroller-1.0.js')}}"></script>
		
<!-- //Script For Number Scrolling -->
<script src="{{ asset ('js/responsiveslides.min.js')}}"></script>
			<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append();
						},
						after: function () {
							$('.events').append();
						}
					});				
				});
			</script>