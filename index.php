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
    $x= 1;
    $day = array("1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th", "13th", "14th", "15th", "16th", "17th", "18th", "19th", "20th", "21st", "22nd", "23rdth", "24th", "25th", "26th", "27th", "28th", "29th", "30th");
    foreach($day as $d) {

            $provisionedActivity = array("Specs", "Mugs", "Specs and Sausage rolls");
            if (($x % 2) == 0) {
                print "<p>On the $d of the month $provisionedActivity[0] are available</p>";
            }
            elseif (($x % 3) == 0) {
                print "<p>On the $d of the month $provisionedActivity[1] are available</p>";
            }
            elseif (($x % 4) == 0) {
                print "<p>On the $d of the month $provisionedActivity[2] are available</p>";
            }
            else {
                print "<p>On the $d of the month no products are available</p>";
            }
            $x++;
    }

    $provisionedActivity = array("Specs", "Mugs", "Sausage rolls", "Specs and Sausage rolls");

    $specs_stock = 7;
    $mugs_stock = 7;
    $srolls_stock = 7;
    $monthday = 1;

    do{
        $good = rand(0,2)
        //0 = spec, 1 = mug, 2 = sausage rolls
        ;
        switch($good){
            case 0: {
                print "<p>On day $monthday of the month $provisionedActivity[0] are available</p>";
                $specs_stock--;
                break;
            }

            case 1: {
                print "<p>On day $monthday of the month $provisionedActivity[1] are available</p>";
                $mugs_stock--;
                break;
            }

            case 2: {
                print "<p>On day $monthday of the month $provisionedActivity[2] are available</p>";
                $srolls_stock--;
                break;
            }

        }
        $monthday++;

    }while(($specs_stock >0) && ($mugs_stock >0) && ($srolls_stock >0));
    echo "No more goods available this month";
    ?>
</p>
</body>
</html>