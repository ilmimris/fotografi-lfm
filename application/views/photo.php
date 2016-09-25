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
				<a href="#">
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
				<p>
					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

					The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
//Get the modal
var modal = document.getElementById('showphoto');
var showdesc = document.getElementById('showdescphoto');

// Get the button that opens the modal
var photos = document.getElementById("photo1");
var desc = document.getElementById("description");


// When the user clicks on the button, open the modal 
photos.onclick = function() {
    modal.style.display = "block";
}

desc.onclick = function(){
    modal.style.display = "none";
	showdesc.style.display = "block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == showdesc) {
        modal.style.display = "none";
        showdesc.style.display = "none";
    }
}
</script>