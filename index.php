<!DOCTYPE html>
<html>
<head>  </head>
<body>
<p>
    <?php
    echo "Hello World";
    echo "<br>";
    echo "Hello" . " " . "World"."!";
    echo "<br>";
    echo 5*7;
    echo "<br>";
    $name = "Frodo Baggins";
    $age = 111;
    echo "My name is " . $name . "and i am " . $age;
    echo "<br>";

    $name = "Edgar";
    if ($name == "Simon"){
        print "I know you now!";
    }
    else{
        print "Who are you?";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $myage = 20;

    if($myage >= 21){
        print "You can buy specs, mugs and sausage rolls";
    }
    elseif ($myage >= 18){
        print "You can buy specs and mugs";
    }
    elseif($myage >= 16){
        print "You can buy specs";
    }
    else{
        print "You cant buy anything you young twat";
    }


    ?>
</p>
</body>
</html>