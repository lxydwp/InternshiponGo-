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
              <li class="breadcrumb-item "><a href="">STUDENT-INTERN’S FEEDBACK FORM</a></li>
               <li class="breadcrumb-item "></li>
              
            </ol>
          </nav>
          <h2 class="text-bold text-1100 mb-5">Forms</h2>

            <div class="row g-3 flex-between-end mb-5">
              
              <div class="col-auto"><!-- <button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0">Save draft</button> --></div>
            </div>
            <?php
    $cformid = $_GET['cformid'];
$cform=mysqli_query($con,"SELECT * from cform  ")or die(mysqli_error($con));
$rowcform=mysqli_fetch_object($cform);
 ?>
            <div class="row g-5">
              <div class="col-8 col-xl-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <input class="btn btn-success" type="button" onclick="printDiv('h')" value="Print" />
                     <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit</button>
                      <div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header bg-primary">
                              <h5 class="modal-title text-white" id="staticBackdropLabel">STUDENT-INTERN'S FEEDBACK FORM</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1 text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1 text-white"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <div class="modal-body">
                             <tr>
                               <td><b>My training is aligned with my field of specialization</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="A1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="A1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="A1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="A1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="A1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>My training is challenging.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="A1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="B1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="B1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="B1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="B1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>I have opportunities for learning.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="C1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="C1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="C1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="C1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="C1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>I am aware with the policies of the company.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="D1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="D1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="D1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="D1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="D1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>I have a positive working relationship with my supervisor and other employees of the company.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="E1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="E1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="E1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="E1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="E1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>I am aware of the risks and hazards of my working environment.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="F1" value="5"/>
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="F1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="F1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="F1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="F1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                             <tr>
                               <td><b>My department is committed to ensuring the health and safety of its student-interns.</b></td>
                               <td>
                                    <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault" name="G1" value="5" />
                                    <label class="form-check-label" for="flexRadioDefault1">Strongly Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="G1" value="4"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Agree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="G1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Neither Agree nor Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="G1" />
                                    <label class="form-check-label" for="flexRadioDefault2">Disagree</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault"  name="G1"/>
                                    <label class="form-check-label" for="flexRadioDefault2">Strongly Disagree</label>
                                  </div>
                              </td>
                             </tr>
                              <div class="mb-0">
                              <label class="form-label" for="exampleTextarea">PROBLEMS MET:</label>
                              <textarea class="form-control" id="exampleTextarea" rows="3"> </textarea>
                            </div>
                             <div class="mb-0">
                              <label class="form-label" for="exampleTextarea">OTHER CONCERNS:</label>
                              <textarea class="form-control" id="exampleTextarea" rows="3"> </textarea>
                            </div>
                                    
                                      
                                 
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="button">Save</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                          </div>
                        </div>
                      </div>
                       
                    <?php include('../Cforms/20 STUDENT-TRAINEES FEEDBACK FORM.php');  ?>
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