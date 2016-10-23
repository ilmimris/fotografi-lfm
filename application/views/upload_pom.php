</header>
<div class="container-fluid">
    <div id="addphoto">
        <form class = "form-horizontal addphoto" role="form">
        <div id="input-photo-form">
            <h3>Choose 3 photos to upload to photo of the month</h3>
            <div class="col-md-12">
                <div id="preview-image" src="#" ></div>
                <label for = "foto" class = "control-label title">P&ensp;o&ensp;t&ensp;h&ensp;o&ensp;</label>
                <input id="imageupload" type="file" name="foto" accept="image/*" multiple>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin: 3% auto;text-align: center;">
                <a class="btn btn-primary" onclick="upload_photo.call(this)">Submit</a>
            </div>
        </div>
        <div id="input-photo-progress" style="display:none; margin: auto;" class="col-md-12">
            <img src="<?= img_url()?>ring.gif" style="width: 120px; margin: 200px auto;">
        </div>
        </form> 
    </div>
</div>

<script >
 $("#imageupload").on('change', function () {
 
     var countFiles = $(this)[0].files.length;
 
     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#preview-image");
     image_holder.empty();
 
     if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
         if (typeof (FileReader) != "undefined") {
 
             for (var i = 0; i < countFiles; i++) {
 
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                         "src": e.target.result,
                             "class": "thumbimage"
                     }).appendTo(image_holder);
                 }
 
                 image_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }
 
         } else {
             alert("It doesn't supports");
         }
     } else {
         alert("Select Only images");
     }
 });
</script>