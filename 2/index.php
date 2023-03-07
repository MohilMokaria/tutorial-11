<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 | 2</title>

    <!-- bootstrapCDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .card{
            margin: 4%;
            padding: 4%;
        }
        .col{
            margin: 1% 0;
        }
        button{
            margin-top: 1%;
        }
    </style>
</head>
<body>
    <form method="post">
        <center>
            <form method="post">
                <div class="card">
                    <h1>Report</h1>
                    <h3>Enter Name & Marks of 5 Subjects</h3>
                    <div class="row">
                        <div class="col">
                        <input name="A1" type="text" class="form-control" placeholder="Subject 1 Name" required>
                        </div>
                        <div class="col">
                        <input name="B1" type="number" class="form-control" placeholder="Marks" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <input name="A2" type="text" class="form-control" placeholder="Subject 2 Name" required>
                        </div>
                        <div class="col">
                        <input name="B2" type="number" class="form-control" placeholder="Marks" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <input name="A3" type="text" class="form-control" placeholder="Subject 3 Name" required>
                        </div>
                        <div class="col">
                        <input name="B3" type="number" class="form-control" placeholder="Marks" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <input name="A4" type="text" class="form-control" placeholder="Subject 4 Name" required>
                        </div>
                        <div class="col">
                        <input name="B4" type="number" class="form-control" placeholder="Marks" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <input name="A5" type="text" class="form-control" placeholder="Subject 5 Name" required>
                        </div>
                        <div class="col">
                        <input name="B5" type="number" class="form-control" placeholder="Marks" required>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="Add">Go</button>
                </div>
            </form>
        </center>
    </form>
</body>
</html>


<?php
    if(isset($_POST)){
        if($_POST){

            $a1 = $_POST['A1'];
            $a2 = $_POST['A2'];
            $a3 = $_POST['A3'];
            $a4 = $_POST['A4'];
            $a5 = $_POST['A5'];
            $b1 = $_POST['B1'];
            $b2 = $_POST['B2'];
            $b3 = $_POST['B3'];
            $b4 = $_POST['B4'];
            $b5 = $_POST['B5'];

            $report = array($a1=>$b1, $a2=>$b2, $a3=>$b3, $a4=>$b4, $a5=>$b5);

            echo "<h3>Printing by ForEach Loop</h3>";
            foreach($report as $x => $x_value) {
                echo $x."-->".$x_value."<br>";
            }

            echo "<h3>Printing by Print_R</h3>";
            print_r($report);
        }
    }
?>