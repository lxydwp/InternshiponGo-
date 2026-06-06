<?php include('../1connection.php'); ?>
<?php 
if(isset($_SESSION['intershipgo_students']))
{
//unset($_SESSION['cid']);
unset($_SESSION['intershipgo_students']);
}
if(isset($_POST['btnlogin']))
    {
       $user=$_POST['username'];
       $pass=$_POST['password'];
 
       $s = mysqli_query($con,"SELECT * FROM student where password  = '$pass'  and studentnumber   =  '$user' and status='Active' ") or die(mysqli_errno($con));
       $r = mysqli_fetch_object($s);
       $count=mysqli_num_rows($s);
       if($count>0){
        $_SESSION['intershipgo_students']=$r->StudentID;

          //admin Link
        echo"<script type='text/javascript'>window.location.replace('index.php');alert('Login Successfully!')</script>";  
        }
      
       
       else
       {
        echo"<script type='text/javascript'>window.location.replace('login.php');alert('Account doest not exist!');</script>";
       }
       
     }
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
      
        
        <div class="content">
          <div class="d-flex flex-center content-min-h">
            <div class="py-9">
                      
                      <div class="card" style="max-width:40rem;">
                        <div class="row g-0">
                         
                          <div class="col-md-6">
                            <img class="img-fluid rounded-start" src="../assets/img/1.jpg" alt="...">
                          </div>
                          

                          <div class="col-md-6">
                            <div class="card-body ">
                              <h1>Login</h1>
                              <p class="card-text" style="margin-bottom: 50px;">Welcome Studenst! </p>
                              <form class="" method="post" action="login.php">
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">StudentID</span>
                                  <input class="form-control" type="text" placeholder="" aria-label="" aria-describedby="basic-addon1" name="username" required="" />
                                </div>
                                <!-- <div class="row mb-3">
                                  <label class="col-sm-5 col-form-label" for="inputEmail3" >Student ID</label>
                                  <div class="col-sm-7">
                                    <input class="form-control" id="inputEmail3" type="text" name="username">
                                  </div>
                                </div> -->
                                 <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Password</span>
                                  <input class="form-control" type="password" placeholder="" aria-label="" aria-describedby="basic-addon1" name="password" required="" />
                                </div>
                                <!-- <div class="row mb-3">
                                  <label class="col-sm-5 col-form-label" for="inputPassword3" >Password</label>
                                  <div class="col-sm-7">
                                    <input class="form-control" id="inputPassword3" type="password" name="password">
                                  </div>
                                </div> -->
                                <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit" name="btnlogin">Sign in</button>
                                </div>
                              </form>
                               <div class="col-auto"><a class="fs--1 fw-semi-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Forgot Password?</a></div>
                            </div>
                          </div>
                          <div class="modal fade" id="staticBackdrop" tabindex="-1" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header bg-primary">
                                <h5 class="modal-title text-white" id="staticBackdropLabel">Reset Password?</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1 text-white"></span></button>
                              </div>
                              <div class="modal-body">
                              <form method="post" action="query.php">
                                <div class="mb-3">
                                  <label class="form-label" for="exampleFormControlInput1">Phone Number</label>
                                  <input class="form-control" type="tel" id="phone" name="number" pattern="[0]{1}[9]{1}[0-9]{9}" maxlength="11" required  />
                                  <small>Format: 09123456789</small>
                                </div>
                              </div>
                              <div class="modal-footer"><button class="btn btn-primary" type="submit" name="forgotpass">Submit</button><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
                              </form>
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
  </body>

</html>