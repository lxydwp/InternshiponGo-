<?php include('../1connection.php'); ?>
<?php include('1session.php'); 
$formID=$_GET['formID'];
if (empty($formID)) {
 echo"<script type='text/javascript'>window.location.replace('download.php');</script>";
}
$formupload=mysqli_query($con,"SELECT * from formupload where formID = '$formID'")or die(mysqli_error($con));
      $row=mysqli_fetch_object($formupload);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php include('1head.php'); ?>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0" data-layout="container">
       <?php include('1navbarleft.php'); ?>
        <?php include('1navbartop.php'); ?> 
        
       <div class="content">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item active"><a href="">Downloadable Forms</a></li>
              <li class="breadcrumb-item active"><a href=""><?=$row->details;?></a></li>
            </ol>
          </nav>
          <h2 class="text-bold text-1100 mb-5"><?=$row->details;?></h2>
          <div class="row g-4">
            <div class="col-sm-10 col-md-10 col-lg-10">
              <div class="card border border-primary">
                <div class="card-body">
                  <?php 
                  $files='../form/admin/'.$row->link;
                 include($files);
                  ?>
                  

                  
                </div>
              </div>
            </div>
          </div>
         <?php include('1footer.php'); ?>           
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../polyfill.io/v3/polyfill.min.js"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/feather-icons/feather.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../assets/js/phoenix.js"></script>
  </body>

</html>