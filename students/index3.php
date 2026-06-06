<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
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
             <!--  <li class="breadcrumb-item"><a href="">Pages</a></li> -->
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </nav>
          <h2 class="mb-5">Home</h2>

 <!-- <?php 

$announcement=mysqli_query($con,"SELECT *  from announcement ")or die(mysqli_error($con));
              while($rowannouncement=mysqli_fetch_object($announcement))
              {  
?>
        
          <div class="accordion">
            <div class="accordion-item border-top border-300">
              <h2 class="accordion-header" id="<?= $rowannouncement->announcementID;?>"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $rowannouncement->announcementID;?>" aria-expanded="false" aria-controls="collapseOne<?= $rowannouncement->announcementID;?>"><?= $rowannouncement->announcementTITLE;?>-<?= $rowannouncement->announcementDATE;?></button></h2>
              <div class="accordion-collapse collapse" id="collapseOne<?= $rowannouncement->announcementID;?>" aria-labelledby="<?= $rowannouncement->announcementID;?>" data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0"><?= $rowannouncement->announcementDES;?></div>
              </div>
            </div>
<?php } ?>         -->    
            
            
            
           
       <!--    </div>
          <div class="text-center py-11">
            <h3 class="text-black">Do You Have Any Questions?</h3>
            <p class="text-900">Im happy to help</p><button class="btn btn-sm btn-outline-primary"> <span class="fas fa-comment me-2"></span>Chat with me</button>
          </div>  -->

        
          <div class="row  flex-center p-5">
            <div class="col-12 col-xl-10 col-xxl-8">
              <div class="row justify-content-center g-5">
                <div class="col-12 col-lg-6 text-center order-lg-1"><img class="img-fluid w-md-50 w-lg-100" src="../assets/img/spot-illustrations/500-illustration.png" alt="" width="540" /></div>
                <div class="col-12 col-lg-6 text-center text-lg-start"><img class="img-fluid mb-6 w-50 w-lg-75" src="../assets/img/pngegg.png" alt="" />
                  <h2 class="text-800 fw-bolder mb-3">Students</h2>
                  <p class="text-900 mb-5">Were here to help you find On Job Training</p><a class="btn btn-lg btn-primary" href="agency.php">Find Training</a>
                </div>
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