<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php include('1head.php'); ?>
 <style>
.filterDiv {
  float: left;
 /* background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;*/
  display: none;
}

.show {
  display: block;
}



/* Style the buttons */


.btn.active {
  background-color: white;
  color: red;
}
</style>
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
              <li class="breadcrumb-item"><a href="">Agency</a></li>
            </ol>
          </nav>
          <h2 class="mb-7">OJT List</h2>
          <div class="row">
            <div class="col-12">
             
             
                <div class="row align-items-center justify-content-between g-3 mb-3">
                  <div class="col col-auto">
                    <div class="search-box">
                      <form class="position-relative" data-bs-toggle="search" data-bs-display="static" method="post" action="query.php"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search" name="Keyword"  minlength="3"/>
                       <button class="btn btn-link " style="" name="btnsearch"><img src="../assets/img/s.png" style="height: 18px; margin-top: -80px; margin-left: -10px;"><!-- <span class="fas fa-search search-box-icon"></span> --></button>
                      </form>
                    </div>
                  </div>
 

            
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-xl-12 col-xxl-9 mb-6">
              <div class="myBtnContainer tabs">
                <ul class="nav nav-underline nav-tabs mb-3 border-0" id="nav-tab" role="tablist">
                  
                  <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true" onclick="filterSelection('all')">All</button></li>
                  <?php
                              $tag=mysqli_query($con,"SELECT *  from tag ")or die(mysqli_error($con));
                              while($rowtag=mysqli_fetch_object($tag))
                              {  
                              ?>
                   <li class="nav-item" role="presentation"><button class="nav-link" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true" onclick="filterSelection('<?= $rowtag->tagNAME; ?>')"><?= $rowtag->tagNAME; ?></button></li>
              <?php } ?>                    
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                    <div class="row g-3">
 <?php
