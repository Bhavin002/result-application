<?php
    require 'header.php';
    if(isset($_POST['deletebtn']))
    {
        include 'configer.php';
        $std_sid = $_POST['sid'];
        $sql = "delete from student where sid = {$std_sid}";
        $result = mysqli_query($connect,$sql);
        header("Location: http://localhost/resultapp/index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="row offset-md-4">
                <div class="col-md-3">
                    <b>Sid : </b>
                    <input type="text" class="form-control" name="sid">
                </div>
            </div>
            <div class="row offset-md-4">
                <div class="col-md-2">
                    <input type="submit" class="form-control submit" name="deletebtn" value="Delete">
                </div>
            </div>
        </form>
    </div>
    </section>
</body>

</html>