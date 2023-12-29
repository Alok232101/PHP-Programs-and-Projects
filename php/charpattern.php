<?php
function patternp($n)
{
$num = 65;
for ($i = 0; $i < $n; $i++)
{
for ($j = 0; $j <= $i; $j++ )
{
$ch = chr($num);
echo $ch.",";
echo " ";
$num = $num + 1;
}
echo "<br>";
}
}
$n = 5;
patternp($n);
?>
