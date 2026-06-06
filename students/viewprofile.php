<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<?php include('1head.php'); ?>

<link href="../vendors/flatpickr/flatpickr.min.css" rel="stylesheet" />
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
              <li class="breadcrumb-item "><a href="">View Profile</a></li>
               
              
            </ol>
          </nav>
          <div class="mb-9">
            <div class="row align-items-center justify-content-between g-3 mb-4">
              <div class="col-auto">
                <h2 class="mb-0">View Profile</h2>
              </div>
              <div class="col-auto">
                <!-- div class="row g-3">
                  <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Delete customer</button></div>
                  <div class="col-auto"><button class="btn btn-phoenix-secondary"><span class="fas fa-key me-2"></span>Reset password</button></div> -->
                </div>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-12 col-xxl-4">
                <div class="row g-3">
                  <div class="col-12 col-md-7 col-xxl-12">
                    <div class="card h-100">
                      <div class="card-body d-flex flex-column justify-content-between pb-3">
                        <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                          <div class="col-12 col-sm-auto mb-sm-2">
                            <div class="avatar avatar-5xl">
                               <div class="d-flex align-items-center mb-3">
                              <img class="rounded-circle" src="../assets/img/user/<?= $rowstudent->picture?>" alt="" />
                              <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#editimage"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>

                                     <div class="modal fade" id="editimage" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editimage" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="editimage">Edit Image</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                            <center>
                                            <img class="rounded-circle" src="../assets/img/user/<?= $rowstudent->picture?>" alt="" style="height: 200px;width: 200px;"/>
                                             <input type="text" name="picturea" value="<?= $rowstudent->picture;?>" hidden>
                                            </center>
                                              <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                              <div class="mb-0">
                                                <label class="form-label" for="exampleFormControlInput1">Image</label>
                                                <input class="form-control" id="exampleFormControlInput1" type="file" accept="image/*" name="pic" value="">  
                                              </div>
                                          </div>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnupdateimage" >Update</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>

                            </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-auto flex-1">
                            <div class="d-flex align-items-center mb-3">
                              <h3><?= $rowstudent->firstname." ".$rowstudent->middlename." ".$rowstudent->lastname?></h3>  <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#editname"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                            </div>
                                  <div class="modal fade" id="editname" tabindex="-1" data-bs-backdrop="static" aria-labelledby="editname" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="editname">Edit Name</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" >
                                          <div class="modal-body">
                                           <div class="mb-0" style="margin-top: 0px;">
                                            <label class="form-label" for="">First Name</label>
                                            <input class="form-control" id="" type="text" value="<?= $rowstudent->firstname; ?>" name="fname">  
                                          </div>
                                           <div class="mb-0" style="margin-top: 0px;">
                                            <label class="form-label" for="">Middle Name</label>
                                            <input class="form-control" id="" type="text" value="<?= $rowstudent->middlename; ?>" name="mname">  
                                          </div>
                                           <div class="mb-0" style="margin-top: 0px;">
                                            <label class="form-label" for="">Last Name</label>
                                            <input class="form-control" id="" type="text" value="<?= $rowstudent->lastname; ?>" name="lname">  
                                          </div>
                                           <div class="mb-0" style="margin-top: 0px;">
                                            <label class="form-label" for="">Section</label>
                                          <select class="form-select" aria-label="Default select example" name="section">
                                            <option value="Section 1">A</option>
                                            <option value="Section 2">B</option>
                                            <option value="Section 3">C</option>
                                            <option value="Section 4">D</option>
                                            <option value="Section 5">E</option>
                                          </select>
                                          </div>
                                           <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                          </div>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnupdatename" >Update</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                            
                            <?php
                              // to get info of single row 
                              $xxx=mysqli_query($con,"SELECT * from agency where agencyNAME = '$rowstudent->agency'")or die(mysqli_error($con));
                              $rowxxx=mysqli_fetch_object($xxx);
                               ?>
                            <p class="" style="margin-bottom: 0px;"><b>Agency: </b><?= $rowstudent->agency; ?>
                            <?php if (!empty($rowstudent->agency)) {
                           
                            if($rowxxx->agencySTATUS=='Active'){ ?>
                            <span class="badge badge-phoenix badge-phoenix-success">Active</span>
                            <?php } ?>
                            <?php if($rowxxx->agencySTATUS=='Disabled'){ ?>
                            <span class="badge badge-phoenix badge-phoenix-warning">Disabled</span>
                            <?php }   # code...
                            }else{ echo "<i style='color:red;'>Please Apply!</i>";} ?></p>
                            <p class="" style="margin-top: 0px;margin-bottom: 0px;"><b>Course: </b><?= $rowstudent->department; ?></p>
                            <p class="" style="margin-top: 0px;margin-bottom: 0px;"><b>School: </b><?= $rowstudent->colleges; ?></p>
                            <p class="" style="margin-top: 0px;margin-bottom: 0px;"><b>Student Number: </b><?= $rowstudent->studentnumber; ?></p>
                            <p class="" style="margin-top: 0px;margin-bottom: 0px;"><b>Section: </b>
                              
                            <?php if (empty($rowstudent->section)) {
                             echo "<i style='color:red;'>Please Update Your Section!</i>";
                            } else if ($rowstudent->section='Section 1') {
                             echo "A";     
                            } else if ($rowstudent->section='Section 2') {
                             echo "B";  
                            } else if ($rowstudent->section='Section 3') {
                             echo "C";  
                            } else if ($rowstudent->section='Section 4') {
                             echo "D";  
                            } else if ($rowstudent->section='Section 5') {
                             echo "E";  
                            }
                            ?>
                            </p>
                            <p class="" style="margin-top: 0px;margin-bottom: 0px;"><b>Class Year: </b><?= $rowstudent->classyear; ?></p>
                            <div><a class="me-2" href=""><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href=""><span class="fab fa-facebook text-400 hover-primary"></span></a><a href=""><span class="fab fa-twitter text-400 hover-primary"></span></a></div>
                          </div>
                        </div>
