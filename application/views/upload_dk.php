</header>
<div class="container-fluid">
	<div class="row">
		<form class = "form-horizontal addphoto" role="form">
		<div id="input-photo-form">
			<div class="col-md-12">
			  <h3>Upload Cover DK ukuran 230x410px</h3>
		      <label for = "dk-title" class = "control-label title">D&ensp;K&ensp;&ensp;T&ensp;i&ensp;t&ensp;l&ensp;e</label>
			  <input id="dk-title" name="dk-title" class="form-control" placeholder="Title" type="text" required="required" autofocus>
			  <label for = "dk-month" class = "control-label title">B&ensp;u&ensp;l&ensp;a&ensp;n</label>
			  <input id="dk-month" name="dk-month" class="form-control" placeholder="Title" type="text" required="required">
			  <label for = "dk-desc" class = "control-label title">D&ensp;e&ensp;s&ensp;k&ensp;r&ensp;i&ensp;p&ensp;s&ensp;i</label>
			  <textarea id="dk-desc" name="dk-desc" class="form-control" placeholder="Title" type="text" required="required" autofocus></textarea>
			  <input id="dk-cover" type="file" name="dk-cover" accept="image/*" required="required" >
			  <hr/>
			</div>
			<div class="row">
				<h3>Upload DK Elite</h3>
				<div class="col-md-offset-3 col-md-3 upload_dk ">
				    <label for="elite-1">
				        <img src="http://placehold.it/350?text=Upload+elite+1"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="elite-2">
				        <img src="http://placehold.it/350?text=Upload+elite+2"/>
				    </label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-3 upload_dk">
				    <label for="elite-3">
				        <img src="http://placehold.it/350?text=Upload+elite+3"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="elite-4 ">
				        <img src="http://placehold.it/350?text=Upload+elite+4"/>
				    </label>
				</div>
			</div>
			<hr/>
			<div class="row">
				<h3>Upload DK All</h3>
				<div class="col-md-3 upload_dk">
				    <label for="all-1">
				        <img src="http://placehold.it/350?text=Upload+all+1"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-2">
				        <img src="http://placehold.it/350?text=Upload+all+2"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-3">
				        <img src="http://placehold.it/350?text=Upload+all+3"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-4">
				        <img src="http://placehold.it/350?text=Upload+all+4"/>
				    </label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 upload_dk">
				    <label for="all-5">
				        <img src="http://placehold.it/350?text=Upload+all+5"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-6">
				        <img src="http://placehold.it/350?text=Upload+all+6"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-7">
				        <img src="http://placehold.it/350?text=Upload+all+7"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-8">
				        <img src="http://placehold.it/350?text=Upload+all+8"/>
				    </label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 upload_dk">
				    <label for="all-9">
				        <img src="http://placehold.it/350?text=Upload+all+9"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-10">
				        <img src="http://placehold.it/350?text=Upload+all+10"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-11">
				        <img src="http://placehold.it/350?text=Upload+all+11"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-12">
				        <img src="http://placehold.it/350?text=Upload+all+12"/>
				    </label>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 upload_dk">
				    <label for="all-13">
				        <img src="http://placehold.it/350?text=Upload+all+13"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-14">
				        <img src="http://placehold.it/350?text=Upload+all+14"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-15">
				        <img src="http://placehold.it/350?text=Upload+all+15"/>
				    </label>
				</div>
				<div class="col-md-3 upload_dk">
				    <label for="all-16">
				        <img src="http://placehold.it/350?text=Upload+all+16"/>
				    </label>
				</div>
			</div>
			<div class="col-md-12" style="margin:10% auto;text-align: center;vertical-align: middle;">
			  	<a class="btn btn-info" onclick="upload_photo.call(this)">Submit</a>
			</div>
		</div>
		<div id="input-photo-progress" style="display:none; margin: auto;" class="col-md-12">
			<img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
		</div>
		</form>	
	</div>
</div>
<!--Modal-->
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

<script>
	$(".upload_dk").click(function(){
		$('#input-photo-progress').css("display","none");
		$('#input-photo-form').css("display", "block");
		$("#addphoto").modal('show');
	});

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