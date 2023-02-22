<?php
    require_once "class.php";
    $valueMsg = "";
    $sfAreaMsg = "";
    $volMsg = "";

    $opt = array("Cube", "Sphere");

    if (isset($_POST['submit'])) {
        if (isset($_POST['choice']) && isset($_POST['input'])) {
            $value = $_POST['input'];
            $shapeType = $_POST['choice'];

            $shape = $shapeType == "Cube" ? new Cube($value) : new Sphere($value);
            $valueMsg = "Length/Radius is: " . $value;
            $sfAreaMsg = "Surface area: " . $shape->SF();
            $volMsg = "Volume: " . $shape->Vol();
        }
    }

?>


<html lang="en-us">
    <head>
        <title>Shapes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="" method="POST">
            <div>
                Cube <input type="radio" value="Cube" name="choice"/>
                Sphere <input type="radio" value="Sphere" name="choice"/>

            </div>
            <div>
                Input Length/Radius: <input type="number" name="input">
                <input type="submit" value="Submit" name="submit">
            </div>
            <div>
                <?php
                    echo $valueMsg . "<br>" . $sfAreaMsg . "<br>" . $volMsg;
                ?>
            </div>
        </form>
    </body>
</html>
