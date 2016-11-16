</header>
<div class="container-fluid">
	<div class="show-project">
		<div class="row project" ><!-- 
			<h1><u>Project</u></h1> -->
		</div>
		<div class="row" >
<?php $i = 0; foreach ($projects as $project) {
	$i++;
?>
			<a href="#" onclick="open_detail.call(this)" data-id="<?=$project->id?>" class="show-detail-project">
			<div class="col-md-4">
				<img class="photos" src="<?= img_url()?>users_content/<?=$project->photo?>"/>
				<span class="project-caption">
					<h3 style="font-family: 'Daun'; font-size: 2.3em; text-transform: uppercase;"><?=$project->title?></h3>
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
		    	<div id="modal-project-contributor-list"></div>
		    </div>	
		    <div class="col-md-6 content-desc project-detail-content project-detail-content-part">
		    	<hr>
		    	<a id="modal-project-link" href="#" class="see-project">
			    	<h2>Visit Full Project</h2>  	
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
	var site_root = "<?=site_url()?>";
	var img_root = "<?=img_url()?>"+"users_profile/_thumb/";
	var id = $(this).attr('data-id');
	
	$('#modal-project-title').html("");
	$('#modal-project-description').html("");
	$('#modal-project-link').attr("href","");
	$("#modal-project-contributor-list").html("");
		

	$.get( "/fotografi/project_detail/" + id , function( data ) {
		console.log( data );

		project = JSON.parse(data);
		$('#modal-project-title').html(project.title);
		$('#modal-project-description').html(project.description);
		$('#modal-project-link').attr("href",project.link);

		$("#modal-project-contributor-list").html("");
		for (var i = project.contributors.length - 1; i >= 0; i--) {
			
			id = project.contributors[i].id;
			foto = project.contributors[i].foto;
			name = project.contributors[i].first_name;
			
			element = "<a href=\"/fotografi/profile/"+id+"\" class=\"show-detail-contributor\"><div class=\"contributor\"><div class=\"img-project\" style=\"background-image: url('"+img_root+foto+"');\"></div><h4 class=\"nama-contributor\">"+name+"</h4></div></a>";

			$("#modal-project-contributor-list").append(element);
		}

		$('#project-detail').modal('hide');
		$('#project-detail').modal('show');
	});
}
</script>