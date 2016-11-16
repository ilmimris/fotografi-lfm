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
					<a href="http://instagram.com/<?=$profile->instagram?>"  target="_blank"><img class="img-center" alt="instagram LFM" src="<?= img_url()?>logo_ig.png"/></a>
					<a href="https://issuu.com/<?=$profile->issuu?>"  target="_blank"><img alt="issuu" class="img-center" src="<?= img_url()?>logo_un.png"/></a>
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
<?php foreach ($projects as $project) { ?>
					<div class="row">
						<div class="col-md-6 img-projects">
							<img class="photos" src="<?=img_url()."users_content/".$project->photo?>" />
						</div>
						<div class="col-md-6 desc-projects">
							<h1><?=$project->title?></h1>
						</div>
					</div>
<?php } ?>
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

	var modal = document.getElementById('showphoto');
	var showdesc = document.getElementById('showdescphoto');
	
	if ($("#btn-addphoto").length) {
		$("#btn-addphoto").click(function(){
			$('#input-photo-progress').css("display","none");
			$('#input-photo-form').css("display", "block");
			$("#addphoto").modal('show');
		});
	}

	$("#description").click(function(){
		$("#showdescphoto").modal('show');
		$("#showphoto").modal('hide');
	});
	$("#up-photo").click(function() {
		$("#showdescphoto").modal('hide');
		$("#showphoto").modal('show');
	});

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == showdesc) {
	    
	        $('#showphoto').modal('hide');
	    
	    } else if (event.target == showdesc) {
	    
	        $('#showphoto').modal('hide');
	    
	    }
	}
	$('#showphoto').bind('mousewheel', function(e) {
	    if(e.originalEvent.wheelDelta / 100 > 0) {
	        // $('#showphoto').modal('hide');
	    } else {
	        $("#description").click();
	    }
	});
	$('#showdescphoto').bind('mousewheel', function(e) {
	    if(e.originalEvent.wheelDelta / 100 > 0) {
	        $("#up-photo").click();
	    } else {
	        // $("#description").click();
	    }
	});

}());

function open_detail(){
	var img_root = "<?=img_url()?>";
	var id = $(this).attr('data-id');
	
	$.get( "/fotografi/photo_detail/" + id , function( data ) {
		console.log( data );

		photo = JSON.parse(data);
		$("#modal-photo-image").attr("src",img_root + "users_content/" + photo.photo);
		$('#modal-photo-title').html(photo.title);
		$('#modal-photo-author').html(photo.author);
		$('#modal-photo-caption').html(photo.caption);
		$('#modal-photo-gear').html(photo.gear);
		$('#modal-photo-other').html(photo.other);
		$('#modal-photo-location').html(photo.location);

		$('#showphoto').modal('hide');
		$('#showphoto').modal('show');
	});
}


</script>