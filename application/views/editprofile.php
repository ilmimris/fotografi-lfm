</header>
<div class="container-fluid">
	<form class = "form-horizontal editprofile" role="form">
		<div id="edit-profile-form-1" >
			<div class="row">	
				<div class="col-md-6">
				      <label for = "fullname" class = "control-label title">F&ensp;u&ensp;l&ensp;l&ensp; &ensp;N&ensp;a&ensp;m&ensp;e<span class="red">&ensp;*</span></label>
				      <input type = "text" class = "form-control " id = "fullname" >
					  <label for = "email" class = "control-label title">E&ensp;m&ensp;a&ensp;i&ensp;l<span class="red">&ensp;*</span></label>
				      <input type = "text" class = "form-control " id = "email" >
				      <label for = "jurusan" class = "control-label title">F&ensp;i&ensp;e&ensp;l&ensp;d&ensp; &ensp;o&ensp;f&ensp; &ensp;S&ensp;t&ensp;u&ensp;d&ensp;y<span class="red">&ensp;*</span></label>
					  <input type = "text" class = "form-control " id = "jurusan" >
					  <label for = "lfmbatch" class = "control-label title">L&ensp;F&ensp;M&ensp; &ensp;B&ensp;a&ensp;t&ensp;c&ensp;h<span class="red">&ensp;*</span></label>
					  <input id="input-photo-location" type="text" name="lfmbatch" value="" class="form-control" >
					  <label for = "alternate_email" class = "control-label title">A&ensp;l&ensp;t&ensp;e&ensp;r&ensp;n&ensp;a&ensp;t&ensp;e&ensp; &ensp;e&ensp;m&ensp;a&ensp;i&ensp;l</label>
					  <input id="input-photo-other" type="text" name="alternate_email" value="" class="form-control" placeholder="Additional Info">
					  <label for = "photo" class = "control-label title">D&ensp;i&ensp;s&ensp;p&ensp;l&ensp;a&ensp;y&ensp; &ensp;P&ensp;i&ensp;c&ensp;t&ensp;u&ensp;r&ensp;e</label>
					  <input id="input-photo-image" type="file" name="photo" accept="image/*" >
					  <br>
					  <span class="red title">*&ensp;&ensp;M&ensp;U&ensp;S&ensp;T&ensp;&ensp;B&ensp;E&ensp;&ensp;F&ensp;I&ensp;L&ensp;L&ensp;E&ensp;D</span>
				</div>
				<div class="col-md-6" style="margin: 3% auto;text-align: center;vertical-align: middle;">
					  <img id="profile-pic" src="#" style="max-width: 60%;" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pagenation">
					<h2 style="display: inline-block;">1/2</h2>
					<a id="next" href="#"><h2 style="display: inline-block;">&ensp;></h2></a>
				</div>
			</div>
		</div>
		<div id="edit-profile-form-2" style="display: none;">
			<div class="row" style="margin: 10% auto;">
				<div class="col-md-6" >
				     <label for = "username" class = "control-label title">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e<span class="red">&ensp;*</span></label>
					  <input type = "text" class = "form-control" id = "username" required="required">
					  <label for = "password" class = "control-label title">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d<span class="red">&ensp;*</span></label>
					  <input type = "password" class = "form-control" id = "password" required="required">
					  <label for = "retype_password" class = "control-label title">R&ensp;e&ensp;t&ensp;y&ensp;p&ensp;e&ensp; &ensp;P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d<span class="red">&ensp;*</span></label>
					  <input type = "password" class = "form-control" id = "retype_password" >
				      
					  <br>
					  <span class="red title">*&ensp;&ensp;M&ensp;U&ensp;S&ensp;T&ensp;&ensp;B&ensp;E&ensp;&ensp;F&ensp;I&ensp;L&ensp;L&ensp;E&ensp;D</span>
				</div>
				<div class="col-md-6">
			    	<a href="#" id="save" class="save"><span>S&ensp;a&ensp;v&ensp;e</span></a>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pagenation">
					<a id="prev" href="#"><h2 style="display: inline-block;"><&ensp;</h2></a>
					<h2 style="display: inline-block;">2/2</h2>
				</div>
			</div>			
		</div>
		<div id="input-photo-progress" style="display:none;" class="col-md-12">
			<img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
		</div>
	</form>	
</div>
<script>
	$('#profile-pic').attr('src', 'http://placehold.it/350x350');
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
	}

	$("#input-photo-image").change(function(){
	    readURL(this);
	});
	
	(function(){

	$('#next').click(function(){

		//cleanup
		$("#edit-profile-form-1").css("display","none");
		$("#edit-profile-form-2").css("display","none");

		$("#edit-profile-form-2").css("display","block");
	});
	$('#prev').click(function(){

		//cleanup
		$("#edit-profile-form-1").css("display","none");
		$("#edit-profile-form-2").css("display","none");

		$("#edit-profile-form-1").css("display","block");
	});
}());
</script>