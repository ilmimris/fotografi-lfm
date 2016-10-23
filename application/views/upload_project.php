</header>
<div class="container-fluid">
	<div class="row">
		<form class = "form-horizontal" role="form">
			<div class="row"><h3>Add Project</h3></div>
			<div class="row">
				<div class="col-md-6">
					<label for = "project-title" class = "control-label title">Title of Project</label>
					<input id="project-title" name="project-title" class="form-control"s type="text" required="required" autofocus>
					<label for = "project-cover" class = "control-label title">Project Cover</label>
					<input id="project-cover" type="file" name="dk-cover" accept="image/*" required="required" >
					<label for = "project-desc" class = "control-label title">Deskripsi</label>
					<textarea id="project-desc" name="project-desc" class="form-control" type="text" required="required"></textarea>
					<label for = "project-link" class = "control-label title">Link</label>
					<input id="project-link" name="project-link" class="form-control"s type="text" required="required">
					<label for = "project-contributor" class = "control-label title">Add Contributor</label>
					<input id="project-contributor" name="project-contributor" class="form-control tags-input" type="text" required="required" value="">
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	
	$.get( "/fotografi/get_users", function( data ) {
		
		var contributors = [];
		for (var i = data.length - 1; i >= 0; i--) {
			contributors.push(data[i].username);
		}
		$('#project-contributor').tagging(contributors);

	}, "json" );

</script>