
<?php        
include("../1connection.php");
include("1session.php");

?>
 <?php 
          $student=mysqli_query($con,"SELECT student.* from student where StudentID = '$studentID'")or die(mysqli_error($con));
          $row1=mysqli_fetch_object($student);

     ?>

<!DOCTYPE html>
<html
  xmlns:v="urn:schemas-microsoft-com:vml" 
        xmlns:o="urn:schemas-microsoft-com:office:office" 
        xmlns:w="urn:schemas-microsoft-com:office:word" 
        xmlns="http://www.w3.org/TR/REC-html40"> 
         
        <head> 
        <meta http-equiv=Content-Type content="text/html; charset=utf-8"> 
        <meta name=ProgId content=Word.Document> 
        <meta name=Generator content="Microsoft Word 9"> 
        <meta name=Originator content="Microsoft Word 9"> 
        <!--[if !mso]> 
        <style> 
        v\:* {behavior:url(#default#VML);} 
        o\:* {behavior:url(#default#VML);} 
        w\:* {behavior:url(#default#VML);} 
        .shape {behavior:url(#default#VML);} 
        </style> 
        <![endif]--> 
        <title></title>
        <!--[if gte mso 9]><xml> 
         <w:WordDocument> 
          <w:View>Print</w:View> 
          <w:DoNotHyphenateCaps/> 
          <w:PunctuationKerning/> 
          <w:DrawingGridHorizontalSpacing>9.35 pt</w:DrawingGridHorizontalSpacing> 
          <w:DrawingGridVerticalSpacing>9.35 pt</w:DrawingGridVerticalSpacing> 
         </w:WordDocument> 
        </xml><![endif]--> 
        <style> 
        <!-- 
         /* Font Definitions */ 
        @font-face 
            {font-family:Verdana; 
            panose-1:2 11 6 4 3 5 4 4 2 4; 
            mso-font-charset:0; 
            mso-generic-font-family:swiss; 
            mso-font-pitch:variable; 
            mso-font-signature:536871559 0 0 0 415 0;} 
         /* Style Definitions */ 
        p.MsoNormal, li.MsoNormal, div.MsoNormal 
            {mso-style-parent:""; 
            margin:0in; 
            margin-bottom:.0001pt; 
            mso-pagination:widow-orphan; 
            font-size:7.5pt; 
                mso-bidi-font-size:8.0pt; 
            font-family:"Verdana"; 
            mso-fareast-font-family:"Verdana";} 
        p.small 
            {mso-style-parent:""; 
            margin:0in; 
            margin-bottom:.0001pt; 
            mso-pagination:widow-orphan; 
            font-size:1.0pt; 
                mso-bidi-font-size:1.0pt; 
            font-family:"Verdana"; 
            mso-fareast-font-family:"Verdana";} 
        @page Section1 
            {size:8.5in 11.0in; 
            margin:1.0cm 0.5cm 0.5cm 0.5cm; 
            mso-header-margin:.5in; 
            mso-footer-margin:.5in; 
            mso-paper-source:0;} 
        div.Section1 
            {page:Section1;} 
        --> 
        </style> 
        <!--[if gte mso 9]><xml> 
         <o:shapedefaults v:ext="edit" spidmax="1032"> 
          <o:colormenu v:ext="edit" strokecolor="none"/> 
         </o:shapedefaults></xml><![endif]--><!--[if gte mso 9]><xml> 
         <o:shapelayout v:ext="edit"> 
          <o:idmap v:ext="edit" data="1"/> 
         </o:shapelayout></xml><![endif]--> 
<style>
    @media print {
      /* top-level divs with ids */
      body > div[h] {
        page-break-before: always;
      }
    }
  </style>
    



</head>

  <body>
<center>
  <input type="button" onclick="printDiv('h')" value="print a div!" />
     <!-- <input name="b_print" type="button" class="ipt" onClick="printdiv('h');" value=" Print ">
 <a href="../form/journal.php?studentID=<?=$studentID?>" style="background-color:#3b8beb;color:green;font-weight: bolder;border-color: green solid 3px;" class="btn  btn-sm btn-success" data-remote="" data-size="modal-lg" title="Edit">Download</a> -->
    <div id="h" >
    
      <?php 
        


              $journal=mysqli_query($con,"SELECT studentjournal.* from studentjournal where StudentID = '$studentID'")or die(mysqli_error($con));
              while($row=mysqli_fetch_object($journal))
              {
               
              ?>

        <p style="font-size: 8px; position: absolute; right: 80px;">FM-AA-INT-11<br>
Rev. 0<br>
01-Feb-2017</p>

   <br>
  <br>
          <table style="width: 660px;border-collapse:collapse;">
            <tr>
              <td style="width: 20%;height:100px;border: solid black 2px;margin: 0;padding: 0;">
                <center>
                <img src="../assets/img/1.png" width="80px" height="80px">
                </center>
              </td>
               <td style="width: 80%;height:100px;border: solid black 2px;margin: 0;padding: 0;text-align: center;">
                <p style="font-size: 22px;font-weight: bold;margin: 0px;">DAILY JOURNAL</p>
                 <p style="font-size: 12px;margin: 0px;">PANGASINAN STATE UNIVERSITY</p>
                 <p style="font-size: 12px;margin: 0px;">LINGAYEN CAMPUS</p>

              </td>
            </tr>
         
          </table>
          <table style="width: 660px;border-collapse:collapse;">
              <tr>
              <td style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">ACADEMIC YEAR</p></td>
             <td colspan="3" style="width: 80%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; ">2020</td>
            </tr>
               <tr>
              <td style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 11px;font-weight: bold;margin: 0px;">NAME OF STUDENT-INTERN</p></td>
             <td colspan="3" style="width: 80%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; "><?=$row1->firstname." ".$row1->middlename." ".$row1->lastname;?></td>
            </tr>
               <tr>
              <td style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">NAME OF AGENCY</p></td>
             <td colspan="3" style="width: 80%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; "><?=$row->agency?></td>
            </tr>
               <tr>
              <td  style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">DEPARTMENT</p></td>
             <td colspan="3" style="width: 80%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; "><?=$row->department?></td>

            </tr>
               <tr>
              <td style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">DATE</p></td>
             <td style="width: 40%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; "><?=$row->journaldate?></td>
             <td style="width: 20%;height:20px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; "> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">NUMBER OF HOURS</p></td>
             <td style="width: 40%;height:20px;border: solid black 2px;margin: 0;padding: 0;text-align: center;border-top:0px; "><?=$row->numberofhours?></td>
            </tr>
             <tr>
              <td colspan="4" style="height:150px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; vertical-align: top;"> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">OBJECTIVES (Identify objectives for the week)
                  <br><br>
                  <?=$row->objectives?>
                </p></td>
         
            </tr>
             <tr>
              <td colspan="4" style="height:150px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; vertical-align: top;"> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">REFLECTION FROM THE OBJECTIVES<br>
                - How they will attain or meet the objectives<br>
                - How these objectives will help them to become more effective and efficient<br>
                  <br><br>
                  <?=$row->reflection?>
                </p></td>
         
            </tr>
             <tr>
              <td colspan="4" style="height:150px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; vertical-align: top;"> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">ACCOMPLISHMENT FOR THE DAY (actual tasks accomplished)
                    <br><br>
                  <?=$row->accomplishment?>
                </p></td>
         
            </tr>
             <tr>
              <td colspan="4" style="height:150px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; vertical-align: top;"> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">REALIZATION ABOUT THE TASK/S
               <br>- How they will become efficient and effective on their specific task or job
              <br> - What are the skills and values they have learned/developed from their assigned tasks/jobs
               <br>- What knowledge they have acquired and shared during the practicum
              <br> - What are the importance of the assigned tasks/jobs in the efficient and effective flow of operation of the establishment/firm/company
                <br><br>
                  <?=$row->realization?>
                </p></td>
         
            </tr>
             <tr>
              <td colspan="4" style="height:100px;border: solid black 2px;margin: 0;padding: 0;border-top:0px; vertical-align: top;"> 
                <p style="font-size: 12px;font-weight: bold;margin: 0px;">PREPARED BY:
              

                </p>
                 <center>
                
               
                <!-- <img src="<?php echo "../picture/".$row1->esignature;?>" width="50" height="50" style="position: relative; margin-bottom: 0px; padding-bottom: 0px;"> -->
                <br>
                  <?php
echo strtoupper($row1->firstname." ".$row1->middlename." ".$row1->lastname);
?>         
               
                <p style="font-size: 12px;font-weight: bold;margin-top:0px; padding-top: 0px;">

                  ______________________________<br>
                    Signature of Student-Intern
</center>
                </p>
                 
                 
              </td>
         
            </tr>
          </table>

        <p clear="all" style="page-break-before:always" /></p>  

          <?php 
                }   
            ?>
        </div> </div>
 </center>
 
  </body>
</html>


 <script language="javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>