$recommended=mysqli_query($con,"SELECT *  from studentskills where studentskillsSTUDENTID='$rowstudent->StudentID' ")or die(mysqli_error($con));
              while($rowrecommended=mysqli_fetch_object($recommended))
              { 
                if ($rowrecommended->studentskillsTAGNAME =='' or $rowrecommended->studentskillsTAGNAME =='students' ){

                }else{
              $test=strtoupper($rowrecommended->studentskillsTAGNAME);
               
$i1=0;
$agency1=mysqli_query($con,"SELECT *  from work where worktags like '%$test%'")or die(mysqli_error($con));
              while($rowagency1=mysqli_fetch_object($agency1))
              { 
                $test2=strtoupper($rowagency1->worktags);  

              if ($rowagency1->workSTATUS!='Deleted' ) {
                
                
                $applicant1=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency1->workID'")or die(mysqli_error($con));
                $rowapplicant1= mysqli_num_rows($applicant1);
                $applicantall1=mysqli_query($con,"SELECT * from applicant where applicantWORK = '$rowagency1->workID'")or die(mysqli_error($con));
                $rowapplicantall1= mysqli_num_rows($applicantall1);
                $applicantaccepted1=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency1->workID' and applicantSTATUS='Accepted'")or die(mysqli_error($con));
                $rowapplicantaccepted1= mysqli_num_rows($applicantaccepted1);
                $applicantcancelled1=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency1->workID' and applicantSTATUS='Cancelled'")or die(mysqli_error($con));
                $rowapplicantcancelled1=mysqli_num_rows($applicantcancelled1);
                $applicantacceptedall1=mysqli_query($con,"SELECT * from applicant where applicantWORK = '$rowagency1->workID' and applicantSTATUS='Accepted'")or die(mysqli_error($con));
                $rowapplicantacceptedall1= mysqli_num_rows($applicantacceptedall1);
                if (!empty($rowapplicantaccepted1)) {
                  $i1=1;
                }
                $total1=$rowagency1->workNUMBER-$rowapplicantacceptedall1;

                $usertags1 = explode(',', $rowagency1->worktags);
?>                     
                     
                       <div class="filterDiv <?php  foreach($usertags as $keytags){ ?> <?= $keytags ?> <?php } ?> col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class=" card h-100 border-success <?php if (empty($rowapplicant)){}else{echo'bg-warning-soft';}?>  success-boxshadow bg-success-soft">
                          <div class="bg-holder" style="background-image:url(../assets/img/bg/bg-10.png);background-position:left bottom;background-size:auto;"></div>
                          <!--/.bg-holder-->
                          <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                            <div class="d-flex justify-content-between">
                              <div class="mb-5 mb-md-0 mb-lg-5">
                                <div class="d-sm-flex align-items-center mb-3">
                                  <h3 class="mb-0 mb-"><?= $rowagency1->workNAME; ?></h3><span class="badge ms-sm-3 text-uppercase fs--2 bg-warning">recommended</span>
                                </div>
                                <p class="fs--1"><?php echo $rowagency1->workDETAILS ?></p>
                                <?php  foreach($usertags1 as $keytags1){ ?>
                                <span class="badge badge-phoenix badge-phoenix-secondary"><?= $keytags1 ?></span>
                                <?php } ?>
                              </div><img src="../assets/img/spot-illustrations/shield.png" width="54" height="54" alt="" />
                            </div>
                            <div class="row ">
                              <div class="col-5 mb-2 mb-sm-0 mb-md-2 mb-lg-0">
                                 <li class="d-flex align-items-center"><span class="check-circle text-primary me-2" data-feather="users"></span><span class="text-700 fw-semi-bold"><?= "Up to ".$total1 . " Members"; ?></span></li>
                                 <li class="d-flex align-items-center"><span class="check-circle text-warning me-2" data-feather="user-plus"></span><span class="text-700 fw-semi-bold"><?= "Applied: ". $rowapplicantall1. " "; ?></span></li>
                                 <li class="d-flex align-items-center"><span class="check-circle text-success me-2" data-feather="user-check"></span><span class="text-700 fw-semi-bold"><?= "Accepted: ". $rowapplicantacceptedall1. " "; ?></span></li>
                                 <hr>
                                 <form method="post" action="query.php">
                                  <input type="text" name="workID" value="<?= $rowagency1->workID; ?>" hidden>
                                  <input type="text" name="agencyID" value="<?= $rowagency1->workAGENCYID; ?>" hidden>
                                  <input type="text" name="studentID" value="<?= $rowstudent->StudentID; ?>" hidden>
                              <?php if ($rowagency1->workSTATUS=='Disabled') {
                              ?>
                              <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Disabled</button>
                              <?php
                              ?>
                              <?php }else{ ?>
                              <?php if (!empty($rowapplicantaccepted1)) {?>
                              <button class="btn btn-success me-1 mb-1" type="submit" name="" disabled="">Accepted</button>
                              <?php }else{?>
                                     <?php if (empty($rowapplicant1)) {?>
                                                <?php if ($i1==1) {?>
                                                  <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Invalid</button>
                                                <?php }else if($i1==0){?>
                                                <button class="btn btn-primary me-1 mb-1" type="submit" name="btnapplied">Apply</button>
                                                <?php } ?>
                                    <?php }else{?>
                                                <?php if ($i1==1) {?>
                                                  <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Invalid</button>
                                                <?php }else if($i1==0){?>
                                                    <?php
                                                    if(empty($rowapplicantcancelled1)){
                                                    ?>
                                                    <button class="btn btn-warning me-1 mb-1" type="submit" name="" disabled="">Applied</button>
                                                    <?php }else{?>
                                                    <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Cancelled</button>
                                                    <?php } ?>
                                                <?php } ?>
                                    <?php } ?>     
                              <?php } ?>
                              <?php } ?>
                                </form>
                              </div>
                              <div class="col-sm-7 col-md-12 col-lg-7">
                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                  <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                    <?php 
                                    $userArray1 = explode(',', $rowagency1->workQUALIFICATIONS);

                                      foreach($userArray1 as $key1){
                                      ?>
                                      <li class="d-flex align-items-center"><span class="check-circle text-success me-2" data-feather="check-circle"></span><span class="text-500 fw-semi-bold"><?= $key1 ?></span></li>

                                    <?php 
                                      }
                                     ?>

                                  
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<?php } } } } ?>
 <?php 
