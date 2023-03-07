<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 | 1</title>

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
    <center>
        <form method="post">
            <div class="card">
                <h1>Enter Values for Matrix A & B</h1>
                <div class="row">
                    <div class="col">
                      <input name="A1" type="number" class="form-control" placeholder="A1" required>
                    </div>
                    <div class="col">
                      <input name="A2" type="number" class="form-control" placeholder="A2" required>
                    </div>
                    <div class="col">
                        <input name="A3" type="number" class="form-control" placeholder="A3" required>
                    </div>
                    <div class="col">
                        <input name="A4" type="number" class="form-control" placeholder="A4" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <input name="B1" type="number" class="form-control" placeholder="B1" required>
                    </div>
                    <div class="col">
                      <input name="B2" type="number" class="form-control" placeholder="B2" required>
                    </div>
                    <div class="col">
                        <input name="B3" type="number" class="form-control" placeholder="B3" required>
                    </div>
                    <div class="col">
                        <input name="B4" type="number" class="form-control" placeholder="B4" required>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="Add">ADD</button>
            </div>
        </form>
    </center>
</body>
</html>


<?php
    if(isset($_POST)){
        if($_POST){
            $a1 = $_POST['A1'];
            $a2 = $_POST['A2'];
            $a3 = $_POST['A3'];
            $a4 = $_POST['A4'];
            $b1 = $_POST['B1'];
            $b2 = $_POST['B2'];
            $b3 = $_POST['B3'];
            $b4 = $_POST['B4'];
            
            $matA = array(
                array($a1,$a2),array($a3,$a4)
            );

            $matB = array(
                array($b1,$b2),array($b3,$b4)
            );

            for($i=0; $i<2; $i++){
                for($j=0; $j<2; $j++){
                    $matA[$i][$j] = $matA[$i][$j] + $matB[$i][$j];
                }
            }

            echo "
                        <div class=\"card\">
                            <h1>Result</h1>
                            <div class=\"row\">
                                <div class=\"col\">
                                <input type=\"number\" class=\"form-control\" placeholder={$matA[0][0]} disabled>
                                </div>
                                <div class=\"col\">
                                <input type=\"number\" class=\"form-control\" placeholder={$matA[0][1]} disabled>
                                </div>
                                <div class=\"col\">
                                    <input type=\"number\" class=\"form-control\" placeholder={$matA[1][0]} disabled>
                                </div>
                                <div class=\"col\">
                                    <input type=\"number\" class=\"form-control\" placeholder={$matA[1][1]} disabled>
                                </div>
                            </div>
                        </div>
                    ";
        }
    }
?>