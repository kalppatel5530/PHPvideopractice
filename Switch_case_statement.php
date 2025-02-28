<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$weekday = 4;

switch($weekday){

    case 1:
        echo "Today is monday";
        break;
        case 2:
            echo "Today is tuesday";
            break;
            case 3:
                echo "Today is wednesday";
                break;
                case 4:
                    echo "Today is thrusday";
                    break;
                    case 5:
                        echo "Today is friday";
                        break;
                        case 6:
                            echo "Today is saturday";
                            break;
                            case 7:
                                echo "Today is sunday";
                                break;
                                default:
                                    echo "please enter valid weekday";
                                    
}

    ?>
<br>
    <?php
$month = 10;

switch ($month){
    case 1:
        echo "january";
        break;
        case 2:
            echo "february";
            break;
            case 3:
                echo "march";
                break;
                case 4:
                    echo "april";
                    break;
                    case 5:
                        echo "may";
                        break;
                        case 6:
                            echo "june";
                            break;
                            case 7:
                                echo "july";
                                break;
                                case 8:
                                    echo "auguest";
                                    break;
                                    case 9:
                                        echo "saptember";
                                        break;
                                        case 10:
                                            echo "october";
                                            break;
                                            case 11:
                                                echo "november";
                                                break;
                                                case 12:
                                                    echo "december";
                                                    break;
                                                    default:
                                                    echo "please enter the valid month ";
                    
}
    ?>
<br>

    <?php
$color = "black";

switch($color){
    case "red":
        echo "the favourite color is red";
        break;
        case "yellow":
        echo "the favourite color is yellow";
        break;
        case "pink":
            echo "the favourite color is pink";
            break;
            case "blue":
                echo "the favourite color is blue";
                break;
                case "black":
                    echo "the favourite color is black";
                    break;
                case "green":
                    echo "the favourite color is green";
                    break;
                    case "white":
                        echo "the favourite color is white";
                        break;
                        default:
                        echo "the value is not mathch.please enter the valid value";

}

?>
<br>
<?php

$number = 5;

switch($number){
    case 1:
        echo "today is monday";
        break;
        case 2:
            echo "today is tuesday";
            break;
            case 3:
                echo "today is wednesday";
                break;
                case 4:
                    echo "today is thrusday";
                    break;
                    case 5:
                        echo "today is friday";
                        break;
                        case 6:
                            echo "today is saturday";
                            break;
                            case 7:
                                echo "today is sunday";
                                break;
                                default:
                                echo "the enter value is not valid";
}

?>
<br>
<?php

$day = 2;

switch($day){
    case 1:
        case 2:
            case 3:
                case 4:
                    case 5:
                        echo "this is the working day";
                        break;
                        case 6:
                            case 7:
                                echo "this day is not working day";
                               break;
                                default:
                                echo "please enter the valid day";

}

?>
</body>
</html>