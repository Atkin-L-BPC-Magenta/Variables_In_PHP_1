<HTML>

<BODY>

<?php

$mytext1 = "Hello everyone!";
$mytext2 = "How are you?";

$PosWorld = strpos($mytext1, "Everyone");
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
echo "The word 'Everyone' starts at position ";
echo $PosWorld + 1;
echo " in the first string <br/><br/>";
  
?>

<BODY>

<HTML>
