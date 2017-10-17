<HTML>

<BODY>

<?php

$mytext1 = "Good Morning Campers!";
$mytext2 = "Suits You Sir!";

$posWorld = strpos($mytext1, "Campers");
$IngMyTxt1 = strlen($mytext1);
$IngMyTxt2 = strlen($mytext2);  
  
echo "The first string is: '";
echo $mytext1;
echo "'<br/><br/>";
echo "The second string is: '";
echo $mytext2;
echo "'<br/><br/>";

echo "The number of characters in the first string is ";
echo $IngMyTxt1;
echo "<br/><br/>";
echo "The number of characters in the second string is ";
echo $IngMyTxt2;
echo "<br/><br/>";
echo "The word 'Campers' starts at position ";
echo $posWorld + 1;
echo " in the first string <br/><br/>";

echo "We can concatenate the strings:<br/><br/>";
echo ($mytext1) . " " . $mytext2 . "\n";
  
?>

<BODY>

<HTML>