<?php


echo "<center><h1><b><u>Multiplication Table</h1></b></u>";
echo "<hr size=10 color=#947222";
if ($_POST['txtTime'])
{
    echo "<h1>";
    $t=$_POST['txtTime'];
    for ($q = 1; $q <= 10; $q++)
    {
        echo $q. "x" .$t. "=" .$q * $t. "<br>";
    }
}
echo "<hr size=10 color=#947222";
?>
