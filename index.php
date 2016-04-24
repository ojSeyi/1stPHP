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

    $numberofhobbits;

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

    ?>
</p>
</body>
</html>