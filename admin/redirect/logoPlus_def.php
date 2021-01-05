<div class="card shadow mb-4" style="min-height: 450px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" id="alert" style="background-color: orange;padding-left: 15px;border-radius: 10px;line-height: 40px;">
      <?php 
      if(!empty($errorLogo))
      {
        echo '<font style="color:white;">'.$errorLogo."</font>";
      } 
      ?>
    </h6>
  </div>
  <div class="card-body">
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
      <label for="myFile" class="col-sm-2 col-form-label">Logo<sup>*</sup></label>
      <div class="col-sm-10">
      <div class="dropzone">
        <img src="img/photoAdd.png" style="width:80%;" />
        <input type="file" name="fileName[]" multiple="multiple" size="1" class="upload-input" id="myFile" oninput="myLogoFunction();" />
      </div>
        <span id="error"><?php echo $photos; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" name="logoPlus" class="btn btn-success" style="position: relative;float: right;">Logo&nbsp<i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>          
  </div>
</div>