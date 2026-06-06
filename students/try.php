<?php include('../1connection.php'); ?>
<?php 

 $number='09155882430';
            $answer='Lingayen2';
            $studentID=6;

            $qa=mysqli_query($con,"SELECT * from securityquestions where securityquestionsUSERTYPE = 'student' and securityquestionsUSERID = '$studentID'")or die(mysqli_error($con));
            $rowqa=mysqli_fetch_object($qa);
echo($rowqa->securityquestionsA);


            if (!empty($rowqa)) {

                if ($rowqa->securityquestionsA == $answer) {
                 echo"correct";  
                }else{
                 echo"<br>error";   
                }
                
                
            }else{

              echo"error";  
            }
 ?>