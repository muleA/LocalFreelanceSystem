<?php
include_once "Navigation.php";
?>
<div class="container mx-auto" style="margin-top: 100px;">
<div class="row">
    <div class="col-sm-10 ml-5">
    <div class="jumbotron mx-auto" style="padding-top: 3px;;">
    
<h2 class="text-center"> Announce Project</h2>

<div class="form-group row">
    <label for="colFormLabelSm " class="col-sm-2 col-form-label col-form-label-sm">Project title</label>
    <div class="col-sm-7">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Project title">
    </div>
  </div>
  <!-- row 2 -->
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Category</label>
    <div class="col-sm-7">
<select name="Category" style="width: 100%;">
<option>Logo Design</option>
<option>Banner Design</option>
<option>website development</option>
<option>SEO Optimazation</option>
<option>Transacription</option>
</select>
    </div>
  </div>
  
  <!--  -->

  <!-- row 3 -->

  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" style="margin-top: 30px;">
    project Description </label>
 <div class="form-row mt-4 ml-3" >
     <textarea class=" form-control" rows="5" cols="64" placeholder="Description"></textarea>
            </div>
  </div>
  <!-- row 4  -->
  <div class="form-group row">
    <label for="colFormLabelSm " class="col-sm-2 col-form-label col-form-label-sm">File Attachment </label>
    <div class="col-sm-7">
      <input type="file" class="form-control form-control-sm" id="colFormLabelSm" placeholder="browse file">
    </div>
  </div>
  <!--  row 5 -->
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Skills Required</label>
    <div class="col-sm-7">
<select name="Category" style="width: 100%;">
<option>Php</option>
<option>html</option>
<option>CSS</option>
<option>JS</option>
</select>
    </div>
  </div>
  <!--  row 6-->
  <div class="form-group row">
    <label for="colFormLabelSm " class="col-sm-2 col-form-label col-form-label-sm">Project budget </label>
    <div class="col-sm-3 mr-4">
      <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="minimum budget">
    </div>
    <div class="col-sm-3 ml-5">
      <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="maximum budget">
    </div>
  </div>
  <!--  -->
  <!-- row 7 -->
  <div class="form-group row mx-auto ">
    
    <div class="col-sm-4 offset-2 mt-3 " style="margin-right: 2px;;">
      <button type="submit" class="btn btn-sm  btn-primary " id="colFormLabelSm" >
      <i class="fa fa-arrow-circle-right fa-lg"></i>submit  </button>
</div>
 </div>

  <!--  -->
</div>
</div>
</div>
</div>