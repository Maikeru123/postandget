<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$qoutes = "Did it work?";


echo("This is a test: $qoutes" . "<br><br>");



$name = "Michael";
$age = 25;
$gpa = 3.75; 
$balance = 1500.50; 

// Constants
define("SITE_NAME", "My Awesome Site");


echo "Welcome to " . SITE_NAME . ", $name!<br>";
echo "You are $age years old.<br>";
echo "Your GPA is $gpa and your account balance is $$balance.<br>";

// One line
echo "Hello $name, welcome to " . SITE_NAME . "! You are $age years old, GPA: $gpa, Balance: $$balance.<br><br><br>";


$price = 50;
$quantity = 3;

// Expression to calculate total
$total = $price * $quantity;

echo "Total price is $total<br><br><br>";


//if else


$age = 20;

if ($age < 13) {
    echo "You are a child.";
} elseif ($age >= 13 && $age < 20) {
    echo "You are a teenager.";
} else {
    echo "You are an adult.<br><br><br>";
}


$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Tuesday":
        echo "Second day of the week!";
        break;
    case "Wednesday":
        echo "Midweek!";
        break;
    default:
        echo "Another day!";
}


?>

</body>
</html>