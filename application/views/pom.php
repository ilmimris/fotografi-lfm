<div id="preloader">
  <div id="status" >&nbsp;</div>
</div>
</header>

<!-- Photo of The Month -->
<?php foreach var_dump($imgs);($imgs as $img)  {?>
<div id="footer">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-6 col-md-8 col-lg-8" id="info">
				<p><?=$img->bulan?></p>
				<p>P     h     o     t     o&ensp;&ensp;o     f&ensp;&ensp;T     h     e&ensp;&ensp;M     o     n     t     h</p>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-4" style="float: right;">
				<ul  class="menu-bawah">
					<?php if ($islogin == 0) {?>
					<li><a href="#" class="m-b" id="masuk" data-toggle="modal" data-target="#login">L     o     g     -     i     n</a></li>
					<li><a href="#" class="m-b" id="register" data-toggle="modal" data-target="#form-reg">R     e     g     i     s     t     e     r</a></li>
					<?php } else {?>
					<li><a href="auth/logout" class="m-b">L     o     g     -     o     u     t</a></li>
					<?php } ?>
					<li><a href="#" id="mb" class="mb" rel="m-b" >.&ensp;.&ensp;.</a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php var_dump($gambar); foreach ($gambar as $i)  {?>
<script type="text/javascript">
	  $.backstretch([
	      "<?= img_url()?>users_content/<?=$i['gambar1']?>"
	    , "<?= img_url()?>users_content/<?=$i->gambar2?>"
	    , "<?= img_url()?>users_content/<?=$i->gambar3?>"
	  ], {duration: 10000, fade: 750});
</script>
<?php }?>
<!-- The Modal -->
<div id="form-reg" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div id="part1" class="form col-md-3">
    	<form class="form-horizontal" role="form">
	      <label for="fullname" class="control-label">F&ensp;u&ensp;l&ensp;l&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
	      <input type="text" class="form-control" id="registration-fullname" >
	      <label for="username" class="control-label">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
		  <input type="text" class="form-control" id="registration-username" >
		  <label for="email" class="control-label">E&ensp;m&ensp;a&ensp;i&ensp;l</label>
	      <input type="text" class="form-control" id="registration-email" >
	      <label for="password" class="control-label">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type="password" class="form-control" id="registration-password" >
	      <label for="retype_password" class="control-label">R&ensp;e&ensp;t&ensp;y&ensp;p&ensp;e&ensp; &ensp;P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type="password" class="form-control" id="registration-retype-password" >
	    </form>	
    </div>
    <div id="cont_" class="col-md-9 continue">
    	<a href="#" id="registration-cont"><span>C&ensp;o&ensp;n&ensp;t&ensp;i&ensp;n&ensp;u&ensp;e</span><img src="<?=asset_url()?>/img/chevron.png" class="next"></a>	
    </div>
    <div id="part2" class="form col-md-3" style="display: none;">
    	<form class="form-horizontal" role="form">
	      <label for="field" class="control-label">F&ensp;i&ensp;e&ensp;l&ensp;d&ensp; &ensp;o&ensp;f&ensp; &ensp;S&ensp;t&ensp;u&ensp;d&ensp;y</label>
	      <input type="text" class="form-control" id="registration-field-of-study" >
	      <label for="year" class="control-label">Y&ensp;e&ensp;a&ensp;r</label>
		  <input type="text" class="form-control" id="registration-batch" >
		  <label for="lfm_batch" class="control-label">L&ensp;F&ensp;M&ensp; &ensp;B&ensp;a&ensp;t&ensp;c&ensp;h</label>
	      <input type="text" class="form-control" id="registration-lfm-batch" >
	      <label for="alternate_email" class="control-label">A&ensp;l&ensp;t&ensp;e&ensp;r&ensp;n&ensp;a&ensp;t&ensp;e&ensp; &ensp;E&ensp;m&ensp;a&ensp;i&ensp;l</label>
		  <input type="text" class="form-control" id="registration-alternative-email" >
	    </form>	
    </div>
    <div id="registration-status" class="form col-md-3" style="display: none;">
    	<div id="registration-status-text" style="margin: 100px auto;"></div>
    </div>
    <div id="done_" class="col-md-9 continue" style="display: none;">
    	<a href="#" id="registration-post"><span>D&ensp;o&ensp;n&ensp;e</span></a>	
    </div>
    
  </div>

</div>

<div id="login" class="modal">
	<div class="modal-content">
		<div class="col-mod-12">
		<?php echo form_open("auth/login");?>
			<form class = "form-horizontal" role="form">
		      <label for = "identity" class = "control-label">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
			  <input id="identity" name="identity" class="form-control" placeholder="Username" type="text" autofocus>
		      <label for = "password" class = "control-label">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
			  <input name="password" type="password" value="" class="form-control" placeholder="Password" >
			  <input type="submit" class="btn btn-info" value="Submit">
		    </form>	
	    <?php echo form_close();?>
		</div>
	</div>
</div>	

<script type="text/javascript">

$("#register").click(function() {
    $("form-reg").modal('hide');
	$("#registration-status").hide();
	$("#part2").hide();
	$("#done_").hide();
	$("#part1").show();
	$("#cont_").show();
    $("form-reg").modal('show');
});

$("#registration-cont").click(function() {
	$("#part1").hide();
	$("#cont_").hide();
	$("#part2").show();
	$("#done_").show();
});

$('#registration-post').click(function(){
	var data = {
		fullname : $("#registration-fullname").val(),
		username : $("#registration-username").val(),
		email : $("#registration-email").val(),
		password : $("#registration-password").val(),
		retype_password : $("#registration-retype-password").val(),
		field_of_study : $("#registration-field-of-study").val(),
		batch : $("#registration-batch").val(),
		lfm_batch : $("#registration-lfm-batch").val(),
		alternative_email : $("#registration-alternative-email").val(),
	};

	console.log(data);

	var jqxhr = $.post( "/auth/create_user_ajax", data)
	.done(function(data) {
		var data_object = JSON.parse(data);
		$("#registration-status").show();
		$("#registration-status-text").html(data_object.message);
		$("#part2").hide();
		$("#done_").hide();
		$("#part1").hide();
		$("#cont_").hide();

		if (data_object.status == "ok") {
			clear_registration_form();
		}
	})
	.fail(function(data) {
		console.log("fail: "); console.log(data);
	})
	.always(function() {
		console.log("finished: "); console.log(data);
	});
});

window.onclick = function(event) {
    if ($(event.target).is(".modal")) {
        $("#form-reg").modal('hide');
        $("#login").modal('hide');
    }
}

function clear_registration_form(){
	$("#registration-fullname").val("");
	$("#registration-username").val("");
	$("#registration-email").val("");
	$("#registration-password").val("");
	$("#registration-retype-password").val("");
	$("#registration-field-of-study").val("");
	$("#registration-batch").val("");
	$("#registration-lfm-batch").val("");
	$("#registration-alternative-email").val("");
}
</script>
