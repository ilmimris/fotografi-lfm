</header>
<div class="container-fluid">
<div class="row contributor" id="photos">
	<div class="row" id="photos">
<?php $i = 0; foreach ($contributors as $contributor) {
	$i++;
?>
		<a href="<?= site_url()?>fotografi/profile/<?=$contributor->id?>">
		<div class="box col-md-3">
			<img class="photos photos-contributor" src="<?= img_url().$contributor->photo?>"/>
			<span class="caption fade-caption photos-contributor ">
				<h2><?=$contributor->first_name?></h2>
			</span>
		</div>
		</a>

<?php
	if (($i>0) && ($i%3==0) && (($i+1)<count($photos))) echo "</div><div class=\"row\" id=\"photos\">";
}
?>
 	</div>
</div>
</div>
