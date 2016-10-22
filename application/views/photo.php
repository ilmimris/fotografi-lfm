</header>
<div class="container-fluid">
		<!-- <a id="photo1" href="#sesuatu" data-toggle="modal" data-target="#showphoto"><div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 1</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		</a> -->
	<div class="row" id="photos">
<?php $i = 0; foreach ($photos as $photo) {
	$i++;
	if (($i>0) && ($i%3==0) && (($i+1)<count($photos))) echo "</div><div class=\"row\" id=\"photos\">";
?>
		<a href="#" onclick="open_detail.call(this)" data-id="<?=$photo->id?>">
		<div class="box col-md-4">
			<img class="photos" src="<?=img_url().$photo->photo?>"/>
			<span class="caption fade-caption">
				<h1><?=$photo->title?></h1>
				<h4><?=$photo->caption?></h4>
			</span>
		</div>
		</a>

<?php } ?>
	</div>
</div>
<!--  Menu Bawah Photos -->
<div id="menu-photos">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-12 col-md-12 ">
				<a id="btn-addphoto" href="#">
			      <img class="upload btn-left" src="<?= img_url()?>plus.png">
			    </a>
			    <a href="#">
			      <img class="btn-right" src="<?= img_url()?>chevron.png">
			    </a>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="showphoto" class="modal">
	<div class="photo-modal-content">
		<div class="col-mod-12">
			<img class="photosmodal" src="<?= img_url()?>gambar1.jpg"/>
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
				<h1 id="modal-photo-title">Dul Juduldul</h1>
				<h2 id="modal-photo-author">Nama Seseorang</h2>
				<p  id="modal-photo-caption">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

					The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>
				<br>
				<p><span id="modal-photo-other">29 Februari 2016</span>
				<span id="modal-photo-location">Stone Garden, Padalarang</span>
				<span id="modal-photo-gear">Nikon FM2 + Kodak Ektar 100</span>
				</p>				
			</div>
			<a id="up-photo" href="#" class="btn-modal">
		      <img class="btn-right up" src="<?= img_url()?>chevron.png">
		    </a>
		</div>
	</div>
</div>
<div id="addphoto" class="modal">
	<div class="modal-content">
		<form class = "form-horizontal addphoto" role="form">
		<div class="col-md-6">
		      <label for = "title" class = "control-label title">T&ensp;i&ensp;t&ensp;l&ensp;e</label>
			  <input name="title" class="form-control" placeholder="Title" type="text" required="required" autofocus>
		      <label for = "caption" class = "control-label title">C&ensp;a&ensp;p&ensp;t&ensp;i&ensp;o&ensp;n</label>
			  <textarea name="caption" required="required" value="" class="form-control" placeholder="caption" required="required"></textarea>
			  <label for = "gear" class = "control-label title">G&ensp;e&ensp;a&ensp;r</label>
			  <input type="text" name="gear" value="" class="form-control" placeholder="Gear">
			  <label for = "location" class = "control-label title">L&ensp;o&ensp;c&ensp;a&ensp;t&ensp;i&ensp;o&ensp;n</label>
			  <input type="text" name="location" value="" class="form-control" placeholder="location">
			  <label for = "other" class = "control-label title">O&ensp;t&ensp;h&ensp;e&ensp;r</label>
			  <input type="text" name="other" value="" class="form-control" placeholder="Additional Info">
			  <label for = "photo" class = "control-label title">U&ensp;p&ensp;l&ensp;o&ensp;a&ensp;d</label>		  
			  <input type="file" name="photo" accept="image/*" required="required" >
		</div>
		<div class="col-md-6" style="margin: 18% auto;text-align: center;vertical-align: middle;">
		  	<input type="submit" class="btn btn-info" value="Submit">
		</div>
		</form>	
	</div>
</div>
<script type="text/javascript">

(function(){
	//Get the modal
	var modal = document.getElementById('showphoto');
	var showdesc = document.getElementById('showdescphoto');
	var	addphoto = document.getElementById('addphoto');

	// Get the button that opens the modal
	var desc = document.getElementById("description");
	var up = document.getElementById("up-photo");
	var add = document.getElementById("btn-addphoto");

	// When the user clicks on the button, open the modal
	add.onclick = function(){
		addphoto.style.display = "block";
	}

	desc.onclick = function(){
	    modal.style.display = "none";
		showdesc.style.display = "block";
	}

	up.onclick = function() {
	    modal.style.display = "block";
		showdesc.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == showdesc) {
	        modal.style.display = "none";
	        showdesc.style.display = "none";
	    }
	    else if(event.target == addphoto){
	    	addphoto.style.display = "none";
	    }
	}

}());

function open_detail(){
	var id = $(this).attr('data-id');
	
	$.get( "/fotografi/photo_detail/" + id , function( data ) {
		console.log( data );

		photo = JSON.parse(data);
		$('#modal-photo-title').html(photo.title);
		$('#modal-photo-caption').html(photo.caption);
		$('#modal-photo-gear').html(photo.gear);

		$('#showphoto').modal('hide');
		$('#showphoto').modal();
	});
}

</script>