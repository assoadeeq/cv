<?php
//Example of strpos() function
echo strpos("This is a cat", "q"); // outputs 
echo "<br><br>";
echo strtoupper("cat");//convert string to uppercase (CAPITAL LETTERS)
echo "<br><br>";
echo strtolower("BOY");//convert string to lowercase (small letters)
echo "<br><br>";
echo ucfirst("salim"); //Capitalize the first character in a string
echo "<br><br>";
echo ucwords("programming is very easy"); //Capitalize first character of a word in a sentence
echo "<br><br>";
/*
$force = 10;
$mass = 15;

$acc = $force/$mass;

$force = $mass * $acc;

echo "Force is ".$force."<br>";
echo "Mass is ".$mass."<br>";
echo "Accelation is ".round($acc,2);
*/
//echo(min('agkhc','eAQaxHN','IUKKL','QDGaa')); //Find maximum nuumber in the list

echo "Number is ".$random_numbers = rand();
echo "<br>";
$number_length = strlen($random_numbers);

if($number_length == 9){
    echo $random_numbers;
} else {
    echo "Number not 9 digit! The digits is $number_length";
}

//echo ""
//echo "Random number is ".$random_numbers." Length is ".strlen($random_numbers);



/*
$num = 5;

$random_generated = rand(1,10);

echo "You number is ".$num."<br>";
if($num == $random_generated){
    echo '<p style="color:green;">Congratulations you guess right</p>';
} else {
    echo '<p style="color:red;">Opps. You guess wrong! Try again. The number is '.$random_generated.'</p>';
}

*/








?>