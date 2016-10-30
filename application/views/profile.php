</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="profile_pic">
				<img class="photos" src="<?= img_url()."users_profile/_thumb/".$profile->foto?>"/>
				<br>
				<h3><?=$profile->first_name?> <?=$profile->last_name?></h3>
				<h3 style="color:grey;"><?=$profile->jurusan?></h3>
				<div class="socmed">
					<a href="http://instagram.com/instalfm"  target="_blank"><img class="img-center" alt="instagram LFM" src="<?= img_url()?>logo_ig.png"/></a>
					<a href="https://twitter.com/LFM_ITB"  target="_blank"><img class="img-center" alt="Twitter LFM" src="<?= img_url()?>logo_tw.png"/></a>
					<a href="https://issuu.com/fotografilfm/stacks/dba0b7ba35ed438faa01be88fbc50e61"  target="_blank"><img alt="issuu" class="img-center" src="<?= img_url()?>logo_un.png"/></a>
				</div>
			</div>
		</div>
		<div id="profile_photos" class="col-md-5" >
			<div id="photos" class="profile_photos">
				<h2>Photos</h2>
				<div class="scroll">
				<div class="row" style="margin-right: 0.5rem;">
<?php $i = 0; foreach ($photos as $photo) {
	$i++;
?>
					<div class="box col-md-6">
						<img class="photos" src="<?= img_url()."users_content/_thumb/".$photo->photo?>"/>
						<span class="caption fade-caption">
							<h1><?=$photo->title?></h1>
						</span>
					</div>
<?php
	if (($i>0) && ($i%2==0) && (($i+1)<count($photos))) echo "</div><div class=\"row\" style=\"margin-right: 0.5rem;\">";
}
?>
				</div>
				</div>
			</div>
		</div>
		<div id="prev_projects" class="col-md-1" style="display: none;">
			<a href="#">
		      <img class="btn-right btn-profile left " src="<?= img_url()?>chevron.png">
		    </a>
		</div>
		<div id="profile_projects" class="col-md-5" style="display: none;">
			<div class="profile_projects">
				<h2>Projects</h2>
				<div class="scroll">
					<div class="row">
<?php $i = 0; foreach ($projects as $project) {
	$i++;
?>
						<div class="col-md-6 img-projects">
							<img class="photos" src="<?=img_url()."users_content/".$project->photo?>" />
						</div>
						<div class="col-md-6 desc-projects">
							<h1><?=$projects->title?></h1><!-- 
							<h3><?=$projects->year?></h3>
							<h3><?=$projects->description?></h3>
							<h3><?=$projects->group_title?></h3> -->
						</div>
<?php
	if (($i>0) && ($i%2==0) && (($i+1)<count($projects))) echo "</div><div class=\"row\">";
}
?>
					</div>
				</div>
			</div>
		</div>
		<div id="next_photos" class="col-md-1" >
			<a href="#">
		      <img class="btn-right btn-profile right" src="<?= img_url()?>chevron.png">
		    </a>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="showphoto" class="modal">
	<div class="photo-modal-content">
		<div class="col-mod-12">
			<img class="photosmodal" id="modal-photo-image"/>
		</div>
	</div>
	<a id="description" href="#" class="btn-modal">
      <img class="btn-right " src="<?= img_url()?>chevron.png">
    </a>
</div>
<div id="showdescphoto" class="modal">
	<div class="photo-modal-content">
		<div class="col-mod-12">
			<div class="content-desc">
				<h1 id="modal-photo-title"></h1>
				<h2 id="modal-photo-author"></h2>
				<p  id="modal-photo-caption"></p>
				<br>
				<p><span id="modal-photo-other"></span>
				<span id="modal-photo-location"></span>
				<span id="modal-photo-gear"></span>
				</p>				
			</div>
			<a id="up-photo" href="#" class="btn-modal">
		      <img class="btn-right up" src="<?= img_url()?>chevron.png">
		    </a>
		</div>
	</div>
</div>

<script>
(function(){
	//Get the modal

	var profile_photos = document.getElementById('profile_photos');
	var profile_projects = document.getElementById('profile_projects');

	// Get the button that opens the modal
	var prev_projects = document.getElementById("prev_projects");
	var next_photos = document.getElementById("next_photos");

	// When the user clicks on the button, open the modal
	next_photos.onclick = function(){
		$('#profile_photos').css("display","none");
		$('#profile_projects').css("display", "block");
		$("#next_photos").modal();
		$('#next_photos').css("display", "none");
		$('#prev_projects').css("display", "block");
	}
	prev_projects.onclick = function(){
		$('#profile_photos').css("display","block");
		$('#profile_projects').css("display", "none");
		$("#next_photos").modal();
		$('#next_photos').css("display", "block");
		$('#prev_projects').css("display", "none");
	}
}());

</script>