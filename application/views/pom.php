<div id="preloader">
  <div id="status" >&nbsp;</div>
</div>
</header>

<!-- Photo of The Month -->
<div id="footer">
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-6 col-md-8 col-lg-8" id="info">
				<p>F     e     b     r     u     a     r     y</p>
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
<script type="text/javascript">
	  $.backstretch([
	      "<?= img_url()?>gambar1.jpg"
	    , "<?= img_url()?>gambar2.jpg"
	    , "<?= img_url()?>gambar3.jpg"
	  ], {duration: 10000, fade: 750});
</script>

<!-- The Modal -->
<div id="form-reg" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div id="part1" class="form col-md-3">
    	<form class = "form-horizontal" role="form">
	      <label for = "firstname" class = "control-label">F&ensp;u&ensp;l&ensp;l&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
	      <input type = "text" class = "form-control" id = "fullname" >
	      <label for = "lastname" class = "control-label">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
		  <input type = "text" class = "form-control" id = "username" >
		  <label for = "email" class = "control-label">E&ensp;m&ensp;a&ensp;i&ensp;l</label>
	      <input type = "text" class = "form-control" id = "email" >
	      <label for = "password" class = "control-label">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type = "password" class = "form-control" id = "password" >
	      <label for = "retype_password" class = "control-label">R&ensp;e&ensp;t&ensp;y&ensp;p&ensp;e&ensp; &ensp;P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type = "password" class = "form-control" id = "retype_password" >
	    </form>	
    </div>
    <div id="cont_" class="col-md-9 continue">
    	<span>C&ensp;o&ensp;n&ensp;t&ensp;i&ensp;n&ensp;u&ensp;e</span>
    	<a href="#" id="cont"><img src="<?=asset_url()?>/img/chevron.png" class="next"></a>	
    </div>
    <div id="part2" class="form col-md-3" style="display: none;">
    	<form class = "form-horizontal" role="form">
	      <label for = "field" class = "control-label">F&ensp;i&ensp;e&ensp;l&ensp;d&ensp; &ensp;o&ensp;f&ensp; &ensp;S&ensp;t&ensp;u&ensp;d&ensp;y</label>
	      <input type = "text" class = "form-control" id = "field" >
	      <label for = "year" class = "control-label">Y&ensp;e&ensp;a&ensp;r</label>
		  <input type = "text" class = "form-control" id = "year" >
		  <label for = "lfm_batch" class = "control-label">L&ensp;F&ensp;M&ensp; &ensp;B&ensp;a&ensp;t&ensp;c&ensp;h</label>
	      <input type = "text" class = "form-control" id = "lfm_batch" >
	      <label for = "alternate_email" class = "control-label">A&ensp;l&ensp;t&ensp;e&ensp;r&ensp;n&ensp;a&ensp;t&ensp;e&ensp; &ensp;E&ensp;m&ensp;a&ensp;i&ensp;l</label>
		  <input type = "text" class = "form-control" id = "alternate_email" >
	    </form>	
    </div>
    <div id="done_" class="col-md-9 continue" style="display: none;">
    	<a href="#" class="done"><span>D&ensp;o&ensp;n&ensp;e</span></a>	
    </div>
    
  </div>

</div>

<div id="login" class="modal">
	<div class="modal-content">
		<div class="col-mod-12">
		<?php echo form_open("auth/login");?>
			<form class = "form-horizontal" role="form">
		      <label for = "lastname" class = "control-label">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
			  <input name="identity" class="form-control" placeholder="Email" type="email" autofocus>
		      <label for = "password" class = "control-label">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
			  <input name="password" type="password" value="" class="form-control" placeholder="Password" >
			  <input type="submit" class="btn btn-info" value="Submit">
		    </form>	
	    <?php echo form_close();?>
		</div>
	</div>
</div>

<script type="text/javascript">
//Get the modal
var modal = document.getElementById('form-reg');
var modal2 = document.getElementById('login');

// Get the button that opens the modal
var reg = document.getElementById("register");
var masuk = document.getElementById("masuk");

var part1 = document.getElementById("part1");
var cont_ = document.getElementById("cont_");
var part2 = document.getElementById("part2");
var done_ = document.getElementById("done_");
var cont = document.getElementById("cont");

// Get the <span> element that closes the modal

// When the user clicks on the button, open the modal 
reg.onclick = function() {
    modal.style.display = "block";
}

masuk.onclick = function() {
	modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal

cont.onclick = function() {
	part1.style.display = "none";
	cont_.style.display = "none";
	part2.style.display = "block";
	done_.style.display = "block";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}
</script>
