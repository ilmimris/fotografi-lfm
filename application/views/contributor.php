</header>
<div class="container-fluid">
	<div class="row" id="photos">
<?php $i = 0; foreach ($contributors as $contributor) {
	$i++;
?>
		<a id="photo1" href="<?= site_url()?>fotografi/profile/">
		<div class="box col-md-3">
			<img class="photos photos-contributor" src="<?= img_url().$contributor->foto?>"/>
			<span class="caption fade-caption photos-contributor">
				<h2><?=$contributor->first_name?> <?=$contributor->last_name?></h2>
			</span>
		</div>
		</a>

<?php
	if (($i>0) && ($i%4==0) && (($i+1)<count($photos))) echo "</div><div class=\"row\" id=\"photos\">";
}
?>
 	</div>
</div>
</div>
