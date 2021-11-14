<?php 
$number = $_POST['number'];
$pr1 = 3; // if unit is between 0-100 unit
$pr2 = 2; // if unit is between 100-200 unit
$pr3 = 1; // if unit is between 200-300 unit
$pr4 = 0.5; // if unit is between 300-400 unit
// echo " the input number is $number";

if ($number <= 100) {
    $bill = $number*$pr1;
echo " bill is Rs, ($bill)";  
}

else if ($number >= 100 && $number <=200 ) {
    $cal1 = $number-100;
    $bill = ($number*$pr1)+($cal1*$pr2);
   echo " bill is Rs, ($bill)";  
}

else if ($number >= 200 && $number <=300 ) {
    $cal1 = $number-200;
    $bill = ($number*$pr1)+($cal1*$pr3);
   echo " bill is Rs, ($bill)";  
}
else if ($number >= 300 && $number <=400) {
    $cal1 = $number - 300;
    $bill = ($number*$pr1)+($cal1*$pr4);
   echo " bill is Rs, ($bill)";  
}


 ?>