<?php include('../1connection.php'); ?>
<?php include('1session.php'); ?>
<?php
$id=$_GET['journalID'];
$journal2=mysqli_query($con,"SELECT studentjournal.*,student.* from studentjournal,student where studentjournal.studentID=student.StudentID and studentjournal.studentID = '$rowstudent->StudentID' and studentjournal.journalID = '$id'")or die(mysqli_error($con));
$rowjournal2=mysqli_fetch_object($journal2);
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
              <li class="breadcrumb-item "><a href="journal.php">Daily Journal</a></li>
              <li class="breadcrumb-item ">Edit Journal</li>
              <li class="breadcrumb-item active"><?= $rowjournal2->journaldate; ?></li>
              
            </ol>
          </nav>
          <h2 class="text-bold text-1100 mb-5">Edit Journal</h2>
                                     

                              <form method="post" action="query.php">
                                <input class="form-control" type="text" name="journalID" placeholder="" id="" value="<?= $id; ?>" readonly hidden/>
                              <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <div class="mb-2 mb-sm-0"><label class="form-label text-900" for="">Agency*</label><input class="form-control" type="text" name="txtagency" placeholder="" id="" value="<?= $rowstudent->agency; ?>" readonly /></div>
                              </div>
                              <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-900" for="">Department*</label><input class="form-control" type="text" name="txtdepartment" placeholder="" id="" value="<?= $rowstudent->department; ?>" readonly /></div>
                              </div>
                              </div>
                              <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                <div class="mb-2 mb-sm-0"><label class="form-label text-900" for="">School*</label><input class="form-control" type="text" name="txtschool" placeholder="" id=""  value="<?= $rowstudent->colleges; ?>" readonly /></div>
                              </div>
                              </div>
                              <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <div class="mb-2 mb-sm-0"><label class="form-label text-900" for="">Date*</label><input class="form-control" type="text" name="txtdate" placeholder="" id=""  value="<?= date('Y-m-d'); ?>"readonly  /></div>
                              </div>
                              <div class="col-sm-6">
                                <div class="mb-2"><label class="form-label text-900" for="">Number Of Hours*</label><input class="form-control" type="text" name="txthours" placeholder="" id="" value="8" readonly /></div>
                              </div>
                              </div>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>OBJECTIVES</b> (Identify objectives for the week)</p>
                                <label class="form-label" for="exampleTextarea">OBJECTIVES</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtobjectives"> <?= $rowjournal2->objectives; ?></textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>REFLECTION FROM THE OBJECTIVES</b></p>
                                <p style="margin-bottom: 0px;">- How they will attain or meet the objectives </p>
                                <p style="margin-bottom: 0px;">- How these objectives will help them to become more effective and efficient</p>
                                <label class="form-label" for="exampleTextarea">REFLECTION</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtreflection" ><?= $rowjournal2->reflection; ?> </textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>ACCOMPLISHMENT FOR THE DAY </b>(actual tasks accomplished)</p>
                                <label class="form-label" for="exampleTextarea">ACCOMPLISHMENT</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtaccomplishment"><?= $rowjournal2->accomplishment; ?> </textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>REALIZATION ABOUT THE TASK/S</b>
                                <p style="margin-bottom: 0px;">- How they will become efficient and effective on their specific task or job</p>
                                <p style="margin-bottom: 0px;">- What are the skills and values they have learned/developed from their assigned tasks/jobs</p> 
                                <p style="margin-bottom: 0px;">- What knowledge they have acquired and shared during the practicum</p> 
                                <p style="margin-bottom: 0px;">- What are the importance of the assigned tasks/jobs in the efficient and effective flow of operation of the establishment/firm/company</p>
                                <label class="form-label" for="exampleTextarea">REALIZATION</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtrealization"><?= $rowjournal2->realization; ?> </textarea>
                              </div>
                              <hr>
                              <div class="d-flex flex-row-reverse" style="">

                                 <a href="journal.php" class="btn btn-outline-primary" >Cancel</a>
                                 <button type="submit" name="btneditjournal" class="btn btn-success" style="margin-right: 10px;">Save</button>
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