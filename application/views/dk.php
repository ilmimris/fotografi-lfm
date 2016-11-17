</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="dk">
<?php $i = 0; foreach ($dks as $dk) {
	$i++;
?>
				<div class="inline img-dk"><a href="#" onclick="open_detail_dk.call(this)" class="btn-dk-desc" style="text-decoration: none;" data-id="<?=$dk->id?>"><img style="height: 410px;width: 230px;" src="<?= img_url().'users_content/'.$dk->cover?>"><h4 class="dk-month"><?= $dk->month ?></h4><h4 class="dk-title"><?= $dk->title ?></h4></a></div>
<?php }?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Goes Here -->
<div id="dk-showdescmodal" class="modal dk-showmodal">
	<div class="col-md-offset-1 col-md-10 dk-modal">
		<div id="showdesc" class="dk-content-desc content-desc">
			<h1><u id="dk-modal-title"></u></h1>
			<p id="dk-modal-description">
			</p>			
		</div>
		<div class="dk-btn socmed">
			<a class="btn-dk-elite" href="#">
		      <img class="img-center" src="<?= img_url()?>chevron.png">
		    </a>
		</div>
	</div>
</div>
<div id="dk-showelitemodal" class="modal dk-showmodal">
	<div class="col-md-offset-1 col-md-10 dk-modal">
		<div id="showdesc" class="dk-content-desc content-desc dk-content-elite">
			<div class="socmed up">
				<a class="btn-dk-desc" href="#">
			      <img class="img-center" src="<?= img_url()?>chevron.png">
			    </a>
			</div>
			<div class="row" id="photos">
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-elite1">
				<div class="box col-md-offset-1 col-md-5">
					<img class="photos" id="dk-modal-image-elite1" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-elite1"></h1>
						<h4 id="dk-modal-caption-photo-elite1"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-elite2">
				<div class="box col-md-5">
					<img class="photos" id="dk-modal-image-elite2" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-elite2"></h1>
						<h4 id="dk-modal-caption-photo-elite2"></h4>
					</span>
				</div>
				</a>
			</div>
			<div class="row" id="photos">	
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-elite3">
				<div class="col-md-offset-1 box col-md-5">
					<img class="photos" id="dk-modal-image-elite3" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-elite3"></h1>
						<h4 id="dk-modal-caption-photo-elite3"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-elite4">
				<div class="box col-md-5">
					<img class="photos" id="dk-modal-image-elite4" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-elite4"></h1>
						<h4 id="dk-modal-caption-photo-elite4"></h4>
					</span>
				</div>
				</a>
			</div>
			<div class="socmed">
				<a class="btn-dk-all" href="#">
			      <img class="img-center" src="<?= img_url()?>chevron.png">
			    </a>
			</div>			
		</div>
	</div>
</div>
<div id="dk-showallmodal" class="modal dk-showmodal">
	<div class="col-md-offset-1 col-md-10 dk-modal">
		<div id="showdesc" class="dk-content-desc content-desc dk-content-elite">
			<div class="socmed up" style="margin-top: -3%;">
				<a class="btn-dk-elite" href="#">
			      <img class="img-center" src="<?= img_url()?>chevron.png">
			    </a>
			</div>
			<div class="row dk-all" id="photos">
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all1">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all1" src="<?= img_url()?>chevron.png"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all1"></h1>
						<h4 id="dk-modal-caption-photo-all1"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all2">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all2" src="<?= img_url()?>chevron.png"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all2"></h1>
						<h4 id="dk-modal-caption-photo-all2"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all3">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all3" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all3"></h1>
						<h4 id="dk-modal-caption-photo-all3"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all4">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all4" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all4"></h1>
						<h4 id="dk-modal-caption-photo-all4"></h4>
					</span>
				</div>
				</a>
			</div>
			<div class="row dk-all" id="photos">	
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all5">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all5" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all5"></h1>
						<h4 id="dk-modal-caption-photo-all5"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all6">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all6" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all6"></h1>
						<h4 id="dk-modal-caption-photo-all6"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all7">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all7" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all7"></h1>
						<h4 id="dk-modal-caption-photo-all7"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all8">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all8" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all8"></h1>
						<h4 id="dk-modal-caption-photo-all8"></h4>
					</span>
				</div>
				</a>
			</div>
			<div class="row dk-all" id="photos">
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all9">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all9" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all9"></h1>
						<h4 id="dk-modal-caption-photo-all9"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all10">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all10" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all10"></h1>
						<h4 id="dk-modal-caption-photo-all10"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all11">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all11" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all11"></h1>
						<h4 id="dk-modal-caption-photo-all11"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all12">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all12" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all12"></h1>
						<h4 id="dk-modal-caption-photo-all12"></h4>
					</span>
				</div>
				</a>
			</div>
			<div class="row dk-all" id="photos">	
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all13">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all13" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all13"></h1>
						<h4 id="dk-modal-caption-photo-all13"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all14">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all14" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all14"></h1>
						<h4 id="dk-modal-caption-photo-all14"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all15">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all15" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all15"></h1>
						<h4 id="dk-modal-caption-photo-all15"></h4>
					</span>
				</div>
				</a>
				<a href="#" onclick="open_detail.call(this)" id="dk-modal-link-all16">
				<div class="box col-md-3">
					<img class="photos" id="dk-modal-image-all16" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1 id="dk-modal-title-photo-all16"></h1>
						<h4 id="dk-modal-caption-photo-all16"></h4>
					</span>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
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
	$(document).ready(function(){
	 $('.dk').slick({
		    slidesToShow: 4,
		    slidesToScroll: 2,
		    arrows: true,
		    dots: false,
		    infinite: false,
		    prevArrow: '<div class="control" style="left:10%;"><img src="<?=asset_url()?>/img/chevron.png" class="dk-prev"></div>',
		    nextArrow: '<div class="control" style="right:10%;"><img src="<?=asset_url()?>/img/chevron.png" class="dk-next"></div>'
	  });
	});
