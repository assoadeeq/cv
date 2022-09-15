<?php
//Below is an example of a line comment in PHP
//&nbsp; is used to give a character space between text

/* Block comment in PHP
This is a program that allows user to enter his name, and then
the program which search the database and find if the user exist
the program which search the database and find if the user exist
*/

//Below is an example of Printing or Displaying text on the screen
echo "Below is an example of Printing or Displaying text on the screen<br>";
echo "Hello&nbps;Wolrd!<br>";
echo "Hello";
echo "<br><br>";

//Below is an example Variable declaration
echo "Below is an example Variable declaration<br>";
$txt = "PHP Programming is very easy and fun!";
$x = 5;
$y = 10.5;

//strlen() function is use to count the characters in a string including space
echo "The string: ".$txt;
echo "<br>";
echo "The number of characters in the string is ".strlen($txt); //I pass an argument to the function strlen.
echo "<br>";
echo "The number of words in the sentence are ".str_word_count($txt);
echo "<br>";
echo strrev($txt);
echo "<br>";
$mymessage = "The next action is to enter the value more than ten of the characteristic, texture, and color extraction features as input values for the probabilistic neural network procedure after receiving the value of feature extraction. Additionally, the classification results are achieved by contrasting the output values from the training and testing processes. Receiving input in the form of feature extraction is the initial stage in utilizing a probabilistic neural network to classify different fish species. The input values in the input layer are the outcomes of the characteristic, texture, and color extraction features.";
echo "My message is: ".strrev($mymessage);
echo "<br><br>";
echo "My new replaced Message";
echo "<br>";
$rep1 = str_replace("a", "i", $mymessage);
$rep2 = str_replace("e","q",$rep1);
$rep3 = str_replace("t","z",$rep2);
echo strrev($rep3);
echo "<br><br>";

$name = "isa";

if($name == "musa"){
    echo "The name ".$name. " is found";
} else { echo "Sorry ".$name. ", You are not the person";}


?>
