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
    $sql = "update student set sid = '{$std_sid}',sname = '{$std_sname}',indexed = '{$std_school_name}',guj = '{$std_guj}',eng = '{$std_eng}',maths = '{$std_maths}',science = '{$std_science}',ss = '{$std_ss}',sun = '{$std_sun}',total = '{$std_total}',per = '{$std_per}' where sid = {$std_sid}";
    $result = mysqli_query($connect,$sql);
    header("Location: http://localhost/resultapp/index.php");
?>