<style>
.checked {
  color: orange;
}
</style>

                        <div class=" border-top border-dashed border-300 pt-4">
                            <div class="d-flex align-items-center mb-3">
                               <h3 class="me-1">Skills</h3>
                                <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#skills"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                            </div>
                            <?php 
                              $studentskills=mysqli_query($con,"SELECT * from studentskills where studentskillsSTUDENTID = '$studentID' ")or die(mysqli_error($con));
                              $rowstudentskills=mysqli_fetch_object($studentskills);

                              if (empty($rowstudentskills)) {
                        ?>
                              <div class="alert alert-outline-danger" role="alert">Empty, Please Update!</div>
                        <?php
                              }else{
                                 $tagall=''; 
                                  $studentskills2=mysqli_query($con,"SELECT * from studentskills where studentskillsSTUDENTID = '$studentID' ")or die(mysqli_error($con));
                                while($rowstudentskills2=mysqli_fetch_object($studentskills2))
                                    { 
                                      

                                if($rowstudentskills2->studentskillsTAGNAME != 'students'){
                                  if ($rowstudentskills2->studentskillsDES=='cus') {
                                    $tagall=$tagall.','.$rowstudentskills2->studentskillsTAGNAME;
                                  }
                                  
                        ?>
                              <span class="badge badge-light-primary"><?= $rowstudentskills2->studentskillsTAGNAME ?>
                              <?php if ($rowstudentskills2->studentskillsRATE==0) { ?>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star " ></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } else if ($rowstudentskills2->studentskillsRATE==1) { ?>
                                <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } else if ($rowstudentskills2->studentskillsRATE==2) { ?>
                                <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } else if ($rowstudentskills2->studentskillsRATE==3) { ?>
                                <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <?php } else if ($rowstudentskills2->studentskillsRATE==4) { ?>
                                <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <?php } else if ($rowstudentskills2->studentskillsRATE==5) { ?>
                                <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <?php } ?> 
<button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#skillstar<?= $rowstudentskills2->studentskillsID; ?>"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button></span><br><br>
<div class="modal fade" id="skillstar<?= $rowstudentskills2->studentskillsID; ?>" tabindex="-1" data-bs-backdrop="static" aria-labelledby="skillstar<?= $rowstudentskills2->studentskillsID; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="skillstar<?= $rowstudentskills2->studentskillsID; ?>">Modal title</h5><a class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></a>
      </div>
      <form method="post" action="query.php">
      <div class="modal-body">
        <?= $rowstudentskills2->studentskillsTAGNAME ?>
            <input class="input<?= $rowstudentskills2->studentskillsID; ?> form-range" id="customRange2" type="range" min="1" max="5" name="rating" />
            <p id="demo<?= $rowstudentskills2->studentskillsID; ?>" style="color:red; font-size: 50px;"></p>

        <input type="text" name="studentskillsID" value="<?= $rowstudentskills2->studentskillsID; ?>" hidden>
      </div>
      <div class="modal-footer"><button type="submit" class="btn btn-primary"  name="btnskillsrate">Okay</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
    </div>
</form>

<script>
let input<?= $rowstudentskills2->studentskillsID; ?> = document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>");
input<?= $rowstudentskills2->studentskillsID; ?>.addEventListener("change", stateHandle);

function stateHandle() {
    if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "0") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML = '';
    } else if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "1") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML = '&#8902;';
        
    } else if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "2") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML = '&#8902; &#8902;';
        
    } else if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "3") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML == '  &#8902; &#8902; &#8902;';
        
    } else if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "4") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML = ' &#8902; &#8902; &#8902; &#8902;';
        
    } else if(document.querySelector(".input<?= $rowstudentskills2->studentskillsID; ?>").value == "5") {
        document.getElementById("demo<?= $rowstudentskills2->studentskillsID; ?>").innerHTML = ' &#8902; &#8902; &#8902; &#8902; &#8902;';
        
    }
}
</script>
  </div>
