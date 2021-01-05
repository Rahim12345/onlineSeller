<div class="card shadow mb-4" style="min-height: 450px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" id="alert" style="background-color: orange;padding-left: 15px;border-radius: 10px;line-height: 40px;">
      <?php 
      if(!empty($errorProduct))
      {
        echo '<font style="color:white;">'.$errorProduct."</font>";
      } 
      ?>
    </h6>
  </div>
  <div class="card-body">
  <form action="" method="POST" enctype="multipart/form-data">
<?php  
$query4Category=$conn->prepare("SELECT * FROM category");
$query4Category->execute();
$rows4Category=$query4Category->fetchall(PDO::FETCH_ASSOC);
$count4Category=count($rows4Category);
if($count4Category!=0)
{
  ?>
    <div class="form-group row">
      <label for="categoryName" class="col-sm-2 col-form-label">Kateqoriya adı <sup>*</sup></label>
      <div class="col-sm-10">
        <select class="form-control" name="categoryName" id="categoryName">
          <option value="">Kateqoriya seçin</option>
          <?php  
          foreach($rows4Category as $row)
          {
            if(!empty($categoryName) && $categoryName==$row['id'])
            {
              ?>
          <option value="<?php echo $row['id']; ?>" selected><?php echo $row["name"]; ?></option>
              <?php
            }
            else
            {
              ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
              <?php
            }
          }
          ?>
        </select>
      </div>
    </div>
  <?php
}
?>
    <div class="form-group row">
      <label for="manufacturer" class="col-sm-2 col-form-label">İstehsalçı ölkə <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="text" name="manufacturer" value="<?php if(!empty($manufacturer)){ echo $manufacturer;} ?>" id="manufacturer" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="productName" class="col-sm-2 col-form-label">Məhsulun adı <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="text" name="productName" value="<?php if(!empty($productName)){ echo $productName;} ?>" id="productName" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="productPrice" class="col-sm-2 col-form-label">Məhsulun qiyməti <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="number" min="1" name="productPrice" value="<?php if(!empty($productPrice)){ echo $productPrice;} ?>" id="productPrice" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="myFile" class="col-sm-2 col-form-label">Məhsul Şəkilləri<sup>*</sup></label>
      <div class="col-sm-10">
      <div class="dropzone">
        <img src="img/photoAdd.png" style="width:80%;" />
        <input type="file" name="fileName[]" multiple="multiple" size="3" class="upload-input" id="myFile" oninput="myFunction();" />
      </div>
        <span id="error"><?php echo $photos; ?></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Mövcud rənglər<sup>*</sup></label>
      <div class="col-sm-10">
        <section class="border py-3">
          <div class="form-check mb-2">
          <label class="custom-control custom-checkbox">
            <?php  
            if($white=='Ağ')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Ağ" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Ağ" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Ağ</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($black=='Qara')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qara" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qara" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Qara</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($red=='Qırmızı')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qırmızı" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qırmızı" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Qırmızı</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($blue=='Mavi')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Mavi" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Mavi" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Mavi</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($brown=='Qəhvəyi')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qəhvəyi" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qəhvəyi" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Qəhvəyi</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($grey=='Boz')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Boz" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Boz" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Boz</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($creamie=='Krem')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Krem" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Krem" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Krem</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($firuze=='Firuzəyi')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Firuzəyi" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Firuzəyi" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Firuzəyi</span>
          </label>
          <label class="custom-control custom-checkbox">
            <?php  
            if($golden=='Qızılı')
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qızılı" class="custom-control-input" checked="">
              <?php
            }
            else
            {
              ?>
            <input type="checkbox" name="colors[]" value="Qızılı" class="custom-control-input">
              <?php
            }
            ?>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Qızılı</span>
          </label>
          </div>
        </section>
      </div>
    </div>
    <div class="form-group row">
      <label for="mainFeatures" class="col-sm-2 col-form-label">Əsas xüsusiyyətləri<sup>*</sup></label>
      <div class="col-sm-10">
        <textarea name="mainFeatures" id="mainFeatures" class="form-control" cols="30" rows="8" placeholder="" maxlength="450"><?php if($mainFeatures!=''){echo $mainFeatures;} ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" name="productAdd" class="btn btn-success" style="position: relative;float: right;">Məhsul&nbsp<i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>          
  </div>
</div>