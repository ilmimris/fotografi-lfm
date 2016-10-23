</header>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="dk">
<?php $i = 0; foreach ($dks as $dk) {
	$i++;
?>
				<div class="inline img-dk"><a href="#" class="btn-dk-desc" style="text-decoration: none;"><img style="height: 410px;width: 230px;" src="<?= img_url().'users_content/'.$dk->cover?>"><h4 class="dk-month"><?= $dk->month ?></h4><h4 class="dk-title"><?= $dk->title ?></h4></a></div>
<?php }?>
			</div>
		</div>
	</div>
</div>

<!-- Modal Goes Here -->
<div id="dk-showdescmodal" class="modal dk-showmodal">
	<div class="col-md-offset-1 col-md-10 dk-modal">
		<div id="showdesc" class="dk-content-desc content-desc">
			<h1><u>Dul Juduldul</u></h1>
			<p>
			Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

			The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
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
				<a id="photo1" href="#sesuatu" data-toggle="modal" data-target="#showphoto"><div class="box col-md-offset-1 col-md-5">
					<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 1</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div></a>
				<div class="box col-md-5">
					<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 2</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
			</div>
			<div class="row" id="photos">	
				<div class="col-md-offset-1 box col-md-5">
					<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 4 </h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-5">
					<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 5</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
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
				<a href="#" onclick="open_detail.call(this)" data-id="<?=$photo->id?>">
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 1</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div></a>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 2</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 4 </h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 5</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
			</div>
			<div class="row dk-all" id="photos">	
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 4 </h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 5</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<a href="#sesuatu"><div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 1</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div></a>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 2</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
			</div>
			<div class="row dk-all" id="photos">
				<a href="#sesuatu" ><div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 1</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div></a>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 2</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 4 </h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 5</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
			</div>
			<div class="row dk-all" id="photos">	
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 4 </h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 5</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
				<a href="#sesuatu" ><div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 1</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div></a>
				<div class="box col-md-3">
					<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
					<span class="caption fade-caption">
						<h1>Judul 2</h1>
						<h4>Nama Seseorang</h4>
					</span>
				</div>
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

	//up.onclick = function() {
	//    modal.style.display = "block";
	//	showdesc.style.display = "none";
	//}

	// When the user clicks anywhere outside of the modal, close it


}());

function open_detail(){
	var img_root = "<?=img_url()?>";
	var id = $(this).attr('data-id');
	
	$.get( "/fotografi/photo_detail/" + id , function( data ) {
		console.log( data );

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