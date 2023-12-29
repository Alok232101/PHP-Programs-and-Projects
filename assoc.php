<?php
$array_num = array(12 => 'one',13 => 'two',10 => 'three',25 => 'four',3  => 'five');
$largestKey = null;
foreach ($array_num as $key => $value) 
{
    if ($largestKey === null || $key > $largestKey) 
    {
        $largestKey = $key;
    }
}

echo "The largest key in the associative array is: $largestKey";
?>
