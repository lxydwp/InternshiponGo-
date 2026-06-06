<?php
include('../1connection.php');

if(isset($_POST['btnapplied']))
        { 	
        	$agencyID=$_POST['agencyID'];
        	$workID=$_POST['workID'];
        	$studentID=$_POST['studentID'];

        	date_default_timezone_set('Asia/Manila');
            $date = date('F d, Y', time());

            $INSERTSUBJECTS=mysqli_query($con,"INSERT into applicant ( 
             	applicantWORK,
             	applicantSTUDENTID,
             	applicantAGENCYID,
             	applicantSTATUS,
             	applicantDATE
            ) VALUES(
             	'$workID',
             	'$studentID',
             	'$agencyID',
             	'Applied',
             	'$date'
            )")or die(mysqli_error($con));

            if($INSERTSUBJECTS)
            {
                echo"<script type='text/javascript'>window.location.replace('agency.php');alert('Succesfuly Applied');</script>";  
            }
}
if(isset($_POST['btnsavejournal']))
        {
         
            $studentID = $_POST['studentID'];
            $txtschool = $_POST['txtschool'];
            $txtagency=$_POST['txtagency'];
            $txtdepartment=$_POST['txtdepartment'];
            $txtdate=$_POST['txtdate'];
            $txthours=$_POST['txthours'];
            $txtobjectives = $_POST['txtobjectives'];
            $txtreflection = $_POST['txtreflection'];
            $txtaccomplishment = $_POST['txtaccomplishment'];
            $txtrealization = $_POST['txtrealization'];
            $add=mysqli_query($con,"INSERT into studentjournal(
                studentID,
                agency,
                department,
                journaldate,
                numberofhours,
                objectives,
                reflection,
                accomplishment,
                realization,
                school
            ) values(
                '$studentID',
                '$txtagency',
                '$txtdepartment',
                '$txtdate',
                '$txthours',
                '$txtobjectives',
                '$txtreflection',
                '$txtaccomplishment',
                '$txtrealization',
                '$txtschool'
            )")or die(mysqli_error($con));
         
            if($add)
            {
               $_SESSION['mess']='add';
                echo"<script type='text/javascript'>window.location.replace('journal.php');alert('Successfully Saved!')</script>";  
            
            }
}

if(isset($_POST['btneditjournal']))
        {
            $journalID = $_POST['journalID'];
            $txtobjectives = $_POST['txtobjectives'];
            $txtreflection = $_POST['txtreflection'];
            $txtaccomplishment = $_POST['txtaccomplishment'];
            $txtrealization = $_POST['txtrealization'];

            $update=mysqli_query($con,"UPDATE studentjournal SET 
                    objectives = '$txtobjectives',
                    reflection = '$txtreflection',
                    accomplishment = '$txtaccomplishment',
                    realization='$txtrealization'
                WHERE 
                    journalID ='$journalID'  ");

            if($update)
                {
                
                    echo"<script type='text/javascript'>window.location.replace('editjournal.php?journalID=$journalID');alert('Successfully Edited!')</script>";  
                
                }
}
if(isset($_POST['btnrequestform']))
        {
         
            
            $form=$_POST['txtform'];
            $student=$_POST['txtstudent'];
            $name=$_POST['txtname'];
            $nameform=$_POST['txtdetails'];
            $seen = 0;
             date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());

            $requestform=mysqli_query($con,"INSERT into permission(id_files,id_students,name_student,request_date,seen,name_form) values('$form','$student','$name','$date','$seen','$nameform')")or die(mysqli_error($con));
         
            if($requestform)
            {
               
                echo"<script type='text/javascript'>window.location.replace('download.php');alert('Request Submitted')</script>";  
            
            }
}
if(isset($_POST['btnrequestlink']))
        {
         
            
            $form=$_POST['txtlink'];
            $student=$_POST['txtstudent'];
            $name=$_POST['txtname'];
            $nameform=$_POST['txtdetails'];
            $seen = 0;
             date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());

            $requestform=mysqli_query($con,"INSERT into permission(id_link,id_students,name_student,request_date,seen,name_form) values('$form','$student','$name','$date','$seen','$nameform')")or die(mysqli_error($con));
         
            if($requestform)
            {
               
                echo"<script type='text/javascript'>window.location.replace('download.php');alert('Request Submitted')</script>";  
            
            }
}

