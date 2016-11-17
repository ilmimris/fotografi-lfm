</header>
<div class="container-fluid">
	<div class="row">
		<form class = "form-horizontal" role="form">
			<div class="row"><h3>Add Project</h3></div>
			<div class="row" id="input-project-form">
				<div class="col-md-6">
					<label for = "project-title" class = "control-label title">Title of Project</label>
					<input id="project-title" name="project-title" class="form-control"s type="text" required="required" placeholder="Title of Project" autofocus>
					<label for = "project-year" class = "control-label title">Year</label>
					<input id = "project-year" name="project-year" class="form-control"s type="text" required="required" placeholder="Year">
					<label for = "project-cover" class = "control-label title">Project Cover</label>
					<input id="project-cover" type="file" name="project-cover" accept="image/*" required="required" placeholder="Photo cover of project">
					<label for = "project-desc" class = "control-label title">Description</label>
					<textarea id="project-desc" name="project-desc" class="form-control" type="text" required="required" placeholder="Description of project"></textarea>
					<!-- <label for = "project-group" class = "control-label title">Group Project</label>
					<input id="project-link" name="project-group" class="form-control"s type="text" required="required" placeholder="Group of project"> -->
					<label for = "project-link" class = "control-label title">Link</label>
					<input id="project-link" name="project-link" class="form-control"s type="text" required="required" placeholder="link of project">
					<label for = "project-contributor" class = "control-label title">Add Contributor</label>
					<input id="project-contributor" name="project-contributor" class="form-control tags-input" type="text" required="required"  placeholder="Enter name of contributors" value="" >
				</div>
				<div id="upload_project" class="col-md-6" style="margin: 10% auto;text-align: center;">
					<a class="btn btn-info" onclick="upload_project.call(this)">Submit</a>
					<div id="input-project-progress" style="display:none; margin: auto;">
						<img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 5px auto;">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$("#upload_project").click(function(){
		$('#input-project-progress').css("display","none");
		$('#input-project-form').css("display", "block");
	});


	$.get( "/fotografi/get_users", function( data ) {
		
		var contributors = [];
		for (var i = data.length - 1; i >= 0; i--) {
			contributors.push(data[i].username);
		}
		console.log(contributors);
		$('#project-contributor').tagging(contributors);

	}, "json" );


	function upload_project(){
		var formData = new FormData();

		formData.append('title', $('#project-title').val());
		formData.append('photo', $('#project-cover')[0].files[0]);
		formData.append('group_id', 0);
		formData.append('link', $('#project-link').val());
		formData.append('year', $('#project-year').val());
		formData.append('description', $('#project-desc').val());
		formData.append('contributor', $('#project-contributor').val());

		$("#input-project-form input[type=hidden]").each(function(i, obj) {
			formData.append($(obj).attr('name'), $(obj).val());
			console.log(obj);
		});

		$('#input-project-progress').css("display","block");
		$('#input-project-form').css("display", "none");

		$.ajax({
		       url : '/fotografi/project_add',
		       type : 'POST',
		       data : formData,
		       processData: false,  // tell jQuery not to process the data
		       contentType: false,  // tell jQuery not to set contentType
		       success : function(data) {
		       	
		       		console.log(data);
		       		data_json = JSON.parse(data);

		       		if ((typeof data_json.status !== "undefined") && data_json.status === "ok") {
		       			
		       			alert("success");
		       			window.location.reload(true);

		       		} else {
		       			
		       			alert("Something happen. Details: " + data);

		       		}

		       }
		});
	}
</script>