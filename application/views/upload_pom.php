</header>
<div class="container-fluid">
    <div id="addpom">
        <form class="form-horizontal addpom" role="form">
        <div id="input-photo-form row">
            <h3>Choose 3 photos to upload to photo of the month</h3>
            <div class="col-md-4 pom" data-id="pom-1">
                <input type="hidden" name="pom-1" id="input-pom-1">
                <label for="pom-1">
                    <img id="image-pom-1" src="http://placehold.it/350?text=Upload+pom+1"/>
                </label>
            </div>
            <div class="col-md-4 pom" data-id="pom-2">
                <input type="hidden" name="pom-2" id="input-pom-2">
                <label for="pom-2">
                    <img id="image-pom-2" src="http://placehold.it/350?text=Upload+pom+2"/>
                </label>
            </div>
            <div class="col-md-4 pom" data-id="pom-3">
                <input type="hidden" name="pom-3" id="input-pom-3">
                <label for="pom-3">
                    <img id="image-pom-3" src="http://placehold.it/350?text=Upload+pom+3"/>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-3 col-md-3" style="margin: 3% auto;text-align: center;">
                <!-- <label for = "pom-month" class = "control-label title">Bulan</label> -->
                <input id="pom-month" name="pom-month" class="form-control"s type="text" required="required" placeholder="Bulan">
            </div>
            <div class="col-md-3" style="margin: 3% auto;text-align: center;">
                <a class="btn btn-primary" onclick="upload_photo.call(this)">Submit</a>
            </div>
        </div>
        <div id="input-photo-progress" style="display:none; margin: auto;" class="col-md-12">
            <img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
        </div>
        </form> 
    </div>
</div>


<div id="addphoto" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form class = "form-horizontal addphoto" role="form">
            <div id="input-photo-form">
                <div class="col-md-6">
                    <label for = "photo" class = "control-label title">U&ensp;p&ensp;l&ensp;o&ensp;a&ensp;d</label>
                    <input id="input-photo-image" type="file" name="photo" accept="image/*" required="required" >
                    <a class="btn btn-info" onclick="upload_photo.call(this)">Submit</a>
                </div>
            </div>
            <div id="input-photo-progress" style="display:none; margin: auto;" class="col-md-12">
                <img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
            </div>
            </form> 
        </div>
  </div>
</div>

<script >
    $(".pom").click(function(){
        $('#input-photo-progress').css("display","none");
        $('#input-photo-form').css("display", "block");
        $("#addphoto").modal('show');

        id = $(this).attr('data-id');
        $('#input-upload-for').val(id);
    });


    function upload_photo(){
        var formData = new FormData();

        formData.append('file', $('#input-photo-image')[0].files[0]);
        // formData.append('contributor', $('.tagging_new_input.tt-input').val());
        // formData.append('title', $('#input-photo-title').val());
        // formData.append('caption', $('#input-photo-caption').val());
        // formData.append('gear', $('#input-photo-gear').val());
        // formData.append('location', $('#input-photo-location').val());
        // formData.append('other', $('#input-photo-other').val());
        // formData.append('type', 2);

        console.log(formData);

        $('#input-photo-progress').css("display","block");
        $('#input-photo-form').css("display", "none");

        $.ajax({
               url : '/fotografi/pom_add',
               type : 'POST',
               data : formData,
               processData: false,  // tell jQuery not to process the data
               contentType: false,  // tell jQuery not to set contentType
               success : function(data) {
                   console.log(data);
                   data_json = JSON.parse(data);
                   refresh_page(data_json);
                   console.log(data_json);
                   $("#addphoto").modal('hide');
               }
        });
    }

    function refresh_page(data) {
        console.log("refresh_page");

        id = $('#input-upload-for').val();
        if (data.status == "ok") {
            $('#input-'+id).val(data.photo.id);
            $('#image-'+id).attr('src', "<?=img_url()."users_content/_thumb/"?>" + data.photo.photo);
        } else {
            alert("Something wrong, technical details: " + data.error);
        }
    }
</script>