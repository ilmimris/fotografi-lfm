</header>
<div class="container-fluid">
	<div class="show-project">
		<div class="row project" >
			<h1><u>Project</u></h1>
		</div>
		<div class="row" >
<?php $i = 0; foreach ($projects as $project) {
	$i++;
?>
			<a href="#" onclick="open_detail.call(this)" data-id="<?=$project->id?>" class="show-detail-project">
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>gambar1.jpg"/>
				<span class="project-caption">
					<h3><i><u><?=$project->title?></u></i></h3>
				</span>
			</div>
			</a>
<?php
	if (($i>0) && ($i%3==0) && (($i+1)<count($projects))) echo "</div><div class=\"row\"";
}
?>
		</div>
	</div>
</div>

<!-- Modal Goes Here -->
<div id="project-detail" class="modal project-showmodal">
	<div class="row modal-content project-detail">
	    <div class="col-md-6 content-desc project-detail-content">
	    	<h2><u><i id="modal-project-title"></i></u></h2>
			<p id="modal-project-description"></p>		
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
<?php foreach ($contributors as $contributor) { ?>
			<a href="<?=site_url('/fotografi/profile/' . $contributor->id)?>" class="show-detail-contributor">
				<div class="contributor">
					<div class="img-project" style="background-image: url('<?= img_url().$contributor->foto?>');"></div>
					<h4 class="nama-contributor"><?=$contributor->first_name?> <?=$contributor->last_name?></h4>
				</div>
			</a>
<?php } ?>
		    </div>	
		    <div class="col-md-6 content-desc project-detail-content project-detail-content-part">
		    	<hr>
		    	<a href="#" class="see-project">
			    	<h2 id="modal-project-link"></h2>  	
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
	
	$.get( "/fotografi/project_detail/" + id , function( data ) {
		console.log( data );

		project = JSON.parse(data);
		$('#modal-project-title').html(project.title);
		$('#modal-project-description').html(project.description);
		$('#modal-project-link').html(project.link);

		$('#project-detail').modal('hide');
		$('#project-detail').modal('show');
	});
}
</script>