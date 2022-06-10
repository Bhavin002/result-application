<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        .edit{
            color:black;
            font-size: 16px;
        }
        .delete{
            color:black;
            font-size: 16px;
        }
        @media (max-width:900px) {
            *{
                overflow: scroll;
            }
        }
        .edit{
        padding: 2px 2px;
        background-color: rgb(255, 163, 26);
        border-radius: 4px;
    }
    .delete{
        padding: 2px 2px;
        background-color: rgb(255, 51, 51);
        border-radius: 4px;
    }
    a:hover{
        color:black;
        text-decoration: none;
    }
    </style>
</head>
<body>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sid</th>
                        <th scope="col">Name</th>
                        <th scope="col">School</th>
                        <th scope="col">Guj</th>
                        <th scope="col">Eng</th>
                        <th scope="col">Maths</th>
                        <th scope="col">Sci</th>
                        <th scope="col">S.s</th>
                        <th scope="col">Sun</th>
                        <th scope="col">Total</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        include 'configer.php';
                        $sql = "select * from student join school where student.indexed = school.indexed order by sname";
                        $result = mysqli_query($connect,$sql) or die("query unseccfull");
                        if(mysqli_num_rows($result)>0){

                            while($row = mysqli_fetch_assoc($result)){

                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['sid'] ?></th>
                        <td><?php echo $row['sname'] ?></td>
                        <td><?php echo $row['school_name'] ?></td>
                        <td><?php echo $row['guj'] ?></td>
                        <td><?php echo $row['eng'] ?></td>
                        <td><?php echo $row['maths'] ?></td>
                        <td><?php echo $row['science'] ?></td>
                        <td><?php echo $row['ss'] ?></td>
                        <td><?php echo $row['sun'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        <td><?php echo $row['per'] ?></td>
                        <td>
                            <a href="edit.php?uniq=<?php echo $row['sid'] ?>" class="edit">Edit</a>
                            <a href="delete-inline.php?uniq=<?php echo $row['sid'] ?>" class="delete">Delete</a>
                        </td>
                    </tr>
                    <?php } 
                        } ?>
                </tbody>
            </table>
        </div>
</body>

</html>