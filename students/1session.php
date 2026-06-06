<?php if(!isset($_SESSION['intershipgo_students'])){
  	  echo"<script type='text/javascript'>window.location.replace('login.php')</script>";
}else
{
	  $studentID = $_SESSION['intershipgo_students'];
      $student=mysqli_query($con,"SELECT student.* from student where StudentID = '$studentID'")or die(mysqli_error($con));
      $rowstudent=mysqli_fetch_object($student);
}?>