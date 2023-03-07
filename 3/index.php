<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 | 3</title>

    <!-- bootstrapCDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .card{
            margin: 4%;
            padding: 4%;
        }
        .first{
            margin: 1% 2%;
        }
        .hobby{
            margin: 1% 2%;
        }
        button{
            margin-top: 1%;
        }
    </style>
</head>
<body>
    <form method="post">
        <div class="card">
            <div class="form-row first">
                <div class="form-group col-md-6">
                <label for="name"><h4>My Name is </h4></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name Here" required>
                </div>
            </div>
            <div class="form-group first">
            <h4>I have hobbies like  </h4>
            <div class="row">
            <div class="col-lg-6 col-sm-12">
            <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h1" name="h1">
                <label class="form-check-label" for="h1">
                    Acting
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h2" name="h2">
                <label class="form-check-label" for="h2">
                    Reading
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h3" name="h3">
                <label class="form-check-label" for="h3">
                    Painting
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h4" name="h4">
                <label class="form-check-label" for="h4">
                    Dancing
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h5" name="h5">
                <label class="form-check-label" for="h5">
                    Swimming
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h6" name="h6">
                <label class="form-check-label" for="h6">
                    Surfing
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h7" name="h7">
                <label class="form-check-label" for="h7">
                    Cricket
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h8" name="h8">
                <label class="form-check-label" for="h8">
                    Football
                </label>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
            <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h9" name="h9">
                <label class="form-check-label" for="h9">
                    Badminton
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h10" name="h10">
                <label class="form-check-label" for="h10">
                    E-Sport
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h11" name="h11">
                <label class="form-check-label" for="h11">
                    Table Tennis
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h12" name="h12">
                <label class="form-check-label" for="h12">
                    Photography
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h13" name="h13">
                <label class="form-check-label" for="h13">
                    Yoga
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h14" name="h14">
                <label class="form-check-label" for="h14">
                    Gymnastics
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h15" name="h15">
                <label class="form-check-label" for="h15">
                    Rugby
                </label>
                </div>
                <div class="form-check hobby">
                <input class="form-check-input" type="checkbox" id="h16" name="h16">
                <label class="form-check-label" for="h16">
                        Gardening
                </label>
                </div>
            </div>
            </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $who = $_POST['name'];
        $hobby = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
        $names = array("Acting","Reading","Painting","Dancing","Swimming","Surfing","Cricket","Football","Badminton","E-Sport","Table-Tennis","Photography","Yoga","Gymnastics","Rugby","Gardening");
        $flag = 0;

        for($i=1; $i<=16; $i++){
            if (isset($_POST['h'.$i])){
               $hobby[$i-1]++;
               $flag++;
            }
        }

        if($flag > 0){
            echo "
                <div class=\"card\">
                <h2>Hello $who ! <br><br>Your Hobbies are :</h2>";
                for($i=0; $i<16; $i++){
                    if($hobby[$i] > 0){
                        echo "<h5>-->$names[$i]</h5>";
                    }
                }
                echo "  </div>
            ";
        }else{
            echo " <div class=\"card\"><h2>Hello $who ! <br><br>You Selected No Hobby</h2></div>";
        }
    }
?>