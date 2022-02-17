<?php
$i=0;$j=0;
$n=30;
$arr[$i][$j]=0;
for($i=0;$i<5;$i++)
{
    for($j=0;$j<5;$j++)
    if($i>$j)
        $arr[$i][$j]=1;
    else
        $arr[$i][$j]=0;
}
for($i=0;$i<5;$i++)
{
    echo "<b>Номер строки $i</b>";
    for ($j = 0; $j < 5; $j++)
    {
        echo"<li>".$arr[$i][$j]."</li>";
    }
}