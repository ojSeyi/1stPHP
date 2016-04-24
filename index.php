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

    $myage = 15;

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
     echo "<br>";

    $numberofhobbits = 1;

    switch($numberofhobbits){
        case 1:
            echo "1 sad habbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 is just a lot of hobbits";
            break;
        default:
            echo "All the hobbits have gone home";
            break;
    }
    echo "<br>";

    $wantedgood = "alcohol";

    switch($wantedgood){
        case "mug":
            echo "You have to be 16";
            break;
        case "specs":
            echo "You have to be 18";
            break;
        case "alcohol":
            echo "You have to be 21";
            break;
        default:
            echo "You can buy most things if you're below 16";
            break;
    }

    echo "<br>";

    $provisonedActivities = array("Specs", "Drugs", "Rock and Roll");

    foreach($provisonedActivities as $x){
        print "<p>$x</p>";
    }

    $provisonedActivities[1] = "Mugs";
    unset($provisonedActivities[2]);

    foreach($provisonedActivities as $x){
        print "<p>$x</p>";
    }



    ?>
</p>
</body>
</html>