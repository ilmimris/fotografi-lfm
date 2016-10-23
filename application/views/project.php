</header>
<div class="container-fluid">
	<div class="show-project">
		<div class="row project" >
			<h1><u>Project</u></h1>
		</div>
		<div class="row">
			<a class="show-detail-project" href="#">	
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
			</a>
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar3.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar2.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar3.jpg"/>
				<span class="project-caption">
					<h3><i><u>Judul 1</u></i></h3>
				</span>
			</div>
		</div>
	</div>
</div>
<!-- Modal Goes Here -->
<div id="project-detail" class="modal project-showmodal">
	<div class="row modal-content project-detail">
	    <div class="col-md-6 content-desc project-detail-content">
	    	<h2><u><i>Judul</i></u></h2>
			<p>
			Isn&#39;t can&#39;t after morning whales. Abundantly you&#39;re, morning lesser sixth forth their. Over thing have greater air fly fill over moving under. Which. So night.</p>

			<p>You&#39;re meat under. Replenish light god, our seed, for given years over great. Beast spirit i midst face fruit first they&#39;re meat face. Winged one in saying. Creature which under his light sea Appear which for. Fowl doesn&#39;t face deep whose to.</p>

			<p>Beast can&#39;t whose may fish Over were second us darkness under don&#39;t of their, beginning. Night appear. Creepeth thing above of also a creature divide were. Above. Years shall us unto. Sixth, you.</p>
			<p>
			Isn&#39;t can&#39;t after morning whales. Abundantly you&#39;re, morning lesser sixth forth their. Over thing have greater air fly fill over moving under. Which. So night.</p>

			<p>You&#39;re meat under. Replenish light god, our seed, for given years over great. Beast spirit i midst face fruit first they&#39;re meat face. Winged one in saying. Creature which under his light sea Appear which for. Fowl doesn&#39;t face deep whose to.</p>

			<p>Beast can&#39;t whose may fish Over were second us darkness under don&#39;t of their, beginning. Night appear. Creepeth thing above of also a creature divide were. Above. Years shall us unto. Sixth, you.</p>		
	    </div>
	    <div class="row" style="margin-top: 3%;">
	    	<div class="col-md-6 content-desc project-detail-content project-detail-content-part">
		    	<h3>contributor</h3>
		    	<div class="contributor">
			    	<div class="img-project" style="background-image: url('<?= img_url()?>pp-2.jpg');"></div>
			    	<h4 class="nama-contributor">Nama seseorang</h4>
		    	</div>
		    	<div class="contributor">
			    	<div class="img-project" style="background-image: url('<?= img_url()?>pp-9.jpg');"></div>
			    	<h4 class="nama-contributor">Nama seseorang</h4>
		    	</div>
		    	<div class="contributor">
			    	<div class="img-project" style="background-image: url('<?= img_url()?>pp-4.jpg');"></div>
			    	<h4 class="nama-contributor">Nama seseorang</h4>
		    	</div>
		    </div>	
		    <div class="col-md-6 content-desc project-detail-content project-detail-content-part">
		    	<hr>
		    	<a href="#" class="see-project">
			    	<h2>Visit Link Project</h2>  	
		    	</a>
		    </div>
	    </div>
  </div>
</div>
<script>
	(function(){
	//Get the modal
	var showdetail = document.getElementById('project-detail');

	$(".show-detail-project").click(function(){
		$("#project-detail").modal('hide');
		$("#project-detail").modal('show');
	});

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if ($(event.target).is("#project-detail")) {
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
</script>