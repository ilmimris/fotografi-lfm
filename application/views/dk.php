</header>
<div class="container-fluid">
		<!--
	<div class="inline slick-arrow" style="display: block;"><img src="http://localhost/foto/assets//img/chevron.png" class="dk-prev"></div>
		-->
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="dk">
				<div class="inline img-dk"><a class="btn-dk-desc" href="#" data-toggle="modal" data-target="#dk-showdescmodal" style="text-decoration: none;"><img src="<?= img_url()?>dk1.jpg"><h4 class="dk-month">Juni 2016</h4><h4 class="dk-title">Solitude</h4></a></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk2.jpg"><h4 class="dk-month">Juli 2016</h4><h4 class="dk-title">Kembara</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk3.jpg"><h4 class="dk-month">Sept 2016</h4><h4 class="dk-title">Motions</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk4.jpg"><h4 class="dk-month">Aug 2016</h4><h4 class="dk-title">Sesuatu</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk2.jpg"><h4 class="dk-month">Des 2016</h4><h4 class="dk-title">Lorem</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk4.jpg"><h4 class="dk-month">Nov 2016</h4><h4 class="dk-title">Ipsum</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk3.jpg"><h4 class="dk-month">Feb 2016</h4><h4 class="dk-title">Dolor</h4></div>
				<div class="inline img-dk"><img src="<?= img_url()?>dk1.jpg"><h4 class="dk-month">Des 2016</h4><h4 class="dk-title">Sitiec</h4></div>
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
			<a class="btn-dk-elite" href="#" data-toggle="modal" data-target="#dk-showelitemodal">
		      <img class="img-center" src="<?= img_url()?>chevron.png">
		    </a>
		</div>
	</div>
</div>
<div id="dk-showelitemodal" class="modal dk-showmodal">
	<div class="col-md-offset-1 col-md-10 dk-modal">
		<div id="showdesc" class="dk-content-desc content-desc dk-content-elite">
			<div class="socmed up">
				<a class="btn-dk-desc" href="#" data-toggle="modal" data-target="#dk-showdescmodal">
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
				<a class="btn-dk-all" href="#" data-toggle="modal" data-target="#dk-showallmodal"">
			      <img class="img-center" src="<?= img_url()?>chevron.png">
			    </a>
			</div>			
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
	var desc = document.getElementByClass("btn-dk-desc");
	var elite = document.getElementByClass("btn-dk-elite");
	//var add = document.getElementById("btn-addphoto");

	// When the user clicks on the button, open the modal
	//add.onclick = function(){
	//	$('#input-photo-progress').css("display","none");
	//	$('#input-photo-form').css("display", "block");
	//	$("#addphoto").modal();
	//}

	desc.onclick = function(){
	    modal.style.display = "block";
		dkelite.style.display = "none";
	}

	elite.onclick = function(){
	    modal.style.display = "none";
		dkelite.style.display = "block";
	}

	//up.onclick = function() {
	//    modal.style.display = "block";
	//	showdesc.style.display = "none";
	//}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == dkelite) {
	        modal.style.display = "none";
	        //showdesc.style.display = "none";
	    }
	    //else if(event.target == addphoto){
	    //	addphoto.style.display = "none";
	    //}
	}

}());
</script>
<!--
-->