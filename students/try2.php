<?php
include('../1connection.php');
            $journal2=mysqli_query($con,"SELECT studentjournal.*,student.* from studentjournal,student where studentjournal.studentID = student.studentID")or die(mysqli_error($con));
              while($row2=mysqli_fetch_object($journal2))
              {
               if ('6' == $row2->StudentID ) { ?>
                  [ new Date(<?= date("Y,m,d",strtotime($row2->journaldate));?>), 8 ],
              <?php } }?>