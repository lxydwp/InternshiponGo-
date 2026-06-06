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
              
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
          <h2 class="mb-5">Dashboard</h2>
                   
               <div class="pb-5">
                  <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                      <div class="row g-3">
                        <div class="col-12 col-md-6">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="">
                                <div id="container"  style=""></div>
                              </div>
                              <div> 
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="">
                                <div id="container2"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pb-5">
                  <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                      <div class="row g-3">
                        <div class="col-12 col-md-12">
                          <div class="card overflow-scroll">
                            <div class="card-body">
                                <div class="overflow-scroll">
                                <?php include('grading.php'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="pb-5">
                  <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                      <div class="row g-3">
                        <div class="col-12 col-md-12">
                          <div class="card overflow-scroll">
                            <div class="card-body">
                                <div class="overflow-scroll">
                              <div id="calendar_basic" style="width: 1000px;"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pb-5">
                  <div class="row g-4">
                    <div class="col-12 col-xxl-6">
                      <div class="row g-3">                        
                        <div class="col-12 col-md-12">
                          <div class="card ">
                            <div class="card-body">
                              <div class="">
                <h3>Time-In Time-Out</h3>
              </div>
              <div class="table-responsive scrollbar">
                <table class="table fs--2 mb-0">
                  <thead>
                    <tr>
                      <th class="border-top border-200 ps-0 align-middle" scope="col" >Date</th>
                      <th class="border-top border-200 align-middle" scope="col" >Time-In AM</th>
                      <th class="border-top border-200 text-end align-middle" scope="col" >Time-Out AM</th>
                      <th class="border-top border-200 text-end align-middle" scope="col" >Time-In PM</th>
                      <th class="border-top border-200 text-end pe-0 align-middle" scope="col">Time-Out PM</th>
                      <th class="border-top border-200 text-end pe-0 align-middle" scope="col" > Total Hours</th>
                    </tr>
                  </thead>
                  <tbody class="list">
<?php 
$total=0;
$sumtotal234 =0;
$echototal=0;
$dtr=mysqli_query($con,"SELECT * from dtr where dtrSTUDENTID = '$rowstudent->StudentID'")or die(mysqli_error($con));
    while($rowdtr=mysqli_fetch_object($dtr)){
?>                    
                    <tr>
                      <td class="align-middle" >
                        <h6 class="mb-0"><?=$rowdtr->dtrFULLDATE; ?></h6>
                      </td>
                      <td class="align-middle" >
                        <h6 class="mb-0"><?= $rowdtr->dtrTIMEINAM; ?></h6>
                      </td>
                      <td class="align-middle text-end" >
                        <h6 class="mb-0"><?= $rowdtr->dtrTIMEOUTAM; ?></h6>
                      </td>
                      <td class="align-middle text-end" >
                        <h6 class="mb-0"><?= $rowdtr->dtrTIMEINPM; ?></h6>
                      </td>
                      <td class="align-middle text-end pe-0" >
                        <h6><?= $rowdtr->dtrTIMEOUTPM; ?></h6>
                      </td>
                      <td class="align-middle text-end pe-0">
                        <?php
                          if ((empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM)) && (empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) ) {
                                        $x=0;
                                        $y=0;
                                      } else if ((!empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM)) && (empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM))) {
                                        $x=0;
                                        $y=1;
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {  
                                        $x=0;
                                        $y=1;
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&!empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {
                                              $inAm=$rowdtr->dtrTIMEINAM;
                                              $inAm = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inAm);
                                              sscanf($inAm, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $a = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outAM=$rowdtr->dtrTIMEOUTAM;
                                              $outAM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outAM);
                                              sscanf($outAM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $b = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total = $b -$a ;
                                              echo $echototal= gmdate("H:i:s", $total);
                                              $x=1;
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&!empty($rowdtr->dtrTIMEOUTAM)) && (empty($rowdtr->dtrTIMEINPM)&&empty($rowdtr->dtrTIMEOUTPM))) {
                                              $inAm=$rowdtr->dtrTIMEINAM;
                                              $outAM=$rowdtr->dtrTIMEOUTAM;
                                              $inAm = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inAm);
                                              sscanf($inAm, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $a = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outAM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outAM);
                                              sscanf($outAM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $b = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total = $b -$a ;
                                              echo $echototal= gmdate("H:i:s", $total);
                                              $x=1;
                                      } else if ((!empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&!empty($rowdtr->dtrTIMEOUTPM))) {
                                              $inPM+$rowdtr->dtrTIMEINPM;
                                              $outPM=$rowdtr->dtrTIMEOUTPM;
                                              $inPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inPM);
                                              sscanf($inPM, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $a = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outPM);
                                              sscanf($outPM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $b = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total = $b -$a ;
                                              echo $echototal= gmdate("H:i:s", $total);
                                              $x=1;
                                      } else if ((empty($rowdtr->dtrTIMEINAM)&&empty($rowdtr->dtrTIMEOUTAM)) && (!empty($rowdtr->dtrTIMEINPM)&&!empty($rowdtr->dtrTIMEOUTPM))) {
                                              $inPM=$rowdtr->dtrTIMEINPM;
                                              $outPM=$rowdtr->dtrTIMEOUTPM;
                                              $inPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inPM);
                                              sscanf($inPM, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $a = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outPM);
                                              sscanf($outPM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $b = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total =$b-  $a;
                                              echo $echototal= gmdate("H:i:s", $total);
                                        $x=1;
                                      }else{
                                              $inAm=$rowdtr->dtrTIMEINAM;
                                              $inAm = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inAm);
                                              sscanf($inAm, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $a = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outAM=$rowdtr->dtrTIMEOUTAM;
                                              $outAM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outAM);
                                              sscanf($outAM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $b = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total1 = $b -$a ;


                                              $inPM=$rowdtr->dtrTIMEINPM;
                                              $outPM=$rowdtr->dtrTIMEOUTPM;
                                              $inPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $inPM);
                                              sscanf($inPM, "%d:%d:%d", $hours, $minutes, $seconds);
                                              $c = $hours * 3600 + $minutes * 60 + $seconds;
                                              $outPM = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $outPM);
                                              sscanf($outPM, "%d:%d:%d", $hours2, $minutes2, $seconds2);
                                              $d = $hours2 * 3600 + $minutes2 * 60 + $seconds2;
                                              $total2 =$d-  $c;

                                              $total =$total1+$total2;
                                             
                                               echo $echototal= gmdate("H:i:s", $total);
                                              $x=1;
                                              }   
                                           $sumtotal234=$sumtotal234+$total ;  
                        ?>
                      </td>
                    </tr>

