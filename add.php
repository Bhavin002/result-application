<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDING</title>
    <style>
        b {
            font-size: 1.4rem;

        }
        .submit{
            margin-top: 30px;
            background-color: rgb(255, 153, 153);
            border-radius: 5px;
            border:2px solid rgb(200, 120, 120);
            color:white;
            margin-bottom: 15px;
        }
        section{
            background-color: rgb(200, 153, 153);
            border-radius: 10px;
        }
    </style>
</head>

<body>
<section class="p-2 m-2">
    <div class="container-fluid">
        <form action="savedata.php" method="post" class="mt-4">
            <div class="row offset-md-1">
                <div class="col-md-3">
                    <b>sid :</b> <input type="text" class="form-control" name="sid">
                </div>
                <div class="col-md-3">
                    <b>Name :</b> <input type="text" class="form-control" name="sname">
                </div>
                <div class="col-md-3">
                    <b>School : </b><br>
                    <select class="custom-select" name="school_name">
                        <option selected>Select School</option>
                        <?php
                            include 'configer.php';
                            $sql = "select * from school";
                            $result = mysqli_query($connect,$sql);

                            while($row = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <option value="<?php echo $row['indexed'] ?>"><?php echo $row['school_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <br>
            <br> 
            <div class="row">
            <div class="col-md-2">
                <b>Gujarati :</b> <input type="text" class="form-control" name="guj">
            </div>
            <div class="col-md-2" >
                <b>English :</b> <input type="text" class="form-control" name="eng">
            </div>
            <div class="col-md-2">
                <b>Maths :</b> <input type="text" class="form-control" name="maths">
            </div>
            <div class="col-md-2">
                <b>Science :</b> <input type="text" class="form-control" name="science">
            </div>
            <div class="col-md-2">
                <b>Ss :</b> <input type="text" class="form-control" name="ss">
            </div>
            <div class="col-md-2">
                <b>Sun :</b> <input type="text" class="form-control" name="sun">
            </div>
            </div>
            <div class="offset-5">
            <input type="submit" name="save" class="submit mt-5 px-4 py-1" value="Add">
            </div>
        </form>
    </div>
    </section>
</body>

</html>