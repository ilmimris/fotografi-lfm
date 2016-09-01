<footer>
</footer>

<script type="text/javascript">
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 200){ // Set position from top to add class
	        $('.navbar').addClass("scroll");
	    } else {
	        $('.navbar').removeClass("scroll");
	    }
	});
</script>
<script type="text/javascript">
	// makes sure the whole site is loaded
	jQuery(window).load(function() {
	        // will first fade out the loading animation
		jQuery("#status").delay(5000).fadeOut();
	        // will fade out the whole DIV that covers the website.
		jQuery("#preloader").delay(1000).fadeOut("slow");
	})
</script>
<script type="text/javascript">

	$(document).mouseup(function (e)
	{
	    var container = $("#menu");
	    var menu = $(".menu, #menu");

	    if (!menu.is(e.target) // if the target of the click isn't the container...
	        && menu.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut('slow');
	    }
	    else if ($('.menu').click()){container.fadeIn('slow');}
	});

	/* touch device */
	$(document).on('touchstart', function (e)
	{
	    var container = $("#menu");
	    var menu = $(".menu, #menu");

	    if (!menu.is(e.target) // if the target of the click isn't the container...
	        && menu.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        container.fadeOut('slow');
	    }
	    else if ($('.menu').click()){container.fadeIn('slow');}
	});

	$('.mb').click(function(){
	    var id = $(this).attr("rel");

	    if($('#mb').hasClass('mb')){
		   $('.'+id).fadeToggle('slow')
		   $('#mb').removeClass('mb')
		}else{
		   $('.'+id).toggle()
		  $('#mb').addClass('mb')
		}
	});

</script> 
</body>
</html>