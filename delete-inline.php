<?php
   include 'configer.php';
   $std_sid = $_GET['uniq'];
   $sql = "delete from student where sid = {$std_sid}";
   $result = mysqli_query($connect,$sql);
   header("Location: http://localhost/resultapp/index.php");
?>