</header>
<div class="container-fluid">
	<div class="row" id="photos">
<?php $i = 0; foreach ($contributors as $contributor) {
	$i++;
?>
		<a id="photo1" href="<?= site_url()?>fotografi/profile/<?=$contributor->id?>">
		<div class="box col-md-3">
		<?php if isset($contributor->foto) {?>
			<img class="photos photos-contributor" src="<?= img_url()."users_profile/_thumb/".$contributor->foto?>"/>
		<?php }
			else {?>
			<img class="photos photos-contributor" src="<?= img_url()?>dummy.jpg"/>
		<?php }?>
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
