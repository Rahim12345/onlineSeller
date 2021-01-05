<div class="card shadow mb-4" style="min-height: 450px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" id="alert" style="background-color: orange;padding-left: 15px;border-radius: 10px;line-height: 40px;">
      <?php 
      if(!empty($errorKompaniya))
      {
        echo '<font style="color:white;">'.$errorKompaniya."</font>";
      } 
      $x=strlen('Little Story
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem.

Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.');
      ?>
    </h6>
  </div>
  <div class="card-body">
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
      <label for="myFile" class="col-sm-2 col-form-label">Kompaniya şəkli<sup>*</sup></label>
      <div class="col-sm-10">
      <div class="dropzone">
        <img src="img/photoAdd.png" style="width:80%;" />
        <input type="file" name="fileName[]" multiple="multiple" size="3" class="upload-input" id="myFile" oninput="myLogoFunction();" />
      </div>
        <span id="error"><?php echo $photos; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="title" class="col-sm-2 col-form-label">Başlıq daxil et <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="text" name="title" value="<?php if(!empty($title)){ echo $title;} ?>" class="form-control" id="title" placeholder="Yeni il münasibətilə ŞOK! endirim" maxlength="50">
      </div>
    </div>
    <div class="form-group row">
      <label for="Subtitle" class="col-sm-2 col-form-label">Balşıq-a şərh yazın <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="text" name="Subtitle" value="<?php if(!empty($Subtitle)){ echo $Subtitle;} ?>" class="form-control" id="Subtitle" placeholder="Yeni il münasibəti ilə 300 manatlıq alış-veriş edən hər kəsə 50 manat dəyərində stəkan dəsti hədiyyə" maxlength="450">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" name="kompaniya" class="btn btn-success" style="position: relative;float: right;">Kompaniya&nbsp<i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>          
  </div>
</div>