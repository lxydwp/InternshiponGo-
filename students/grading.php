<div class="col-12 col-xxl-6">
                    <div class="card ">
                      <div class="card-body">
                        <h2 class="">University Rating System</h2>
                        <table class="table table-bordered border-primary">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">CRITERIA</th>
						      <th scope="col">PERCENTAGE</th>
						      <th scope="col">GRADE</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>OJT Narrative Report </td>
						      <td data-bs-toggle="tooltip" data-bs-placement="top" title="75 to 100 can earn points ">15% <span data-feather="info" class="text-primary"></span></td>
						      <td>
						      		<?php 
						      		$onrs=0; 
						      		$onr=mysqli_query($con,"SELECT * from ojtnarrativereport where OJTNarrativeReportIDSTUDENTID = '$studentID'")or die(mysqli_error($con));
            						$rowonr=mysqli_fetch_object($onr); 
            						if (!empty($rowonr)) {
            							$onrs=$rowonr->OJTNarrativeReportIDPOINTS;
            						}

            						echo $onrs."(";

            						echo $totalonrs = ((($onrs/100)*100)*0.15); 
            						echo ")";

            						?>

						      	
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Student Trainee Journal </td>
						      <td data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">15% <span data-feather="info" class="text-primary"></span></td>
						      <td>
						      <?php $countjournal=mysqli_query($con,"SELECT * FROM studentjournal where studentID ='$studentID'")or die(mysqli_error($con)); 
								$rowcountjournal= mysqli_num_rows( $countjournal );

								if (!empty($rowcountjournal)) {
									$journals1 = $rowcountjournal/61;
									$journals2 = $journals1*100;
									$journals3=$journals2*0.15;
								}else{
									$journals3=0;
								}

								?>
								<?= $journals3; ?>	
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td colspan="">Attendance & Participation<BR>
								(In Pre & Post Seminars and other activities)</td>
								<td data-bs-toggle="tooltip" data-bs-placement="top" title=" 75 to 100 can earn points ">10% <span data-feather="info" class="text-primary"></span></td>
						      <td>
						      		<?php 
						      		$aps=0; 
						      		$ap=mysqli_query($con,"SELECT * from attendanceparticipation where AttendanceParticipationSTUDENTID = '$studentID'")or die(mysqli_error($con));
            						$rowap=mysqli_fetch_object($ap); 
            						if (!empty($rowap)) {
            							$aps=$rowap->AttendanceParticipationPOINTS;
            						}

            						echo $aps;
            						echo "(";

            						echo $totalaps = ((($aps/100)*100)*0.10);
            						echo ")";

            						?>

						      </td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td colspan="">Performance Evaluation Report<BR>
								(from Cooperating Agency)</td>
								<td data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">50% <span data-feather="info" class="text-primary"></span></td>
						      <td>
						      	 <?php
                            $A1=0;
                            $technicalskills=mysqli_query($con,"SELECT * from technicalskills where TechnicalSkillsSTUDENTID = '$studentID'")or die(mysqli_error($con));
                                $rowtechnicalskills=mysqli_fetch_object($technicalskills);
                              if (empty($rowtechnicalskills)) {
                              }else{ 
                                  $total=$rowtechnicalskills->A1+$rowtechnicalskills->A2+$rowtechnicalskills->A3+$rowtechnicalskills->A4+$rowtechnicalskills->A5+$rowtechnicalskills->A6+$rowtechnicalskills->A7+$rowtechnicalskills->A8;;
                               $A1=$total/8;
                                } 
                            ?>  
                              <?php
                            $B1=0;
                            $professionalskills=mysqli_query($con,"SELECT * from professionalskills where professionalskillsSTUDENTID = '$rowstudent->StudentID'")or die(mysqli_error($con));
                                $rowprofessionalskills=mysqli_fetch_object($professionalskills);
                              if (empty($rowprofessionalskills)) {
                              }else{ 
                                  $total=$rowprofessionalskills->B1+$rowprofessionalskills->B2+$rowprofessionalskills->B3+$rowprofessionalskills->B4+$rowprofessionalskills->B5+$rowprofessionalskills->B6;
                               		$B1=$total/6;
                                } 
                            ?> 
                              <?php $per1= ($A1+$B1)/2;
                               		$per2=$per1/5.00;
                              		$per3=$per2*100;
                              		$per4=$per3*0.5;
                              ?> 
                              <?= $per4; ?>
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">5</th>
						      <td colspan="">Field Observation by the Coordinator<BR>
								(from Cooperating Agency)</td>
								<td data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">10% <span data-feather="info" class="text-primary"></span></td>
						      <td>
						      	 <?php
                            $C1=0;
                            $p4=0;
                            $personality=mysqli_query($con,"SELECT * from personality where personalitySTUDENTID = '$rowstudent->StudentID'")or die(mysqli_error($con));
                                $rowpersonality=mysqli_fetch_object($personality);
                              if (empty($rowpersonality)) {
                              }else{ 
                                  $total=$rowpersonality->C1+$rowpersonality->C2+$rowpersonality->C3+$rowpersonality->C4+$rowpersonality->C5+$rowpersonality->C6+$rowpersonality->C7+$rowpersonality->C8;
                                $p1=$C1=$total/8;
                                $p2=$p1/5.00;
                                $p3=$p2*100;
                                $p4=$p3*0.1;
                                } 
                            ?>  
                            <?= $p4; ?> 
						      </td>
						    </tr>
						    <tr>
						      <th colspan="2" scope="row">Total</th>
						      <td colspan="" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">100% <span data-feather="info" class="text-primary"></span></td>
								
						      <td>
						      	<?php echo $xxxx=$p4+$per4+$totalaps+$totalonrs+$journals3;?>
						      </td>
						    </tr>
						  </tbody>
						</table>
                      </div>
                   </div>
                 </div>