$i=0;
$agency=mysqli_query($con,"SELECT *  from work ")or die(mysqli_error($con));
              while($rowagency=mysqli_fetch_object($agency))
              { 

              if ($rowagency->workSTATUS!='Deleted') {
                
                
                $applicant=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency->workID'")or die(mysqli_error($con));
                $rowapplicant= mysqli_num_rows($applicant);
                $applicantall=mysqli_query($con,"SELECT * from applicant where applicantWORK = '$rowagency->workID'")or die(mysqli_error($con));
                $rowapplicantall= mysqli_num_rows($applicantall);
                $applicantaccepted=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency->workID' and applicantSTATUS='Accepted'")or die(mysqli_error($con));
                $rowapplicantaccepted= mysqli_num_rows($applicantaccepted);
                $applicantcancelled=mysqli_query($con,"SELECT * from applicant where applicantSTUDENTID = '$rowstudent->StudentID' and applicantWORK = '$rowagency->workID' and applicantSTATUS='Cancelled'")or die(mysqli_error($con));
                $rowapplicantcancelled=mysqli_num_rows($applicantcancelled);
                $applicantacceptedall=mysqli_query($con,"SELECT * from applicant where applicantWORK = '$rowagency->workID' and applicantSTATUS='Accepted'")or die(mysqli_error($con));
                $rowapplicantacceptedall= mysqli_num_rows($applicantacceptedall);
                if (!empty($rowapplicantaccepted)) {
                  $i=1;
                }
                $total=$rowagency->workNUMBER-$rowapplicantacceptedall;

                $usertags = explode(',', $rowagency->worktags);
?>                     
                     
                       <div class="filterDiv <?php  foreach($usertags as $keytags){ ?> <?= $keytags ?> <?php } ?> col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class=" card h-100 border-success <?php if (empty($rowapplicant)){}else{echo'bg-warning-soft';}?>  success-boxshadow bg-success-soft">
                          <div class="bg-holder" style="background-image:url(../assets/img/bg/bg-10.png);background-position:left bottom;background-size:auto;"></div>
                          <!--/.bg-holder-->
                          <div class="card-body d-flex flex-column justify-content-between position-relative z-index-2">
                            <div class="d-flex justify-content-between">
                              <div class="mb-5 mb-md-0 mb-lg-5">
                                <div class="d-sm-flex align-items-center mb-3">
                                  <h3 class="mb-0 mb-"><?= $rowagency->workNAME; ?></h3>
                                </div>
                                <p class="fs--1"><?php echo $rowagency->workDETAILS ?></p>
                                <?php  foreach($usertags as $keytags){ ?>
                                <span class="badge badge-phoenix badge-phoenix-secondary"><?= $keytags ?></span>
                                <?php } ?>
                              </div><img src="../assets/img/spot-illustrations/shield.png" width="54" height="54" alt="" />
                            </div>
                            <div class="row ">
                              <div class="col-5 mb-2 mb-sm-0 mb-md-2 mb-lg-0">
                                 <li class="d-flex align-items-center"><span class="check-circle text-primary me-2" data-feather="users"></span><span class="text-700 fw-semi-bold"><?= "Up to ".$total . " Members"; ?></span></li>
                                 <li class="d-flex align-items-center"><span class="check-circle text-warning me-2" data-feather="user-plus"></span><span class="text-700 fw-semi-bold"><?= "Applied: ". $rowapplicantall. " "; ?></span></li>
                                 <li class="d-flex align-items-center"><span class="check-circle text-success me-2" data-feather="user-check"></span><span class="text-700 fw-semi-bold"><?= "Accepted: ". $rowapplicantacceptedall. " "; ?></span></li>
                                 <hr>
                                 <form method="post" action="query.php">
                                  <input type="text" name="workID" value="<?= $rowagency->workID; ?>" hidden>
                                  <input type="text" name="agencyID" value="<?= $rowagency->workAGENCYID; ?>" hidden>
                                  <input type="text" name="studentID" value="<?= $rowstudent->StudentID; ?>" hidden>
                              <?php if ($rowagency->workSTATUS=='Disabled') {
                              ?>
                              <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Disabled</button>
                              <?php
                              ?>
                              <?php }else{ ?>
                              <?php if (!empty($rowapplicantaccepted)) {?>
                              <button class="btn btn-success me-1 mb-1" type="submit" name="" disabled="">Accepted</button>
                              <?php }else{?>
                                     <?php if (empty($rowapplicant)) {?>
                                                <?php if ($i==1) {?>
                                                  <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Invalid</button>
                                                <?php }else if($i==0){?>
                                                <button class="btn btn-primary me-1 mb-1" type="submit" name="btnapplied">Apply</button>
                                                <?php } ?>
                                    <?php }else{?>
                                                <?php if ($i==1) {?>
                                                  <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Invalid</button>
                                                <?php }else if($i==0){?>
                                                    <?php
                                                    if(empty($rowapplicantcancelled)){
                                                    ?>
                                                    <button class="btn btn-warning me-1 mb-1" type="submit" name="" disabled="">Applied</button>
                                                    <?php }else{?>
                                                    <button class="btn btn-danger me-1 mb-1" type="submit" name="" disabled="">Cancelled</button>
                                                    <?php } ?>
                                                <?php } ?>
                                    <?php } ?>     
                              <?php } ?>
                              <?php } ?>
                                </form>
                              </div>
                              <div class="col-sm-7 col-md-12 col-lg-7">
                                <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                  <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                    <?php 
                                    $userArray = explode(',', $rowagency->workQUALIFICATIONS);

                                      foreach($userArray as $key){
                                      ?>
                                      <li class="d-flex align-items-center"><span class="check-circle text-success me-2" data-feather="check-circle"></span><span class="text-500 fw-semi-bold"><?= $key ?></span></li>

                                    <?php 
                                      }
                                     ?>

                                  
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
<?php } }?>                      



                    </div>
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
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>