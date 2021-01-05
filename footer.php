	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Haqqımızda</h3>
					<p>Çatdırılma xidməti pulsuzdur.Fərqimiz məhsulların keyfiyyəti və xidmətimizdir</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Bizi izləyin</h3>
					<div class="subscribe_form">
						<form class="subscribe_form" onsubmit="return false">
							<input name="email" id="subscribe-email" class="form_input" placeholder="Email ünvanı..." type="email">
							<button type="submit" id="subscribe_btn" class="submit">İzlə</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item" style="width:100%"><p class="sosial" style="width:100%"><a href="https://www.instagram.com/p/CCQA7UmAa2b/?igshid=vuy7r84gj16e" target="_blank" style="width:100%"><span class="btn btn-warning" style="width:100%;"><i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbsp&nbsp&nbsp <b style="font-family: Lobster;">instragramda</b> izlə</span></a></p></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Əlaqə</h3>
					<p class="lead">
						<a class="btn btn-info" href="tel:+994555124668" onclick='call();return false;' style="width:100%">Zəng et</a>
					</p>
					<p class="lead">
						<a class="btn btn-danger admin" data-toggle="modal" data-target="#toTypeAdmin" href="#" style="width:100%">Adminə yaz</a>
					</p>
					<p>
						<a class="btn btn-success" href="https://api.whatsapp.com/send?phone=+994555124668&text=" target="_blank" style="width:100%"><i class="fa fa-whatsapp" aria-hidden="true"></i>-da yaz
					</a>
					</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>İş saatları</h3>
					<p><span class="text-color">7/ </span>24</p>
					<!-- visitors counter -->
<?php  
$stmt = $conn->prepare("SELECT COUNT(*) AS num FROM visitors");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$visitorCount = $row['num'];
?>
					<div class="counter btn btn-info">
				      <h2 class="timer count-title count-number" data-to="<?php echo $visitorCount; ?>" data-speed="2000"></h2>
				       <p class="count-text ">Ziyarətçi sayı</p>
				    </div>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">Bütün Hüquqlar Qorunur. &copy; 2020 <a href="javascript:;">ALİCAN</a> Design By : 
					<a href="javascript:;">Rahim Süleymanov</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- show about-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
		    
		  </div>
		</div>
		</div>

		<!-- show more category-->
		<div class="modal fade" id="showMoreCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
	        
		  </div>
		</div>
		</div>

		<!-- type to admin -->
		<div class="modal fade" id="toTypeAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content" id="succestionForm">
		  	
		  </div>
		</div>
		</div>
	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/load.js"></script>
    <script src="js/call.js"></script>
    <script src="js/showmore.js"></script>
    <script src="js/showmoreCategory.js"></script>
    <script src="js/toTypeAdmin.js"></script>
    <script src="js/subscribe.js"></script>
    <script src="js/visitorCounter.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>