</div>
                              
                        <?php
                              }}
                            }
                        ?>          

                       <br><br>

                        </div>
                          <div class="modal fade" id="skills" tabindex="-1" data-bs-backdrop="static" aria-labelledby="skills" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="skills">SKILLS</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                            <?php
                                           
                                              $tag=mysqli_query($con,"SELECT *  from tag ")or die(mysqli_error($con));
                                                while($rowtag=mysqli_fetch_object($tag))
                                                {
                                                  $studentskills3=mysqli_query($con,"SELECT * from studentskills where studentskillsTAGNAME = '$rowtag->tagNAME'")or die(mysqli_error($con));
                                                  $rowstudentskills3=mysqli_fetch_object($studentskills3);
                                            ?> 
                                            
                                              <div class="form-check">
                                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" name="tag[]" value="<?= $rowtag->tagNAME; ?>" <?php if (!empty($rowstudentskills3)){ echo 'checked';} ?>>
                                                  
                                                
                                                <label class="form-check-label" for="flexCheckDefault"><?= $rowtag->tagNAME; ?></label>
                                              </div>
                                           <?php } ?>
                                            <div class="form-check">

                                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" name="tag[]" value="students"  checked="" hidden>

                                                <input class="form-check-input" id="flexCheckDefault" type="checkbox"  value="students"  checked="" >
                                                <input type="text" data-role="tagsinput" name="tagsinput1" class="form-control" value="<?= $tagall; ?>"> 
                                            </div>
                                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
                                                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
                                             
                                              <style type="text/css">
                                                .bootstrap-tagsinput{
                                                    width: 100%;
                                                }
                                                .label-info{
                                                    background-color: #17a2b8;

                                                }
                                                .label {
                                                    display: inline-block;
                                                    padding: .25em .4em;
                                                    font-size: 75%;
                                                    font-weight: 700;
                                                    line-height: 1;
                                                    text-align: center;
                                                    white-space: nowrap;
                                                    vertical-align: baseline;
                                                    border-radius: .25rem;
                                                    transition: color .15s ease-in-out,background-color .15s ease-in-out,
                                                    border-color .15s ease-in-out,box-shadow .15s ease-in-out;
                                                }
                                                </style> 
                                                
                                          </div>

                                          <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnskills" >Submit</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                        <div class=" border-top border-dashed border-300 pt-4">
                            <div class="d-flex align-items-center mb-3">
                               <h3 class="me-1">EDUCATIONAL BACKGROUND</h3>
                                <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#educationalbackground"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                            </div>

                                    

                        <?php 
                              $educationalbackground=mysqli_query($con,"SELECT * from educationalbackground where studentID = '$studentID' ")or die(mysqli_error($con));
                              $roweducationalbackground=mysqli_fetch_object($educationalbackground);

                              if (empty($roweducationalbackground)) {
                        ?>
                              <div class="alert alert-outline-danger" role="alert">Empty, Please Update!</div>
                        <?php
                              }else{
                        ?>
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">LEVEL</th>
                                    <th scope="col">SCHOOL</th>
                                    <th scope="col">INCLUSIVE DATE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">ELEMENTARY</th>
                                    <td><?= $roweducationalbackground->elementarySCHOOL;?></td>
                                    <td><?= $roweducationalbackground->elementaryDATE;?></td>
                                  </tr>
                                  <tr class="table-primary">
                                    <th scope="row">HIGH SCHOOL</th>
                                    <td><?= $roweducationalbackground->hightschoolSCHOOL;?></td>
                                    <td><?= $roweducationalbackground->hightschoolDATE;?></td>
                                  </tr>
                                  <tr class="table-secondary">
                                    <th scope="row">COLLEGE</th>
                                    <td><?= $roweducationalbackground->collegeSCHOOL;?></td>
                                    <td><?= $roweducationalbackground->collegeDATE;?></</td>
                                  </tr>
                                </tbody>
                              </table>
                        <?php
                              }
                        ?>
                        </div>

                               <div class="modal fade" id="educationalbackground" tabindex="-1" data-bs-backdrop="static" aria-labelledby="educationalbackground" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="educationalbackground">EDUCATIONAL BACKGROUND</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                              <div class="mb-3">
                                                <label class="form-label" for="">Level</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="elevel" value="Elementary" readonly="" />
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">School</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="eschool" value="<?php if(!empty($roweducationalbackground)){ $roweducationalbackground->elementarySCHOOL;}?>" />
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">Date Exclusive</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="edate" value="<?php if(!empty($roweducationalbackground)){ $roweducationalbackground->elementaryDATE;}?>" />
                                              </div>

                                              <div class="mb-3">
                                                <label class="form-label" for="">Level</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="hlevel" value="High School" readonly=""/>
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">School</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="hschool" value="<?php if(!empty($roweducationalbackground)){ $roweducationalbackground->hightschoolSCHOOL;}?>" />
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">Date Exclusive</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="hdate" value="<?php if(!empty($roweducationalbackground)){ $roweducationalbackground->hightschoolDATE;}?>" />
                                              </div>

                                              <div class="mb-3">
                                                <label class="form-label" for="">Level</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="clevel" value="College" readonly=""/>
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">School</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="cschool" value="<?php if(!empty($roweducationalbackground)){$roweducationalbackground->collegeSCHOOL;}?>" />
                                              </div>
                                              <div class="mb-3">
                                                <label class="form-label" for="">Date Exclusive</label>
                                                <input class="form-control" id="" type="text" placeholder="" name="cdate" value="<?php if(!empty($roweducationalbackground)){ $roweducationalbackground->collegeDATE;}?>" />
                                              </div>

                                              <div class="mb-0">
                                              <label class="form-label" for="">EXTRACURRICULAR ACTIVITIES AND AWARDS RECEIVED</label>
                                              <textarea class="form-control" id="" rows="3" name="extra"> <?php if(!empty($roweducationalbackground)){ $roweducationalbackground->extracirricular;}?></textarea>
                                            </div>
                                          </div>
                                          <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btneducationalbackground" >Submit</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>

                        <div class=" border-top border-dashed border-300 pt-4">
                            <div class="d-flex align-items-center mb-3">
                               <h3 class="me-1">Security Questions</h3>
                                <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#securityquestions"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                            </div>

                                     <div class="modal fade" id="securityquestions" tabindex="-1" data-bs-backdrop="static" aria-labelledby="securityquestions" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="securityquestions">Security Info</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                          <div class="mb-0">
                                            <label class="form-label" for="">Security Questions</label>
                                             <select class="form-select" aria-label="" name="questions">
                                                <option>In what city were you born?</option>
                                                <option>What is the name of your favorite pet?</option>
                                                <option>What is your mother's maiden name?</option>
                                                <option>What high school did you attend?</option>
                                                <option>What was the name of your elementary school?</option>
                                                <option>What was the make of your first car?</option>
                                                <option>What was your favorite food as a child?</option>
                                              </select>
                                          </div>
                                           <div class="mb-0">
                                            <label class="form-label" for="">Answer</label>
                                            <textarea class="form-control" id="" rows="3" name="answer" required=""></textarea>
                                          </div>
                                          <div class="mb-0" style="margin-top: 0px;">
                                            <label class="form-label" for="exampleFormControlInput3">Old Password</label>
                                            <input class="password11 form-control" id="exampleFormControlInput3" type="password" value="" name="" required="">  
                                          </div>
                                          <p class="" id="demopassword1" style=""></p>
                                          </div>
                                          <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                          <div class="modal-footer"><button class="password21 btn btn-primary" type="submit" name="btnsecurityquestions" >Submit</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>

                        <?php 
                              $securityQA=mysqli_query($con,"SELECT * from securityquestions where securityquestionsUSERID = '$studentID' and securityquestionsUSERTYPE = 'student'")or die(mysqli_error($con));
                              $rowsecurityQA=mysqli_fetch_object($securityQA);

                              if (empty($rowsecurityQA)) {
                        ?>
                              <div class="alert alert-outline-danger" role="alert">Please Add Security Question For Reseting Your Password!</div>
                        <?php
                              }else{
                        ?>
                              <div class="alert alert-outline-success" role="alert"><?=$rowsecurityQA->securityquestionsQ;?></div>
                        <?php
                              }
                        ?>
                        </div>
                        <div class="d-flex flex-between-center border-top border-dashed border-300 pt-4">
                          <div>
                            <?php
                            $dtr=mysqli_query($con,"SELECT * from studentjournal where studentID = '$rowstudent->StudentID'")or die(mysqli_error($con));
                            $rowdtr= mysqli_num_rows( $dtr );
                            ?>
                            <h6>Journal</h6>
                            <p class="fs-1 text-800 mb-0"><?= $rowdtr; ?></p>
                          </div>
                          <!-- <div>
                            <h6>Projects</h6>
                            <p class="fs-1 text-800 mb-0">56</p>
                          </div>
                          <div>
                            <h6>Completion</h6>
                            <p class="fs-1 text-800 mb-0">97</p>
                          </div> -->
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="col-12 col-md-5 col-xxl-12">
                    <div class="card h-100">
                      <div class="card-body pb-3">
                        <div class="d-flex align-items-center mb-3">
                          <h3 class="me-1">Basic Info</h3>
                          <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>

                          <div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="staticBackdropLabel">Edit Basic Info</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                              </div>
                              <form method="post" action="query.php">
                              <div class="modal-body">
                                  <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                  <div class="mb-0">
                                    <label class="form-label" for="exampleFormControlInput1">Address</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="address" value="<?= $rowstudent->address; ?>">  
                                  </div>
                                  <div class="mb-0">
                                    <label class="form-label" for="exampleTextarea">Birth Date</label>
                                    <input class="form-control datetimepicker" id="datetimepicker" type="text"  value="<?= date("d/m/y",strtotime($rowstudent->birthdate)); ?>" name="birthdate"/>
                                  </div>
                                  <div class="mb-0">
                                    <label class="form-label" for="exampleFormControlInput2">Gender</label>
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                      <option selected=""><?= $rowstudent->gender; ?></option>
                                      <option >Male</option>
                                      <option >Female</option>
                                    </select>  
                                  </div>
                                  <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="exampleFormControlInput3">Contact Number</label>
                                    <input class="form-control" id="exampleFormControlInput3" type="text" value="<?= $rowstudent->contactnumber; ?>" name="number">  
                                  </div>
                                  <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="">Civil Status</label>
                                   
                                     <select class="form-select" aria-label="Default select example" name="civilstatus">
                                      <option selected=""><?= $rowstudent->civilstatus; ?></option>
                                      <option >Single</option>
                                      <option >Married</option>

                                    </select> 
                                  </div>
                                    <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="">Religion</label>
                                    <input class="form-control" id="" type="text" value="<?= $rowstudent->religion; ?>" name="religion"> 
                                  </div>
                                    <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="">Height(Cm)</label>
                                    <input class="form-control" id="" type="text" value="<?= $rowstudent->height; ?>" name="height"> 
                                  </div>
                                  <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="">Weight(Kg)</label>
                                    <input class="form-control" id="" type="text" value="<?= $rowstudent->weight; ?>" name="weight"> 
                                  </div>
                               
                              </div>
                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnupdateinfo" >Update</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                            </div>
                            </form>
                          </div>
                        </div>
                        </div>
                        <h5 class="text-800">Address</h5>
                        <p class="text-800"><?= $rowstudent->address; ?></p>
                         <h5 class="text-800">Birth Date</h5>
                        <p class="text-800"><?= $rowstudent->birthdate; ?></p>
                         <h5 class="text-800">Gender</h5>
                        <p class="text-800"><?= $rowstudent->gender; ?></p>
                         <h5 class="text-800">Contact number</h5>
                        <p class="text-800"><?= $rowstudent->contactnumber; ?></p>
                         <h5 class="text-800">Civil Status</h5>
                        <p class="text-800"><?= $rowstudent->civilstatus; ?></p>
                         <h5 class="text-800">Religion</h5>
                        <p class="text-800"><?= $rowstudent->religion; ?></p>
                        <h5 class="text-800">Height</h5>
                        <p class="text-800"><?= $rowstudent->height; ?> Cm</p>
                        <h5 class="text-800">Weight</h5>
                        <p class="text-800"><?= $rowstudent->weight; ?> Kg</p>
                        <hr>
                        <div class="d-flex align-items-center mb-3">

                          <h3 class="me-1">Security Info</h3>
                          <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                        </div>
                        <div class="modal fade" id="staticBackdrop2" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="staticBackdropLabel">Edit Security Info</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                              </div>
                              <form method="post" action="query.php">
                              <div class="modal-body">
                                  <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                  <div class="mb-0">
                                    <label class="form-label" for="exampleFormControlInput1">Username</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" name="username" value="<?= $rowstudent->studentnumber; ?>" readonly>  
                                  </div>
                                  <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="exampleFormControlInput3">Old Password</label>
                                    <input class="password1 form-control " id="exampleFormControlInput3" type="password" value="" name="">  
                                   
                                  </div>
                                  <div class="mb-0" style="margin-top: 0px;">
                                    <label class="form-label" for="exampleFormControlInput3">Password</label>
                                    <input class="form-control" id="exampleFormControlInput3" type="password" value="" name="password" required="">
                                     
                                  </div>
                                   <p class="demopass" id="demopassword" style=""></p> 
                               <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                              </div>

                              <div class="modal-footer"><button class="password2 btn btn-primary " type="submit" name="btnupdatesecurity" >Update</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                            </div>
                            </form>
                            <?php
                               $oldpass=$rowstudent->password;
                            ?> 
                            <script>
                            let input1 = document.querySelector(".password1");
                            let button1 = document.querySelector(".password2");
                            button1.disabled = true;
                            input1.addEventListener("change", stateHandle);

                            function stateHandle() {
                                if(document.querySelector(".password1").value != "<?= $oldpass; ?>") {
                                    button1.disabled = true;
                                    document.getElementById("demopassword").innerHTML = "<b style='color:red;'>Old Password Doesn't Match!</b>";
                                 
                                } else {
                                    button1.disabled = false;
                                    document.getElementById("demopassword").innerHTML = "<b style='color:green;</b>'>Good!";
                                   
                                }
                            }
                            </script>
                             <script>
                            let input11 = document.querySelector(".password11");
                            let button11 = document.querySelector(".password21");
                            button11.disabled = true;
                            input11.addEventListener("change", stateHandle);

                            function stateHandle() {
                                if(document.querySelector(".password11").value != "<?= $oldpass; ?>") {
                                    button11.disabled = true;
                                    document.getElementById("demopassword1").innerHTML = "<b style='color:red;'>Old Password Doesn't Match!</b>";
                                 
                                } else {
                                    button11.disabled = false;
                                    document.getElementById("demopassword1").innerHTML = "<b style='color:green;</b>'>Good!";
                                   
                                }
                            }
                            </script>
                          </div>
                        </div>
                         <h5 class="text-800">Username</h5>
                          <p class="text-800"><?= $rowstudent->studentnumber; ?></p>
                          <h5 class="text-800">Password</h5>
                          <p class="text-800">**********</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <div class="d-flex align-items-center mb-3">
                          <h3 class="me-1">Work Experience</h3>
                          <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#WorkExperience"><span class="fas fa-plus fs-0 ms-3 text-500"></span><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                        </div>

                           <div class="modal fade" id="WorkExperience" tabindex="-1" data-bs-backdrop="static" aria-labelledby="WorkExperience" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="WorkExperience">Work Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                             <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                              <div class="mb-3">
                                                <label class="form-label" for="">INCLUSIVE DATE</label>
                                                <input class="form-control" id="" type="date" name="date" />
                                              </div>
                                               <div class="mb-3">
                                                <label class="form-label" for="">EMPLOYER</label>
                                                <input class="form-control" id="" type="text" name="employer" />
                                              </div>
                                               <div class="mb-3">
                                                <label class="form-label" for="">POSITION</label>
                                                <input class="form-control" id="" type="text" name="position" />
                                              </div>
                                          </div>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnWorkExperience" >Add</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>


                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">INCLUSIVE DATE</th>
                              <th scope="col">EMPLOYER</th>
                              <th scope="col">POSITION</th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                                  $worklist=mysqli_query($con,"SELECT * from workexperience where workexperienceSTUDENTID = '$studentID' order by workexperienceINCLUSIVEDATE")or die(mysqli_error($con));
                                   while($rowworklist=mysqli_fetch_object($worklist)){

                                  if (empty($rowworklist)) {
                            ?>
                                  <div class="alert alert-outline-warning" role="alert">Please Add Work Experience!</div>
                            <?php
                                  }else{
                            ?>
                                  <tr>
                                    <th scope="row"><?= $rowworklist->workexperienceINCLUSIVEDATE;?></th>
                                    <td><?= $rowworklist->workexperienceEMPLOYER;?></td>
                                    <td><?= $rowworklist->workexperiencePOSITION;?></td>
                                    <td>
                                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $rowworklist->workexperienceACTION;?>">Update</button>

                                        <div class="modal fade" id="<?= $rowworklist->workexperienceACTION;?>" tabindex="-1" data-bs-backdrop="static" aria-labelledby="<?= $rowworklist->workexperienceACTION;?>" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="<?= $rowworklist->workexperienceACTION;?>">Update Work Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                              </div>
                                              <form method="post" action="query.php" enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="">INCLUSIVE DATE</label>
                                                  <input class="form-control" id="" type="date" value="<?= $rowworklist->workexperienceINCLUSIVEDATE;?>" name="date" />
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">EMPLOYER</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowworklist->workexperienceEMPLOYER;?>"  name="employer"/>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">POSITION</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowworklist->workexperiencePOSITION;?>"  name="position"/>
                                                </div>
                                                <input type="text" name="workexperienceID" value="<?= $rowworklist->workexperienceID;?>" hidden>
                                              </div>
                                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnupdateworkexperience" >Submit</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                            </div>
                                            </form>
                                          </div>
                                        </div>

                                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= $rowworklist->workexperienceACTION;?>D">Delete</button></td>
                                         <div class="modal fade" id="<?= $rowworklist->workexperienceACTION;?>D" tabindex="-1" data-bs-backdrop="static" aria-labelledby="<?= $rowworklist->workexperienceACTION;?>D" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="<?= $rowworklist->workexperienceACTION;?>D">Delate Work Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                              </div>
                                              <form method="post" action="query.php" enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="">INCLUSIVE DATE</label>
                                                  <input class="form-control" id="" type="date" value="<?= $rowworklist->workexperienceINCLUSIVEDATE;?>" name="date" readonly />
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">EMPLOYER</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowworklist->workexperienceEMPLOYER;?>"  name="employer" readonly/>
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">POSITION</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowworklist->workexperiencePOSITION;?>"  name="position" readonly/>
                                                </div>
                                                <div class="alert alert-soft-danger" role="alert">Are You sure To Delete This?</div>
                                                <input type="text" name="workexperienceID" value="<?= $rowworklist->workexperienceID;?>" hidden>
                                              </div>
                                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btndeleteworkexperience" >Delete</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                            </div>
                                            </form>
                                          </div>
                                        </div>


                                  </tr>
                            <?php
                                  }}
                            ?>
                            
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                    <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <div class="d-flex align-items-center mb-3">
                          <h3 class="me-1">TRAININGS AND SEMINARS ATTENDED</h3>
                          <button class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#trainings"><span class="fas fa-plus fs-0 ms-3 text-500"></span><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                        </div>

                           <div class="modal fade" id="trainings" tabindex="-1" data-bs-backdrop="static" aria-labelledby="trainings" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="trainings">TRAININGS AND SEMINARS ATTENDED</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                          </div>
                                          <form method="post" action="query.php" enctype="multipart/form-data">
                                          <div class="modal-body">
                                             <input type="text" name="studentID" value="<?= $rowstudent->StudentID;?>" hidden>
                                              <div class="mb-3">
                                                <label class="form-label" for="">INCLUSIVE DATE</label>
                                                <input class="form-control" id="" type="date" name="date" />
                                              </div>
                                               <div class="mb-3">
                                                <label class="form-label" for="">TITLE</label>
                                                <input class="form-control" id="" type="text" name="title" />
                                              </div>
                                          </div>
                                          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btntrainings" >Add</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>


                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">INCLUSIVE DATE</th>
                              <th scope="col" colspan="">TITLE</th>
                              <th scope="col"></th>
                              <th scope="col">ACTION</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                                  $trainings=mysqli_query($con,"SELECT * from trainings where trainingsSTUDENTID = '$studentID' order by trainingsINCLUSIVEDATE")or die(mysqli_error($con));
                                   while($rowtrainings=mysqli_fetch_object($trainings)){

                                  if (empty($rowtrainings)) {
                            ?>
                                  <div class="alert alert-outline-warning" role="alert">Please Add Work Experience!</div>
                            <?php
                                  }else{
                            ?>
                                  <tr>
                                    <th scope="row"><?= $rowtrainings->trainingsINCLUSIVEDATE;?></th>
                                    
                                    <td colspan="2"><?= $rowtrainings->trainingsTITLE;?></td>
                                    
                                    <td>
                                      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $rowtrainings->trainingsACTION;?>">Update</button>

                                        <div class="modal fade" id="<?= $rowtrainings->trainingsACTION;?>" tabindex="-1" data-bs-backdrop="static" aria-labelledby="<?= $rowtrainings->trainingsACTION;?>" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="<?= $rowtrainings->trainingsACTION;?>">Update Work Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                              </div>
                                              <form method="post" action="query.php" enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="">INCLUSIVE DATE</label>
                                                  <input class="form-control" id="" type="date" value="<?= $rowtrainings->trainingsINCLUSIVEDATE;?>" name="date" />
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">EMPLOYER</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowtrainings->trainingsTITLE;?>"  name="title"/>
                                                </div>
                                                <input type="text" name="trainingsID" value="<?= $rowtrainings->trainingsID;?>" hidden>
                                              </div>
                                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btnupdatetrainings" >Submit</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                            </div>
                                            </form>
                                          </div>
                                        </div>

                                      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= $rowtrainings->trainingsACTION;?>D">Delete</button></td>
                                         <div class="modal fade" id="<?= $rowtrainings->trainingsACTION;?>D" tabindex="-1" data-bs-backdrop="static" aria-labelledby="<?= $rowtrainings->trainingsACTION;?>D" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header bg-primary">
                                                <h5 class="modal-title text-white" id="<?= $rowtrainings->trainingsACTION;?>D">Delate Work Experience</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                                              </div>
                                              <form method="post" action="query.php" enctype="multipart/form-data">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label class="form-label" for="">INCLUSIVE DATE</label>
                                                  <input class="form-control" id="" type="date" value="<?= $rowtrainings->trainingsINCLUSIVEDATE;?>" name="date" readonly />
                                                </div>
                                                <div class="mb-3">
                                                  <label class="form-label" for="">TITLE</label>
                                                  <input class="form-control" id="" type="text" value="<?= $rowtrainings->trainingsTITLE;?>"  name="title" readonly/>
                                                </div>
                                                <div class="alert alert-soft-danger" role="alert">Are You sure To Delete This?</div>
                                                <input type="text" name="trainingsID" value="<?= $rowtrainings->trainingsID;?>" hidden>
                                              </div>
                                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="btndeletetrainings" >Delete</button><a class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</a></div>
                                            </div>
                                            </form>
                                          </div>
                                        </div>


                                  </tr>
                            <?php
                                  }}
                            ?>
                            
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                
                   <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        ...
                      </div>
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
    <script src="../assets/js/flatpickr.js"></script>
  </body>

</html>
