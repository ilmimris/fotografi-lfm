</header>
<div class="container-fluid">
		<!--
	<div class="inline slick-arrow" style="display: block;"><img src="http://localhost/foto/assets//img/chevron.png" class="dk-prev"></div>
		-->
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="dk">
				<div class="inline img-dk"><img src="<?= img_url()?>dk1.jpg"><h4 class="dk-month">Juni 2016</h4><h4 class="dk-title">Solitude</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk2.jpg"><h4 class="dk-month">Juli 2016</h4><h4 class="dk-title">Kembara</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk3.jpg"><h4 class="dk-month">Sept 2016</h4><h4 class="dk-title">Motions</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk4.jpg"><h4 class="dk-month">Aug 2016</h4><h4 class="dk-title">Sesuatu</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk2.jpg"><h4 class="dk-month">Des 2016</h4><h4 class="dk-title">Lorem</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk4.jpg"><h4 class="dk-month">Nov 2016</h4><h4 class="dk-title">Ipsum</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk3.jpg"><h4 class="dk-month">Feb 2016</h4><h4 class="dk-title">Dolor</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk1.jpg"><h4 class="dk-month">Des 2016</h4><h4 class="dk-title">Sitiec</h4></div>
			</div>
		</div>
	</div>
		<!--
	<div class="inline slick-arrow" style="display: block;"><img src="http://localhost/foto/assets//img/chevron.png" class="dk-next"></div>
		-->
</div>
<script>
	$(document).ready(function(){
	 $('.dk').slick({
		    slidesToShow: 4,
		    slidesToScroll: 2,
		    arrows: true,
		    dots: false,
		    prevArrow: '<div class="control" style="left:10%;"><img src="<?=asset_url()?>/img/chevron.png" class="dk-prev"></div>',
		    nextArrow: '<div class="control" style="right:10%;"><img src="<?=asset_url()?>/img/chevron.png" class="dk-next"></div>'
	  });
	});
</script>
<!--
-->