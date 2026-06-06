
<?php        
include("../1connection.php");
?>
 <?php 
          $studentID = $_SESSION['SID'];
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
<input type="button" name="btnprint" value="Print" onclick="PrintMe('DivID')"/>
     <!-- <input name="b_print" type="button" class="ipt" onClick="printdiv('h');" value=" Print ">
 <a href="../form/journal.php?studentID=<?=$studentID?>" style="background-color:#3b8beb;color:green;font-weight: bolder;border-color: green solid 3px;" class="btn  btn-sm btn-success" data-remote="" data-size="modal-lg" title="Edit">Download</a> -->
    <div id="DivID" >
    
      <?php 
        

         $studentID = $_SESSION['SID'];
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
                <img src="../picture/1.png" width="80px" height="80px">
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

          

          <?php 
                }   
            ?>
        </div> </div>
 </center>
 <p clear="all" style="page-break-before:always" /></p>
  </body>
</html>



<script language="javascript">
function PrintMe(DivID) {
var disp_setting="toolbar=yes,location=no,";
disp_setting+="directories=yes,menubar=yes,";
disp_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";
   var content_vlue = document.getElementById(DivID).innerHTML;
   var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"');
   docprint.document.write('"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">');
   docprint.document.write('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">');
   docprint.document.write('<head><title>My Title</title>');
   docprint.document.write('<style type="text/css">body{ margin:0px;');
   docprint.document.write('font-family:verdana,Arial;color:#000;');
   docprint.document.write('font-family:Verdana, Geneva, sans-serif; font-size:12px;}');
   docprint.document.write('a{color:#000;text-decoration:none;} </style>');
   docprint.document.write('</head><body onLoad="self.print()"><center>');
   docprint.document.write(content_vlue);
   docprint.document.write('</center></body></html>');
   docprint.document.close();
   docprint.focus();
}
</script>
