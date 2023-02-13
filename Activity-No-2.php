<?php 
$res = array(
    "country" => "",
    "capital" => "",
    "fact" => ""
);

function countryFinder(){
    $countries = array(
        "USA" => array(
            "Capital" => "Washington D.C.", 
            "Fact" => "The only global superpower"),
        "Germany" => array(
            "Capital" => "Berlin", 
            "Fact" => "The most influential state of the European Union"),
        "Austria" => array(
            "Capital" => "Vienna", 
            "Fact" => "Its name in German means east"),
        "Finland" => array(
            "Capital" => "Helsinki", 
            "Fact" => "Their military only exists because of Russia"),
        "Switzerland" => array(
            "Capital" => "Bern", 
            "Fact" => "They speak 4 languages here"),
        "Australia" => array(
            "Capital" =>"Canberra", 
            "Fact" => "Lost a war to birds"),
        "France" => array(
            "Capital" => "Paris",
            "Fact" => "Won the most wars in history"),
        "Philippines" => array(
            "Capital" => "Manila", 
            "Fact" => "Its capital was once labelled as the gates of hell"),
        "Japan" => array(
            "Capital" => "Tokyo", 
            "Fact" => "The only country to have ever been nuked, yet"),
        "Liechtenstein" => array(
            "Capital" => "Vaduz", 
            "Fact" => "They also speak German there")
    );
    
    $message = array(
        "country" => "", 
        "capital" => "", 
        "fact" => "");

    if(isset($_POST['Submit'])){
        if(!preg_match("/[A-Za-z. ]+/", $_POST['country'])){
            die("Invalid name for a country!");
        }
        if(isset($_POST['country'])){
            $country = ($_POST['country']);
            $checker = false;  
            foreach ($countries as $key => $value){
                if ($country == $key) {
                    echo $message['country'] = $country."<br/>Capital: ";
                    echo $message['Capital'] = $value['Capital']."<br/> A Fact: ";
                    echo $message['Fact'] = $value['Fact'];
                    $checker = true;
                    break;
                }
            }
         
        if ($checker == false){
            echo $message['country'] = "Does not exist on the array.";
            $message['capital'] = "";
            $message['description'] = "";
            }
        }
    }
    return $message;
}
$res = countryFinder();
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center vh-100">
            <form action="" method="POST" name="CountryNamer">
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input id="country" class="form-label" type="text" name="country" required/>
                </div>
                <br/>
                <div style="text-align: center;">
                    <input name="Submit" value="Enter" type="submit" class="btn btn-primary"/>
                </div>
    </body>
</html>