<?php
$a = array(5,1,1,);
$b = count($a);
echo "Total number of duplicate elements found in the array is: ";
for ($i = 0; $i < $b; $i++) {
    for ($j = $i + 1; $j < $b; $j++) {
        if ($a[$i] == $a[$j])
            echo "$a[$j] ";
    }
}
?> 

<?php

$element=array("25", "12", "43");
$new_array=array_count_values($element);

print_r("The frequency of all elements of an array: \n");

while (list ($key, $val) = each ($new_array)) {
echo "$key occurs $val times \n";
}

?>

<?php

$element = array(25, 47, 42, 56, 32);

function oddCmp($element)
{
	return ($element & 1);
}
function evenCmp($element)
{
	return !($element & 1);
}

$odd = array_filter($element, "oddCmp");
$even = array_filter($element, "evenCmp");
$odd = array_values(array_filter($odd));
$even = array_values(array_filter($even));

print"\nThe Even elements are:\n";
echo implode(" ", $even) . "\n" ;

print"The Odd elements are :\n";
echo implode(" ", $odd);

?>