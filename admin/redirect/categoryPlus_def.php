<div class="card shadow mb-4" style="min-height: 450px;">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" id="alert" style="background-color: orange;padding-left: 15px;border-radius: 10px;line-height: 40px;">
      <?php 
      if(!empty($errorCategory))
      {
        echo '<font style="color:white;">'.$errorCategory."</font>";
      } 
      ?>
    </h6>
  </div>
  <div class="card-body">
  <form action="" method="POST">
    <div class="form-group row">
      <label for="category" class="col-sm-2 col-form-label">Kateqoriya adı <sup>*</sup></label>
      <div class="col-sm-10">
        <input type="text" name="categoryInput" class="form-control" id="category" placeholder="Boşqab" maxlength="51">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-12">
        <button type="submit" name="category" class="btn btn-success" style="position: relative;float: right;">Kateqoriya&nbsp<i class="fa fa-plus" aria-hidden="true"></i></button>
      </div>
    </div>
  </form>          
  </div>
</div>