<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Bütün Hüquqlar Qorunur &copy; aLibaLa 
            <?php  
            $year=date("Y");
            if($year==2020)
            {
              echo $year;
            }
            else
            {
              echo "2020 - ".$year;
            }
            ?>
            </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Çıxmaq istiyirsən?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Hesabdan çıxmaq istiyirsənsə,'Çıxış' düyməsinə klikləyin</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Ləğv et</button>
          <a class="btn btn-primary" href="index.php?page=exit">Çıxış</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Product edit -->
  <div id="add_data_Modal" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title" style="color:green;">Məhsulu redaktə edin</h4> 
                   <p id="demo"></p> 
              </div>  
              <div class="modal-body" id="edit-form">  
                
              </div>   
         </div>  
    </div>  
  </div>

  <!-- showMessage -->
  <div id="showMessage" class="modal fade">  
    <div class="modal-dialog">  
         <div class="modal-content">  
              <div class="modal-header">  
                   <h4 class="modal-title" style="color:green;">Mesaj mərkəzi</h4> 
                   <button class="btn btn-danger" type="button" data-dismiss="modal">x</button>
              </div>  
              <div class="modal-body" id="messageContent">  
                
              </div>   
         </div>  
    </div>  
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <!-- datatables CDN -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.21/b-1.6.2/b-html5-1.6.2/b-print-1.6.2/datatables.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <script src="js/upload.js"></script>
  <script src="js/logoUploads.js"></script>
  
  <!-- products table start -->
  <script src="js/productDatatables.js"></script>

  <!-- editForm -->
  <script src="js/edit_form.js"></script>

  <!-- editProduct -->
  <script src="js/editProduct.js"></script>

  <!-- showMessage -->
  <script src="js/showMessage.js"></script>

  <!-- notification -->
  <script src="js/notification.js"></script>
  
</body>

</html>