</header>
<div class="container-fluid">
	<!--<div class="row" id="photos">
		<img class="photos" src="<?= img_url()?>gambar1.jpg">
		<img class="photos" src="<?= img_url()?>gambar2.jpg">
		<img class="photos" src="<?= img_url()?>gambar3.jpg">
		<img class="photos" src="<?= img_url()?>gambar4.jpg">
		<img class="photos" src="<?= img_url()?>gambar5.jpg">
		<img class="photos" src="<?= img_url()?>gambar6.jpg">
		<img class="photos" src="<?= img_url()?>gambar8.jpg">
		<img class="photos" src="<?= img_url()?>gambar9.jpg">
		<img class="photos" src="<?= img_url()?>gambar7.jpg">
	</div>-->
	<div class="row" id="photos">
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar3.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 4 </h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 5</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar6.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 6</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar7.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 7</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar8.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 8</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
		<div class="box">
			<img class="photos" src="<?= img_url()?>gambar9.jpg"/>
			<span class="caption fade-caption">
				<h3>Fade Caption 9</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
				sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
			</span>
		</div>
	</div>
</div>
<!--  Menu Bawah Photos -->
<div id="menu-photos">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-12 col-md-12 ">
				<a href="#">
			      <img class="upload btn-left" src="<?= img_url()?>plus.png">
			    </a>
			    <a href="#">
			      <img class="idunno btn-right" src="<?= img_url()?>chevron.png">
			    </a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var $grid = $('#photos').isotope({
	  layoutMode: 'fitRows',
	  //cellsByRow: {columnWidth: '.grid-sizer', rowHeight: '.grid-sizer'},
	  fitRows: {},
	  itemSelector: '.photos',
	  percentPosition: true
	});
	//$grid.imagesLoaded().progress( function() {$grid.isotope('layout'); }); 
</script>