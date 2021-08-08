<?php
   include "navigation.php";
   
   ?>
	<!doctype html>
	<html>

	<head>
		<script> document.title="Service provider- update profile" </script>
	<style>
	/*Profile Pic Start*/
.picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 150px;
    height: 150px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #2ca8ff;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
/*Profile Pic End*/


	</style>

</head>

	<body>
		<div class="container  " style="margin-top: 100px;">
			<form>
			<div class="card shadow-sm mb-4">
				<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary mx-auto">Update Profile</h6> </div>
				<div class="card-body">
					<div class="row">
					
						<div class="col-sm-8">
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">First Name</label>
								<div class="col-sm-7">
									<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="first name"> </div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Last Name</label>
								<div class="col-sm-7">
									<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="last name"> </div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
								<div class="col-sm-7">
									<input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Email"> </div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Username</label>
								<div class="col-sm-7">
									<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="username"> </div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Mobile Number</label>
								<div class="col-sm-7">
									<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="phone No"> </div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nationality</label>
								<div class="col-sm-7">
									<select name="nationality" style="width: 100%;">
										<option value="">Ethiopian</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Gender</label>
								<!--  -->
								<div class="col-sm-7">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline ml-5">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
								</div>
								<!--  -->
							</div>
						</div>
						<!-- next column  -->
						<div class="col-sm-3 ">
							<div class="form-group text-center mr-5">
			<div class="container mx-auto">
    <div class="picture-container">
        <div class="picture">
            <img src="../Image/profile.jpg" class="picture-src" id="wizardPicturePreview" title="">
            <input type="file" id="wizard-picture" class="">
        </div>
         <h6 class="">Choose Picture</h6>

    </div>
</div>
								<!-- <label class="control-label">Photo Preview</label>
								<div class="input-group"> <img src="../Image/profile.jpg" id="output" class="img-rounded" alt="No photo to view" width="200" height="180"> </div>
								<button class="btn btn-success">upload photo</button> -->
							</div>
						</div>
					</div>
				</div>
				<!-- address information -->
				<h4 class="text-center mt-3"> Address Information</h4>
				<div class="container mt-3">
					<div class="card text-center">
						<div class="row mt-3">
							<div class="col-sm-6 mx-auto">
								<div class="form-group row ">
									<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Country</label>
									<div class="col-sm-7">
										<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="country"> </div>
								</div>
								<div class="form-group row ">
									<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">City</label>
									<div class="col-sm-7">
										<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="country"> </div>
								</div>
								<div class="form-group row ">
									<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
									<div class="col-sm-7">
										<input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="country"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<h4 class="text-center mt-3"> Bank Information</h4>
				<div class="container mt-3">
					<div class="card text-center">
						<div class="row mt-3">
							<div class="col-sm-7 mx-auto">
								<div class="form-group row ">
									<label for="mob">Bank Name</label>
									<div class="col-sm-7">
										<select class="form-control" id="sel1" style="margin-left: 50px;;">
											<option>CBE</option>
											<option>BOA</option>
											<option>AWASh</option>
											<option>4</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="colFormLabelSm " class=" col-form-label col-form-label-sm">Bank Account </label>
									<div class="col-sm-7">
										<input type="text" class="form-control form-control-sm ml-5" id="colFormLabelSm" placeholder="Account number"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-primary mt-3"><i class="fa fa-pencil-square" aria-hidden="true"></i>Update</button>
				</div>
				<!--  -->
			</div>
			</form>
		</div>
		</div>
		</div>
		</div>
		</div>
			<script>


	$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
	</script>
		<?php
include "../ServiceSeeker/Footer.php";
?>
			<!-- included files -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
			<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	</body>

	</html>