<?php } ?>          
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td class="align-middle text-end pe-0" >
                        <h4>
                        
                         <?php 
                         
                         $sumtotal2345 =  $sumtotal234/3600;

                            $incomplete2 = 486 -$sumtotal2345;
                            $completesum2 = ($sumtotal2345 / 486) *100;
                            $incompletesum2 = ($incomplete2 /  486) *100;
echo ($sumtotal234/60)/60;
                          ?>
                          
                        </h4></td>
                    </tr>          
                  </tbody>
                </table>
              </div>
              <div class="d-flex align-items-center justify-content-between py-2 fs--1 mb-1">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="">1 to 5 <span class="text-600"> Items of </span> 15</p><a class="fw-semi-bold" href="index.php#!" data-list-view="*">View all<span class="fas fa-angle-right ms-2" data-fa-transform="down-1"></span></a>
              </div>
                              
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
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/chart/chart.min.js"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../vendors/leaflet/leaflet.js"></script>
    <script src="../vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="../vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
   <!--      <script src="../assets/js/ecommerce-dashboard.js"></script> -->
  </body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="../code/highcharts.js"></script>
<script src="../code/modules/exporting.js"></script>
<script src="../code/modules/export-data.js"></script>
<script src="../code/modules/accessibility.js"></script>
 <script type="text/javascript" src="../googlechart/CalendarChart.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["calendar"]});
      google.charts.setOnLoadCallback(drawChart);

   function drawChart() {
       var dataTable = new google.visualization.DataTable();
       dataTable.addColumn({ type: 'date', id: 'Date' });
       dataTable.addColumn({ type: 'number', id: 'Submitted' });
       dataTable.addRows([
          
         <?php

            $journal2=mysqli_query($con,"SELECT studentjournal.*,student.* from studentjournal,student where studentjournal.studentID = student.studentID")or die(mysqli_error($con));
              while($row2=mysqli_fetch_object($journal2))
              {
               if ($rowstudent->StudentID == $row2->StudentID ) { ?>
                  [ new Date(<?= date("Y,m,d",strtotime($row2->journaldate."-1 month"));?>), 0 ],
              <?php } }?>
        ]);

       var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

       var options = {
         title: "Journal Daily Submitted",
         
       };

       chart.draw(dataTable, options);
   }
    </script>
 <?php 
  $count2=0;
            $count=0;
            $total=162;
            $incomplete =0;
            $complete = 0;
            $incompletesum = 0;
              
              $journal=mysqli_query($con,"SELECT studentjournal.*,student.* from studentjournal,student where studentjournal.studentID = student.studentID")or die(mysqli_error($con));
              while($row=mysqli_fetch_object($journal))
              {
               if ($rowstudent->StudentID == $row->StudentID ) {
                   # code...
                 $count++;
               }}
              ?>
             
             <?php 

                $counth=$count;


                $incomplete = 61 - $counth;
                $completesum = ($count /  $total) *100;
                $incompletesum = ($incomplete /  $total) *100;

?>


<script type="text/javascript">
// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Number of Daily Journal Submitted'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Journal',
        colorByPoint: true,
        data: [{
            name: 'Submitted: <?= $counth;?> Journal',
            y: <?=$completesum?>
        }, {
            name: 'Not Completed: <?= $incomplete;?> Journal',
            y: <?=$incompletesum?>
        }]
    }]
});
    </script>

      <script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Number of Hours Completed',
        
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
   plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        type: 'pie',
        name: 'Hours',
        innerSize: '50%',
        data: [
            ['Taken: <?= round($sumtotal2345);?> Hours', <?= $completesum2;?>],
            ['Remaining: <?= round($incomplete2);?> Hours', <?= $incompletesum2;?>]
        ]
    }]
});

    </script>