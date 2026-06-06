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
              <li class="breadcrumb-item active"><a href="">Daily Journal</a></li>
              
            </ol>
          </nav>
          <h2 class="text-bold text-1100 mb-5">Daily Journal</h2>
          <div id="members" data-list='{"valueNames":["id","name","mobile_number","images","Coodinator","Course","Colleges","classyear"],"page":10,"pagination":true}'>
            <div class="row align-items-center justify-content-between g-3 mb-3">
              <div class="col col-auto">
                <div class="search-box">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center"><a href="viewreport.php?cformid=8" target="_blank" class="btn btn-link text-900 me-4 px-0" ><span class="fas fa-plus me-2" disabled></span>Print Journal</a><button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#scrollingLong2"><span class="fas fa-plus me-2" disabled></span>Add Journal</button></div>
              </div>
                      <div class="modal fade" id="scrollingLong2" tabindex="-1" aria-labelledby="scrollingLongModalLabel2" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-scrollable">
                          <div class="modal-content">
                             
                            <div class="modal-header">
                              <h5 class="modal-title" id="scrollingLongModalLabel2">Add Journal</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>

                            <div class="modal-body">
                              <form method="post" action="query.php">
                                <input class="form-control" type="text" name="studentID" placeholder="" id="" value="<?= $rowstudent->StudentID; ?>" readonly hidden/>
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
                               <?php 
                             
                              $date4 = date('m-d-Y', time());
                             
                              $dtr=mysqli_query($con,"SELECT * from dtr where dtrSTUDENTID = '$rowstudent->StudentID' and dtrFULLDATE='$date4'")or die(mysqli_error($con));
                                $rowdtr=mysqli_fetch_object($dtr);

                                      if ((empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM)) && (empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) ) {
                                        $x=0;
                                        $y=0;
                                      } else if ((!empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM)) && (empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM))) {
                                        $x=0;
                                        $y=1;
                                      } else if ((empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {  
                                        $x=0;
                                        $y=1;
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&!empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {
                                        $inAm=strtotime($rowdtr->dtrTIMEINAM);
                                        $outAM= strtotime($rowdtr->dtrTIMEOUTAM);
                                        $am = $outAM -$inAm ;
                                         date('H:i:s',$am)."<br>";
                                        $hour = date('H',$am);
                                        $minutes = date('i',$am);
                                        $seconds = date('s',$am);
                                        $shour=$hour*3600;
                                        $sminutes=$minutes*60;
                                        $total=$shour+$sminutes+$seconds;
                                        $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                        $y=3;
                                      
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&!empty($rowdtr->dtrTIMEOUTAM)) && (empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {
                                        $inAm=strtotime($rowdtr->dtrTIMEINAM);
                                        $outAM= strtotime($rowdtr->dtrTIMEOUTAM);
                                        $am = $outAM -$inAm ;
                                         date('H:i:s',$am)."<br>";
                                        $hour = date('H',$am);
                                        $minutes = date('i',$am);
                                        $seconds = date('s',$am);
                                        $shour=$hour*3600;
                                        $sminutes=$minutes*60;
                                        $total=$shour+$sminutes+$seconds;
                                        $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                        $y=3;
                                      
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&!empty($rowdtr->dtrTIMEOUTPM))) {
                                        $inPM=strtotime($rowdtr->dtrTIMEINPM);
                                        $outPM= strtotime($rowdtr->dtrTIMEOUTPM);
                                        $pm = $outPM - $inPM;
                                         date('H:i:s',$pm)."<br>";
                                        $hour = date('H',$pm);
                                        $minutes = date('i',$pm);
                                        $seconds = date('s',$pm);
                                        $shour=$hour*3600;
                                        $sminutes=$minutes*60;
                                        $total=$shour+$sminutes+$seconds;
                                        $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                        $y=3;
                                        
                                      } else if ( (empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&!empty($rowdtr->dtrTIMEOUTPM))) {
                                        $inPM=strtotime($rowdtr->dtrTIMEINPM);
                                        $outPM= strtotime($rowdtr->dtrTIMEOUTPM);
                                        $pm = $outPM - $inPM;
                                        date('H:i:s',$pm)."<br>";
                                        $hour = date('H',$pm);
                                        $minutes = date('i',$pm);
                                        $seconds = date('s',$pm);
                                        $shour=$hour*3600;
                                        $sminutes=$minutes*60;
                                        $total=$shour+$sminutes+$seconds;
                                        $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                        $y=3;
                                      

                                      }else{

                                       $inAm=strtotime($rowdtr->dtrTIMEINAM);
                                       $outAM= strtotime($rowdtr->dtrTIMEOUTAM);
                                       $inPM=strtotime($rowdtr->dtrTIMEINPM);
                                       $outPM= strtotime($rowdtr->dtrTIMEOUTPM);
                                       $am = $outAM -$inAm ;
                                       $pm = $outPM - $inPM;
                                       $total2 =$am+$pm;
                                       date('H:i:s',$total2)."<br>";
                                          $hour = date('H',$total2);
                                          $minutes = date('i',$total2);
                                          $seconds = date('s',$total2);
                                          $shour=$hour*3600;
                                          $sminutes=$minutes*60;
                                          $total=$shour+$sminutes+$seconds;
                                          $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                        $y=3;
                                      
                                        }
                              
                              ?>
                                <div class="mb-2"><label class="form-label text-900" for="">Number Of Hours*</label><input class="form-control" type="text" name="txthours" placeholder="" id="" value="<?php if ($x=='0'){echo '8';}else{ echo $echototal;}?>" readonly /></div>
                              </div>
                              <div class="col-sm-6">
                                <?php  date_default_timezone_set('Asia/Manila'); ?>
                                <div class="mb-2 mb-sm-0"><label class="form-label text-900" for="">Date*</label><input class="form-control" type="text" name="txtdate" placeholder="" id=""  value="<?=  date('F d, Y'); ?>"readonly  /></div>
                              </div>
                              </div>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>OBJECTIVES</b> (Identify objectives for the week)</p>
                                <label class="form-label" for="exampleTextarea">OBJECTIVES</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtobjectives" required=""> </textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>REFLECTION FROM THE OBJECTIVES</b></p>
                                <p style="margin-bottom: 0px;">- How they will attain or meet the objectives </p>
                                <p style="margin-bottom: 0px;">- How these objectives will help them to become more effective and efficient</p>
                                <label class="form-label" for="exampleTextarea">REFLECTION</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtreflection" required=""> </textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>ACCOMPLISHMENT FOR THE DAY </b>(actual tasks accomplished)</p>
                                <label class="form-label" for="exampleTextarea">ACCOMPLISHMENT</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtaccomplishment" required=""> </textarea>
                              </div>
                              <hr>
                              <div class="">
                                <p style="margin-bottom: 0px;"><b>REALIZATION ABOUT THE TASK/S</b>
                                <p style="margin-bottom: 0px;">- How they will become efficient and effective on their specific task or job</p>
                                <p style="margin-bottom: 0px;">- What are the skills and values they have learned/developed from their assigned tasks/jobs</p> 
                                <p style="margin-bottom: 0px;">- What knowledge they have acquired and shared during the practicum</p> 
                                <p style="margin-bottom: 0px;">- What are the importance of the assigned tasks/jobs in the efficient and effective flow of operation of the establishment/firm/company</p>
                                <label class="form-label" for="exampleTextarea">REALIZATION</label>
                                <textarea class="form-control" id="" rows="3" style="width: 100%;" name="txtrealization" required=""> </textarea>
                              </div>
                              
                           
                            
                            </div>
                            <div class="modal-footer">
                              <?php 
                              date_default_timezone_set('Asia/Manila');
                              $date42 = date('m-d-Y', time());
                              $dtr2=mysqli_query($con,"SELECT * from dtr where dtrSTUDENTID = '$rowstudent->StudentID' and dtrFULLDATE='$date42'")or die(mysqli_error($con));
                                $rowdtr2=mysqli_fetch_object($dtr2);
                             
                                ?>
                               

                              <?php 
                               date_default_timezone_set('Asia/Manila');
                               $date = date('F d, Y', time());
                              $journal=mysqli_query($con,"SELECT studentjournal.* from studentjournal where StudentID = '$rowstudent->StudentID' and journaldate='$date' ")or die(mysqli_error($con));
                              $rowsjournal=mysqli_fetch_object($journal);
                             ?>

                                      <?php 
                                      if (!empty($rowsjournal)) {?>
                                        <button class="btn btn-danger" type="" name="">You Already Submitted Today!</button>
                                      <?php } else { ?>
                                        <button class="btn btn-primary" type="Submit" name="btnsavejournal" >Submit</button>
                                <?php } ?>
                             
                              <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                              
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                    
            </div>
            <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
              <div class="table-responsive scrollbar ms-n1 ps-1">
                <table class="table table-sm fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="sort align-middle" scope="col" data-sort="id" >Date</th>
                      <th class="sort align-middle" scope="col" data-sort="name" >Agency</th>
                      <th class="sort align-middle" scope="col" data-sort="images" >Course</th>
                      <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" >School</th>
                      <th class="sort align-middle" scope="col" data-sort="" >Action</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
<?php 
              $journal=mysqli_query($con,"SELECT studentjournal.*,student.* from studentjournal,student where studentjournal.studentID=student.StudentID and studentjournal.studentID = '$rowstudent->StudentID' order by journalID desc")or die(mysqli_error($con));
              while($rowjournal=mysqli_fetch_object($journal))
              { 
?>


                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                       <td class="name align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" href=""><?=$rowjournal->journaldate?></a></td>
                      <td class="images align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" href=""><?=$rowjournal->agency?></a></td>
                      <td class="mobile_number align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" href=""><?=$rowjournal->department?></a></td>
                      <td class="Coodinator align-middle white-space-nowrap"><a class="fw-bold text-1100" href="tel:+912346578"><?= $rowjournal->colleges;?></a></td>
                      <td class="Coodinator align-middle white-space-nowrap"><a href="editjournal.php?journalID=<?=$rowjournal->journalID;?>" class="btn btn-md btn-primary">Edit</a></td>
                    </tr>
                   
<?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="journal.php#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="journal.php#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
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