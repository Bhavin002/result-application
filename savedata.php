<?php
    $std_sid = $_POST['sid'];
    $std_sname = $_POST['sname'];
    $std_school_name = $_POST['school_name'];
    $std_guj = $_POST['guj'];
    $std_eng = $_POST['eng'];
    $std_maths = $_POST['maths'];
    $std_science = $_POST['science'];
    $std_ss = $_POST['ss'];
    $std_sun = $_POST['sun'];
    $std_total = $std_guj+$std_eng+$std_maths+$std_science+$std_ss+$std_sun;
    $std_per = $std_total/6;

    include 'configer.php';
    $sql = "insert into student (sid,sname,indexed,guj,eng,maths,science,ss,sun,total,per) values
        ('{$std_sid}','{$std_sname}','{$std_school_name}','{$std_guj}','{$std_eng}','{$std_maths}',
        '{$std_science}','{$std_ss}','{$std_sun}','{$std_total}','{$std_per}')";
    $result = mysqli_query($connect,$sql);
    header("Location: http://localhost/resultapp/index.php");  
?>