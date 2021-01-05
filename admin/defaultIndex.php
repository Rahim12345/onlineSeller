<div class="card-body">
	<div style="background-color: orange;margin-bottom: 20px;"><?php if(!empty($error)){ echo $error;} ?></div>
	<form action="" method="POST">
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text" style="background-color: orange;color:white;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
			</div>
			<input type="email" name="email" value="alibalayev@mail.ru" class="form-control" placeholder="Email">
			
		</div>
		<div class="input-group form-group">
			<div class="input-group-prepend">
				<span class="input-group-text" style="background-color: orange;color:white;"><i class="fas fa-key"></i></span>
			</div>
			<input type="password" name="password" value="12345678" class="form-control" placeholder="Şifrə">
		</div>
		<div class="form-group">
			<input type="submit" name="login" value="Daxil ol" style="background-color: orange;color:white;" class="btn float-right login_btn">
		</div>
	</form>
</div>