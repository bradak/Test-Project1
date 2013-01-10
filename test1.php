<html>
<body>

<?php

echo "Hello PHP World<br>";
$myCar = "Suburban";
$myAge = 47;

//test comment

/*
   more comments
   shown here
*/

echo "More PHP test output!<br>";


myTest("Hi There!");

func2(7);

echo "factorial: " . factorial(8);
echo "<br>";

?>




<?php

function myTest($param1)
{
    global $myAge, $myCar;

    $len = strlen($param1);
    $pos = strpos($param1, "There");

    echo $param1 . "<br>";
    echo "len: " . $len . " pos: " . $pos . "<br>";

    echo "<br>";
    
    //echo $GLOBALS['myAge'];

    $cars = array("Subaru","Prius","Suburban");

    $cars[3] = "Camry";

    $i = 0;
    foreach ($cars as $car)
    {
	echo "car " . $i++ . " : " . $car . "<br>";
    }

    echo "<br>";
}

?>

<?php

function func2($arg1)
{
    //loop test
    if ($arg1 <= 0)
    {
	echo "must be a positive value..." . "<br>";
    }
    else
    {
	for ($i=0; $i < $arg1; $i++)
	{
	    echo "func2 loop: " . $i . "<br>";
	}

    }

    echo "<br>";
}

?>

<?php
function factorial($size)
{
    $total = 1;
    for ($i=1; $i <= $size; $i++)
        $total *= $i;

    return $total;
}

?>


</body>
</html>
