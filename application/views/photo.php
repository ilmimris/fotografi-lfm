</header>
<div class="container-fluid">
	<div class="row" id="photos">
		<a id="photo1" href="#sesuatu" data-toggle="modal" data-target="#showphoto"><div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 1</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div></a>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 2</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar3.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 3</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
	</div>
	<div class="row" id="photos">	
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar4.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 4 </h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar5.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 5</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar6.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 6</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
	</div>
	<div class="row" id="photos">
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar7.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 7</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar8.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 8</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
		<div class="box col-md-4">
			<img class="photos" src="<?= img_url()?>gambar9.jpg"/>
			<span class="caption fade-caption">
				<h1>Judul 9</h1>
				<h4>Nama Seseorang</h4>
			</span>
		</div>
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
				<h1>Dul Juduldul</h1>
				<h2>Nama Seseorang</h2>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

					The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>
				<br>
				<p>29 Februari 2016
				Stone Garden, Padalarang
				Nikon FM2 + Kodak Ektar 100
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
		<div class="col-mod-12">
			<form class = "form-horizontal" role="form">
		      <label for = "judul" class = "control-label">J&ensp;u&ensp;d&ensp;u&ensp;l</label>
			  <input name="judul" class="form-control" placeholder="Judul Photo ini" type="text" required="required" autofocus>
		      <label for = "description" class = "control-label">D&ensp;e&ensp;s&ensp;k&ensp;r&ensp;i&ensp;p&ensp;s&ensp;i</label>
			  <textarea name="description" required="required" value="" class="form-control" placeholder="Deskripsi" ></textarea>
			  <label for = "lokasi" class = "control-label">L&ensp;o&ensp;k&ensp;a&ensp;s&ensp;i</label>
			  <input type="text" name="lokasi" value="" class="form-control" placeholder="Tipe Camera">
			  <label for = "kamera" class = "control-label">K&ensp;a&ensp;m&ensp;e&ensp;r&ensp;a</label>
			  <input type="text" name="kamera" value="" class="form-control" placeholder="Tipe Camera">
			  <input type="submit" class="btn btn-info" value="Submit">
		    </form>	
		</div>
	</div>
</div>
<script type="text/javascript">
//Get the modal
var modal = document.getElementById('showphoto');
var showdesc = document.getElementById('showdescphoto');
var	addphoto = document.getElementById('addphoto');

// Get the button that opens the modal
var photos = document.getElementById("photo1");
var desc = document.getElementById("description");
var up = document.getElementById("up-photo");
var add = document.getElementById("btn-addphoto");


// When the user clicks on the button, open the modal
add.onclick = function(){
	addphoto.style.display = "block";
} 
photos.onclick = function() {
    modal.style.display = "block";
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
</script>