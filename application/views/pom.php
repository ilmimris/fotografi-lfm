<div id="preloader">
  <div id="status">&nbsp;</div>
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
			<div class="col-sm-6 col-md-4 col-lg-4">
				<ul  class="menu-bawah">
					<?php if ($islogin == 0) {?>
					<li><a href="auth/login" class="m-b">L     o     g     -     i     n</a></li>
					<li><a href="#" class="m-b" id="register" data-toggle="modal" data-target="#orm-reg-1">R     e     g     i     s     t     e     r</a></li>
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
<div id="form-reg-1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">x</span>
    <div class="form col-md-3">
    	<form class = "form-horizontal" role="form">
	      <label for = "firstname" class = "control-label">F&ensp;u&ensp;l&ensp;l&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
	      <input type = "text" class = "form-control" id = "fullname" >
	      <label for = "lastname" class = "control-label">U&ensp;s&ensp;e&ensp;r&ensp; &ensp;N&ensp;a&ensp;m&ensp;e</label>
		  <input type = "text" class = "form-control" id = "username" >
		  <label for = "email" class = "control-label">E&ensp;m&ensp;a&ensp;i&ensp;l</label>
	      <input type = "text" class = "form-control" id = "email" >
	      <label for = "password" class = "control-label">P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type = "text" class = "form-control" id = "password" >
	      <label for = "retype_password" class = "control-label">R&ensp;e&ensp;t&ensp;y&ensp;p&ensp;e&ensp; &ensp;P&ensp;a&ensp;s&ensp;s&ensp;w&ensp;o&ensp;r&ensp;d</label>
		  <input type = "text" class = "form-control" id = "retype_password" >
	    </form>	
    </div>
    <div id="continue" class="col-md-9">
    	<span>C&ensp;o&ensp;n&ensp;t&ensp;i&ensp;n&ensp;u&ensp;e</span>
    	<a href="#"><img src="<?=asset_url()?>/img/chevron.png" class="next"></a>	
    </div>
    
  </div>

</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById('form-reg-1');
// Get the button that opens the modal
var reg = document.getElementById("register");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
reg.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>