</script>
<script>
	(function(){
	//Get the modal

	var modal = document.getElementById('dk-showdescmodal');
	var dkelite = document.getElementById('dk-showelitemodal');
	//var	addphoto = document.getElementById('addphoto');

	// Get the button that opens the modal
	//var add = document.getElementById("btn-addphoto");

	// When the user clicks on the button, open the modal
	//add.onclick = function(){
	//	$('#input-photo-progress').css("display","none");
	//	$('#input-photo-form').css("display", "block");
	//	$("#addphoto").modal();
	//}

	$("#description").click(function(){
		$("#showdescphoto").modal('show');
		$("#showphoto").modal('hide');
	});
	$("#up-photo").click(function() {
		$("#showdescphoto").modal('hide');
		$("#showphoto").modal('show');
	});


	$('.btn-dk-desc').click(function(){

		//cleanup
		$("#dk-showdescmodal").modal('hide');
		$("#dk-showelitemodal").modal('hide');
		$("#dk-showallmodal").modal('hide');

		$("#dk-showdescmodal").modal('show');
	});

	$('.btn-dk-elite').click(function(){
		//cleanup
		$("#dk-showdescmodal").modal('hide');
		$("#dk-showelitemodal").modal('hide');
		$("#dk-showallmodal").modal('hide');

		$("#dk-showelitemodal").modal('show');
	});

	$('.btn-dk-all').click(function(){
		//cleanup
		$("#dk-showdescmodal").modal('hide');
		$("#dk-showelitemodal").modal('hide');
		$("#dk-showallmodal").modal('hide');

		$("#dk-showallmodal").modal('show');
	});

	$('#dk-showdescmodal').bind('mousewheel', function(e) {
	    if(e.originalEvent.wheelDelta / 150 > 0) {
	        $("#dk-showdescmodal").modal('hide');
	    } else {
	        $('.btn-dk-elite').click();
	    }
	});
	$('#dk-showelitemodal').bind('mousewheel', function(e) {
	    if(e.originalEvent.wheelDelta / 150 > 0) {
	        $('.btn-dk-desc').click();
	    } else {
	        $('.btn-dk-all').click();
	    }
	});
	$('#dk-showallmodal').bind('mousewheel', function(e) {
	    if(e.originalEvent.wheelDelta / 150 > 0) {
	        $('.btn-dk-elite').click();
	    }
	});
	//up.onclick = function() {
	//    modal.style.display = "block";
	//	showdesc.style.display = "none";
	//}

	// When the user clicks anywhere outside of the modal, close it


}());

function open_detail_dk(){
	var img_root = "<?=img_url()?>";

	var id = $(this).attr('data-id');
	var photos_key = ["elite1","elite2","elite3","elite4","all1","all2","all3","all4","all5","all6","all7","all8","all9","all10","all11","all12","all13","all14","all15","all16"];
	$.get( "/fotografi/dk_detail/" + id , function( data ) {
		console.log( data );

		dk = JSON.parse(data);
		$('#dk-modal-title').html(dk.title);
		$('#dk-modal-description').html(dk.description);

		for (var i = photos_key.length - 1; i >= 0; i--) {
			var photo = dk.photos[photos_key[i]];
			$('#dk-modal-title-photo-'+photos_key[i]).html(photo.title);
			$('#dk-modal-caption-photo-'+photos_key[i]).html(photo.caption);
			$('#dk-modal-link-'+photos_key[i]).attr("data-id", photo.id);
			$('#dk-modal-image-'+photos_key[i]).attr("src", img_root + "users_content/_thumb/" + photo.photo);
		}
		
		$('#showphoto').modal('hide');
		$('#showphoto').modal('dk');
	});
}

function open_detail(){
	var img_root = "<?=img_url()?>";
	var id = $(this).attr('data-id');
	
	$.get( "/fotografi/photo_detail/" + id , function( data ) {
		console.log( data );
		console.log( "open detail photo of " + id + "..." );

		photo = JSON.parse(data);
		$("#modal-photo-image").attr("src",img_root + "users_content/" + photo.photo);
		$('#modal-photo-title').html(photo.title);
		$('#modal-photo-caption').html(photo.caption);
		$('#modal-photo-gear').html(photo.gear);
		$('#modal-photo-other').html(photo.other);
		$('#modal-photo-location').html(photo.location);

		$('#showphoto').modal('hide');
		$('#showphoto').modal();
	});
}

</script>
<!--
-->