if(isset($_POST['btndownload']))
        {
             
            $formID = $_POST['btndownload'];
             $txtfirstname=$_POST['txtname'];
            $form = mysqli_query($con,"SELECT formupload.* from formupload where formID = '$formID'")or die(mysqli_error($con));
            $row = mysqli_fetch_object($form);
            $selectdownload = mysqli_query($con,"SELECT studentdownload. * from studentdownload where studentID = '$studentID' and formID = '$formID'")or die(mysqli_error($con));
            $count = mysqli_fetch_object($selectdownload);
           
            $studentID = $_SESSION['SID'];
            $disabled='YES';
            
              date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());

   

            if($count == 0){
                $add = mysqli_query($con,"INSERT into studentdownload(studentID,disabled,formID,count,date,name) values('$studentID','$disabled','$formID','1','$date','$txtfirstname')");
                
                  echo"<script type='text/javascript'>window.location.replace('files.php');alert('Successfully Updated!')</script>"; 
                  
                   
            }
            else
            {
                 $add2=mysqli_query($con,"UPDATE studentdownload set  disabled = 'YES',count = count+1 where downloadID = '$row->downloadID'")or die(mysqli_error($con));
                    echo"<script type='text/javascript'>window.location.replace('files.php');alert('Successfully Updated!')</script>";  
            
            }

             $sql1 = "SELECT * FROM formupload WHERE formID=$formID";
            $result1 = mysqli_query($con, $sql1);

            $file = mysqli_fetch_assoc($result1);
            $filepath = '../Form/admin/'. $file['formname'];

            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('../Form/admin/' . $file['formname']));
                readfile('../Form/admin/' . $file['formname']);

            }

     
         header("location:download.php");
 }

