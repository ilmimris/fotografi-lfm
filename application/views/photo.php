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
?>
		<a href="#" onclick="open_detail.call(this)" data-id="<?=$photo->id?>">
		<div class="box col-md-4">
			<img class="photos" src="<?=img_url()."users_content/_thumb/".$photo->photo?>"/>
			<span class="caption fade-caption">
				<h1><?=$photo->title?></h1>
				<h4><?=$photo->first_name." ".$photo->last_name?></h4>
			</span>
		</div>
		</a>

<?php
	if (($i>0) && ($i%3==0) && (($i+1)<count($photos))) echo "</div><div class=\"row\" id=\"photos\">";
}
?>
 	</div>
</div>
<!--  Menu Bawah Photos -->
<div id="menu-photos">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-12 col-md-12 ">
				<?php if ($islogin == 1) {?>
				<a id="btn-addphoto" href="#">
			      <img class="upload btn-left" src="<?= img_url()?>plus.png">
			    </a>
			    <?php }?>
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
<div id="addphoto" class="modal">
	<div class="modal-content">
		<form class = "form-horizontal addphoto" role="form">
		<div id="input-photo-form">
			<div class="col-md-6">
			      <label for = "title" class = "control-label title">T&ensp;i&ensp;t&ensp;l&ensp;e</label>
				  <input id="input-photo-title" name="title" class="form-control" placeholder="Title" type="text" required="required" autofocus>
			      <label for = "caption" class = "control-label title">C&ensp;a&ensp;p&ensp;t&ensp;i&ensp;o&ensp;n</label>
				  <textarea id="input-photo-caption" name="caption" required="required" value="" class="form-control" placeholder="caption" required="required"></textarea>
				  <label for = "gear" class = "control-label title">G&ensp;e&ensp;a&ensp;r</label>
				  <input id="input-photo-gear" type="text" name="gear" value="" class="form-control" placeholder="Gear">
				  <label for = "location" class = "control-label title">L&ensp;o&ensp;c&ensp;a&ensp;t&ensp;i&ensp;o&ensp;n</label>
				  <input id="input-photo-location" type="text" name="location" value="" class="form-control" placeholder="location">
				  <label for = "other" class = "control-label title">O&ensp;t&ensp;h&ensp;e&ensp;r</label>
				  <input id="input-photo-other" type="text" name="other" value="" class="form-control" placeholder="Additional Info">
				  <label for = "photo" class = "control-label title">U&ensp;p&ensp;l&ensp;o&ensp;a&ensp;d</label>
				  <input id="input-photo-image" type="file" name="photo" accept="image/*" required="required" >
			</div>
			<div class="col-md-6" style="margin: 18% auto;text-align: center;vertical-align: middle;">
			  	<a class="btn btn-info" onclick="upload_photo.call(this)">Submit</a>
			</div>
		</div>
		<div id="input-photo-progress" style="display:none; margin: auto;" class="col-md-12">
			<img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
		</div>
		</form>	
	</div>
</div>
<script type="text/javascript">

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
		$('#showphoto').modal('show');
	});
}


function upload_photo(){
	var formData = new FormData();

	formData.append('file', $('#input-photo-image')[0].files[0]);
	formData.append('title', $('#input-photo-title').val());
	formData.append('caption', $('#input-photo-caption').val());
	formData.append('gear', $('#input-photo-gear').val());
	formData.append('location', $('#input-photo-location').val());
	formData.append('other', $('#input-photo-other').val());

	$('#input-photo-progress').css("display","block");
	$('#input-photo-form').css("display", "none");

	$.ajax({
	       url : '/fotografi/photo_add',
	       type : 'POST',
	       data : formData,
	       processData: false,  // tell jQuery not to process the data
	       contentType: false,  // tell jQuery not to set contentType
	       success : function(data) {
	           console.log(data);
	           $("#addphoto").modal('hide');

	           location.reload();
	       }
	});
}

</script>