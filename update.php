<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATING</title>
    <style>
        b {
            font-size: 1.4rem;

        }

        .submit {
            margin-top: 30px;
            background-color: rgb(255, 153, 153);
            border-radius: 5px;
            border: 2px solid rgb(200, 120, 120);
            color: white;
            margin-bottom: 15px;
        }

        section {
            background-color: rgb(200, 153, 153);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <section class="p-2 m-2">
        <div class="container-fluid">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row offset-md-4">
                    <div class="col-md-3">
                        <b>Sid : </b>
                        <input type="text" class="form-control" name="sid">
                    </div>
                </div>
                <div class="row offset-md-4">
                    <div class="col-md-2">
                        <input type="submit" class="form-control submit" name="showbtn" value="Show">
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['showbtn'])) {
                include "configer.php";
                $std_uniq = $_POST['sid'];
                $sql = "select * from student where sid = {$std_uniq}";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                        <br>
                        <br>
                        <form action="editdata.php" method="post" class="mt-4">
                            <div class="row offset-md-1">
                                <div class="col-md-3">
                                    <b>sid :</b> <input type="text" class="form-control" name="sid" value="<?php echo $row['sid'] ?>">
                                </div>
                                <div class="col-md-3">
                                    <b>Name :</b> <input type="text" class="form-control" name="sname" value="<?php echo $row['sname'] ?>">
                                </div>
                                <div class="col-md-3">
                                    <b>School : </b><br>
                                    <?php
                                    include 'configer.php';
                                    $sql1 = "select * from school";
                                    $result1 = mysqli_query($connect, $sql1);
                                    if (mysqli_num_rows($result1) > 0) {
                                        echo "<select class='custom-select' name='school_name'>";
                                        while ($row1 = mysqli_fetch_assoc($result1)) {
                                            if ($row['indexed'] == $row1['indexed']) {
                                                $select = "selected";
                                            } else {
                                                $select = " ";
                                            }
                                            echo "<option {$select} value='{$row1['indexed']}'>{$row1['school_name']}</option>";
                                        }
                                        echo "</select>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <b>Gujarati :</b> <input type="text" class="form-control" name="guj" value="<?php echo $row['guj'] ?>">
                                </div>
                                <div class="col-md-2">
                                    <b>English :</b> <input type="text" class="form-control" name="eng" value="<?php echo $row['eng'] ?>">
                                </div>
                                <div class="col-md-2">
                                    <b>Maths :</b> <input type="text" class="form-control" name="maths" value="<?php echo $row['maths'] ?>">
                                </div>
                                <div class="col-md-2">
                                    <b>Science :</b> <input type="text" class="form-control" name="science" value="<?php echo $row['science'] ?>">
                                </div>
                                <div class="col-md-2">
                                    <b>Ss :</b> <input type="text" class="form-control" name="ss" value="<?php echo $row['ss'] ?>">
                                </div>
                                <div class="col-md-2">
                                    <b>Sun :</b> <input type="text" class="form-control" name="sun" value="<?php echo $row['sun'] ?>">
                                </div>
                            </div>
                            <div class="offset-5">
                                <input type="submit" name="save" class="submit mt-5 px-4 py-1" value="Update">
                            </div>
                        </form>
            <?php }
                }
            } ?>
        </div>
    </section>
</body>

</html>