if(isset($_POST['btnupdateinfo']))
        {
            $studentID = $_POST['studentID'];
            $gender = $_POST['gender'];
            $number = $_POST['number'];
            $birthdate = $_POST['birthdate'];
            $address = $_POST['address'];
            $civilstatus = $_POST['civilstatus'];
            $religion = $_POST['religion'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];
            $change = date("F d, Y",strtotime($birthdate));

            $update=mysqli_query($con,"UPDATE student SET 
                    gender = '$gender',
                    contactnumber = '$number',
                    birthdate = '$change',
                    address='$address',
                    civilstatus = '$civilstatus',
                    religion = '$religion',
                    height = '$height',
                    weight='$weight'
                WHERE 
                    StudentID ='$studentID'  ");

            if($update)
                {
                
                    echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated!')</script>";  
                
                }
}

if(isset($_POST['btnupdateimage']))
        {   
           
           $studentID=$_POST['studentID'];
            date_default_timezone_set('Asia/Manila');
            $date = date('F d, Y', time());
            $year = date('Y');

            if(isset($_FILES["pic"]['name'])&&$_FILES["pic"]['name']!='')
            {
                $fileName = $_FILES["pic"]['name'];
                $tmpName  = $_FILES["pic"]['tmp_name']; 
                $fileSize = $_FILES["pic"]['size'];
                $fileType = $_FILES["pic"]['type'];

                function getExtension($str)
                         {
                             $i = strrpos($str,".");
                             if (!$i) { return ""; }
                             $l = strlen($str) - $i;
                             $ext = substr($str,$i+1,$l);
                             return $ext;
                         }
                    $extension = getExtension($fileName);
                    $extension = strtolower($extension);
                    $final_filename = time().".".$extension;
                    $copied = move_uploaded_file($tmpName, "../assets/img/user/".$final_filename)or die();
            }
            else
            {
                    $final_filename=$_POST['picturea'];
            } 

            $update=mysqli_query($con,"UPDATE student set 
                picture = '$final_filename'
            WHERE 
                studentID='$studentID'
            ")or die(mysqli_error($con));
            
            if($update)
            {
                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Succesfully Image Updated!');</script>";  
            }
}
if(isset($_POST['btnupdatename']))
        {
            $studentID = $_POST['studentID'];
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $section = $_POST['section'];
            $change = date("F d, Y",strtotime($birthdate));

            $update=mysqli_query($con,"UPDATE student SET 
                    firstname = '$fname',
                    middlename = '$mname',
                    lastname = '$lname',
                    section='$section'
                WHERE 
                    StudentID ='$studentID'  ");

            if($update)
                {
                
                    echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated!')</script>";  
                
                }
}
if(isset($_POST['btnupdatesecurity']))
        {
            $studentID = $_POST['studentID'];
            $password = $_POST['password'];

            $update=mysqli_query($con,"UPDATE student SET 
                    password = '$password'
                WHERE 
                    StudentID ='$studentID'  ");

            if($update)
                {
                
                    echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated!')</script>";  
                
                }
}
if(isset($_POST['btnsecurityquestions']))
        { 
            $questions=$_POST['questions'];
            $answer=$_POST['answer'];
            $studentID=$_POST['studentID'];
            date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());

            $securityQA=mysqli_query($con,"SELECT * from securityquestions where securityquestionsUSERID = '$studentID' and securityquestionsUSERTYPE = 'student'")or die(mysqli_error($con));
            $rowsecurityQA=mysqli_fetch_object($securityQA);

            if (empty($rowsecurityQA)) {
                 $add=mysqli_query($con,"INSERT into securityquestions(
                    securityquestionsA,
                    securityquestionsQ,
                    securityquestionsUSERID,
                    securityquestionsUSERTYPE
                ) values(
                    '$answer',
                    '$questions',
                    '$studentID',
                    'student'
                )")or die(mysqli_error($con));

                     if($add)
                            {
                                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Added Security Questions')</script>";  
                            }

            }else{
                $update=mysqli_query($con,"UPDATE securityquestions SET 
                        securityquestionsA = '$answer',
                        securityquestionsQ = '$questions'
                    WHERE 
                        securityquestionsUSERID ='$studentID' and securityquestionsUSERTYPE = 'student'");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated Security Questions!')</script>";  
                    
                    }
            }   
}
if(isset($_POST['btnWorkExperience']))
        { 
            $date=$_POST['date'];
            $employer=$_POST['employer'];
            $position=$_POST['position'];
            $studentID=$_POST['studentID'];

            $workexperience=mysqli_query($con,"SELECT * from workexperience")or die(mysqli_error($con));
            $rowworkexperience= mysqli_num_rows( $workexperience );
            $rowworkexperienceplus = $rowworkexperience+1;
            $text='workexperience'.$rowworkexperienceplus;
           
                 $add=mysqli_query($con,"INSERT into workexperience(
                    workexperienceINCLUSIVEDATE,
                    workexperienceEMPLOYER,
                    workexperiencePOSITION,
                    workexperienceSTUDENTID,
                    workexperienceACTION
                ) values(
                    '$date',
                    '$employer',
                    '$position',
                    '$studentID',
                    '$text'

                )")or die(mysqli_error($con));

                     if($add)
                            {
                                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Added Work Experience!')</script>";  
                            }           
}
if(isset($_POST['btnupdateworkexperience'])){ 

            $date=$_POST['date'];
            $employer=$_POST['employer'];
            $position=$_POST['position'];
            $workexperienceID=$_POST['workexperienceID'];

                $update=mysqli_query($con,"UPDATE workexperience SET 
                        workexperienceINCLUSIVEDATE = '$date',
                        workexperienceEMPLOYER = '$employer',
                        workexperiencePOSITION = '$position'
                    WHERE 
                        workexperienceID ='$workexperienceID' ");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated Work Experience!')</script>";  
                    
                    }
             
}

if(isset($_POST['btndeleteworkexperience'])){ 


            $workexperienceID=$_POST['workexperienceID'];

                $update=mysqli_query($con,"DELETE FROM workexperience
                    WHERE 
                        workexperienceID ='$workexperienceID' ");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Deleted Work Experience!')</script>";  
                    
                    }
             
}

if(isset($_POST['btntrainings']))
        { 
            $date=$_POST['date'];
            $title=$_POST['title'];
            $studentID=$_POST['studentID'];

            $trainingscount=mysqli_query($con,"SELECT * from trainings")or die(mysqli_error($con));
            $rowtrainingscount= mysqli_num_rows( $trainingscount );
            $rowtrainingscountplus = $rowtrainingscount+1;
            $text='trainings'.$rowtrainingscountplus;
           
                 $add=mysqli_query($con,"INSERT into trainings(
                    trainingsINCLUSIVEDATE,
                    trainingsTITLE,
                    trainingsSTUDENTID,
                    trainingsACTION
                ) values(
                    '$date',
                    '$title',
                    '$studentID',
                    '$text'

                )")or die(mysqli_error($con));

                     if($add)
                            {
                                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Added Trainings & Seminar!')</script>";  
                            }           
}
if(isset($_POST['btnupdatetrainings']))
        { 
            $date=$_POST['date'];
            $title=$_POST['title'];
            $trainingsID=$_POST['trainingsID'];

                $update=mysqli_query($con,"UPDATE trainings SET 
                        trainingsINCLUSIVEDATE = '$date',
                        trainingsTITLE = '$title'
                    WHERE 
                        trainingsID ='$trainingsID' ");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated Trainings & Seminar!')</script>";  
                    
                    }
                    
} 

if(isset($_POST['btndeletetrainings'])){ 


            $trainingsID=$_POST['trainingsID'];

                $update=mysqli_query($con,"DELETE FROM trainings
                    WHERE 
                        trainingsID ='$trainingsID' ");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Deleted Trainings & Seminar!')</script>";  
                    
                    }
             
} 
if(isset($_POST['btneducationalbackground']))
        { 
            $elevel=$_POST['elevel'];
            $edate=$_POST['edate'];
            $eschool=$_POST['eschool'];
            $hlevel=$_POST['hlevel'];
            $hdate=$_POST['hdate'];
            $hschool=$_POST['hschool'];
            $clevel=$_POST['clevel'];
            $cdate=$_POST['cdate'];
            $cschool=$_POST['cschool'];
            $extra=$_POST['extra'];
            $studentID=$_POST['studentID'];
            date_default_timezone_set('Asia/Manila');
            $date = date('m/d/Y h:i:s a', time());

            $securityQA=mysqli_query($con,"SELECT * from educationalbackground where studentID = '$studentID'")or die(mysqli_error($con));
            $rowsecurityQA=mysqli_fetch_object($securityQA);

            if (empty($rowsecurityQA)) {
                 $add=mysqli_query($con,"INSERT into educationalbackground(
                    elementaryLEVEL,
                    elementarySCHOOL,
                    elementaryDATE,
                    hightschoolLEVEL,
                    hightschoolSCHOOL,
                    hightschoolDATE,
                    collegeLEVEL,
                    collegeSCHOOL,
                    collegeDATE,
                    studentID,
                    extracirricular
                ) values(
                    '$elevel',
                    '$eschool',
                    '$edate',
                    '$hlevel',
                    '$hschool',
                    '$hdate',
                    '$clevel',
                    '$cschool',
                    '$cdate',
                    '$studentID',
                    '$extra'
                )")or die(mysqli_error($con));

                     if($add)
                            {
                                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Added Educational Background!')</script>";  
                            }

            }else{
                $update=mysqli_query($con,"UPDATE educationalbackground SET 
                        elementaryLEVEL = '$elevel',
                        elementarySCHOOL= '$eschool',
                        elementaryDATE= '$edate',
                        hightschoolLEVEL= '$hlevel',
                        hightschoolSCHOOL= '$hschool',
                        hightschoolDATE= '$hdate',
                        collegeLEVEL= '$clevel',
                        collegeSCHOOL= '$cschool',
                        collegeDATE= '$cdate',
                        extracirricular= '$extra'
                    WHERE 
                        studentID ='$studentID' ");

                if($update)
                    {
                    
                        echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Updated Educational Background!')</script>";  
                    
                    }
            }   
}   
if(isset($_POST['forgotpass'])){ 
            $number=$_POST['number'];

            if (!empty($number)) {
                
                echo"<script type='text/javascript'>window.location.replace('forgotpassword.php?number=$number');</script>";
            }else{

                echo"<script type='text/javascript'>window.location.replace('login.php');alert('Error!')</script>";
            }
              
}
if(isset($_POST['resetme'])){ 
            $number=$_POST['number'];
            $answer=$_POST['answer'];
            $studentID=$_POST['studentID'];

            $qa=mysqli_query($con,"SELECT * from securityquestions where securityquestionsUSERTYPE = 'student' and securityquestionsUSERID = '$studentID'")or die(mysqli_error($con));
            $rowqa=mysqli_fetch_object($qa);
            $code=rand();

            if (!empty($rowqa)) {

                if ($rowqa->securityquestionsA == $answer) {

                  $update=mysqli_query($con,"UPDATE student SET 
                        code = '$code'
                    WHERE 
                        StudentID ='$studentID' ");
                    
                 echo"<script type='text/javascript'>window.location.replace('resetpassword.php?studentID=$studentID&code=$code');alert('correct!');</script>";

                }else{
                 echo"<script type='text/javascript'>window.location.replace('forgotpassword.php?number=$number');alert('Error!');</script>";   
                }
                
                
            }else{

                echo"<script type='text/javascript'>window.location.replace('forgotpassword.php?number=$number');alert('Error!');</script>";
            }
              
}

if(isset($_POST['resetme2'])){ 
            $pass=$_POST['pass'];
            $code=$_POST['code'];
            $studentID=$_POST['studentID'];

          
            if (!empty($pass) || !empty($code)||!empty($studentID)) {

              

                  $update=mysqli_query($con,"UPDATE student SET 
                        password = '$pass'
                    WHERE 
                        StudentID ='$studentID' and code='$code' ");
                    
                 echo"<script type='text/javascript'>window.location.replace('login.php');alert('Reset Successfully!');</script>";
  
                
            }else{

                echo"<script type='text/javascript'>window.location.replace('login.php');alert('Error!');</script>";
            }
              
}
if(isset($_POST['btnsearch'])){ 
            $Keyword=$_POST['Keyword'];
           

          
            if (!empty($Keyword)) {

                echo"<script type='text/javascript'>window.location.replace('agencysearch.php?search=$Keyword');</script>";
            }else{
                echo"<script type='text/javascript'>window.location.replace('agency.php');</script>";
            }
              
}   


if(isset($_POST['btnskills']))
        {       
                
                echo $tagsinput1=$_POST['tagsinput1'];
                // $string = $tagsinput1;
                // $search = ' ';
                // $replace = ',';
                // $string2 = str_replace( $search, $replace, $string );
                // $search2 = '+';
                // $replace2 = ' ';
                // $string3 = str_replace( $search2, $replace2, $string2 );
                $tag=$_POST['tag'];
                $studentID=$_POST['studentID']; 

                $update=mysqli_query($con,"DELETE FROM studentskills
                                WHERE 
                                    studentskillsSTUDENTID ='$studentID' ");

                $user = $tagsinput1;
                $userArray = explode(',', $user);
                foreach($userArray as $key){
                                $add=mysqli_query($con,"INSERT into studentskills(
                                    studentskillsTAGNAME,
                                    studentskillsSTUDENTID,
                                    studentskillsDES
                                ) values(
                                    '$key',
                                    '$studentID',
                                    'cus'
                                )")or die(mysqli_error($con));
                }    
                $i=0;
                $chk="";  
                foreach($tag as $chk1) { 
                                    
                                 $add=mysqli_query($con,"INSERT into studentskills(
                                    studentskillsTAGNAME,
                                    studentskillsSTUDENTID,
                                    studentskillsDES
                                ) values(
                                    '$chk1',
                                    '$studentID',
                                    'check'
                                )")or die(mysqli_error($con));


                $i++;
                }
                                     if($i != '1' || $i != 0)
                                            {
                                                echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Successfully Added Trainings & Seminar!')</script>";  
                                    }else{
                                               echo"<script type='text/javascript'>window.location.replace('viewprofile.php');alert('Error!, Try Again!')</script>";  
                                    } 
      
   
                     
}

if(isset($_POST['btnskillsrate']))
        {
            $studentskillsID = $_POST['studentskillsID'];
            $rating = $_POST['rating'];
            $update=mysqli_query($con,"UPDATE studentskills SET 
                    studentskillsRATE = '$rating'
                   
                WHERE 
                    studentskillsID ='$studentskillsID'  ");

            if($update)
                {
                
                    echo"<script type='text/javascript'>window.location.replace('viewprofile.php');</script>";  
                
                }
}
?>