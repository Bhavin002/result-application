<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .header{
            background-color: rgb(255, 153, 153);
        }
        ul li{
            display: inline;
        }
        *{
            margin: 0;
            padding: 0;
        }
        nav{
            padding-top: 10px;
            padding-bottom: 2px;
        }
        .ancor:hover{
            color:aliceblue;
            text-decoration: none;
        }
        .ancor{
            font-size: 1.5rem;
            padding: 20px;
            color:white;
        }
        header{
            background-color: black;
        }
        @media (max-width:900px) {
            .ancor{
                padding: 10px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-md-12">
                <h2 class="p-3">Result-Application</h2>
            </div>
        </div>
    </div>
    <header>
        <div class="container-fluid">
        <nav>
            <ul>
                <li><a href="index.php" class="ancor">Home</a></li>
                <li><a href="add.php" class="ancor">Add</a></li>
                <li><a href="update.php" class="ancor">Update</a></li>
                <li><a href="delete.php" class="ancor">Delete</a></li>
            </ul>
        </nav>
        </div>
    </header>
</body>
</html>