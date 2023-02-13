<?php 

        if($_POST['first'] && $_POST['sec']){
            $firstNum = $_POST['first'];
            $secondNum = $_POST['sec'];
            if(!preg_match("/\d+/", $firstNum) || !preg_match("/\d+/", $secondNum )){
                die("Invalid input! Try again!");
            }
            else{
                function Add($firstNum,$secondNum){
                    echo $_POST['first'] + $_POST['sec'];
                }
                function Sub($firstNum,$secondNum){
                    echo $_POST['first'] - $_POST['sec'];
                }
                function Mul($firstNum,$secondNum){
                    echo $_POST['first'] * $_POST['sec'];
                }
                function Div($firstNum,$secondNum){
                    echo $_POST['first'] / $_POST['sec'];
                }
                
                if(isset($_POST['Add'])){
                //        echo $_POST['first'] + $_POST['sec'];
                    Add($_POST['first'], $_POST['sec']);
                    }
                if(isset($_POST['Sub'])){
                    Sub($_POST['first'], $_POST['sec']);
                    }
                if(isset($_POST['Mul'])){
                    Mul($_POST['first'], $_POST['sec']);
                    }
                if(isset($_POST['Div'])){
                    Div($_POST['first'], $_POST['sec']);
                    }
            }
        }
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="" method="POST" name="calculator">
                <div class="mb-3">
                    <label for="input-first" class="form-label">first_num</label>
                    <input id="input-first" class="form-label" type="text" name="first" required/>
                </div>
                <div class="mb-3">
                    <label for="input-sec" class="form-label">second_num</label>
                    <input id="input-sec" class="form-label" type="text" name="sec" required/>
                </div>
                <br/>
                <div style="text-align: center;">
                    <input name="Add" value="+" type="submit" class="btn btn-primary"/>
                </div>
                <br/>
                <div style="text-align: center;">
                    <input name="Sub" value="-" type="submit" class="btn btn-primary"/>
                </div>
                <br/>
                <div style="text-align: center;">
                    <input name="Mul" value="*" type="submit" class="btn btn-primary"/>
                </div>
                <br/>
                <div style="text-align: center;">
                    <input name="Div" value="/" type="submit" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </body>
</html> 