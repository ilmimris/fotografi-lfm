</div>
</header>
<div class="container">
	<div class="row" id="about">
		<div class="col-md-1"></div>
		<div class="col-md-10 judul">
		  	<?php foreach ($konten as $k):?>
		  			<?php if ($k->halaman == "about") {?>
						<h1><?= $k->judul_konten;?></h1>
						<?= $k->konten;?>
					<?php }?>
			<?php endforeach; ?>
		</div>

	</div>
</div>