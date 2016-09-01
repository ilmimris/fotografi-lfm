<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
</header>

<!-- Photo of The Month -->
<div id="footer">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-6 col-md-8 col-lg-8" id="info">
				<p>F     e     b     r     u     a     r     y</p>
				<p>P     h     o     t     o&ensp;&ensp;o     f&ensp;&ensp;T     h     e&ensp;&ensp;M     o     n     t     h</p>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4">
				<ul  class="menu-bawah">
					<?php if ($islogin == 0) {?>
					<li><a href="auth/login" class="m-b">L     o     g     -     i     n</a></li>
					<li><a href="#" class="m-b">R     e     g     i     s     t     e     r</a></li>
					<?php } else {?>
					<li><a href="auth/logout" class="m-b">L     o     g     -     o     u     t</a></li>
					<?php } ?>
					<li><a href="#" id="mb" class="mb" rel="m-b" >.&ensp;.&ensp;.</a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	  $.backstretch([
	      "<?= img_url()?>gambar1.jpg"
	    , "<?= img_url()?>gambar2.jpg"
	    , "<?= img_url()?>gambar3.jpg"
	  ], {duration: 10000, fade: 750});
</script>
	