<?php
sleep(2);
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if (!isset($_POST['a']) || !isset($_POST['b']) || !isset($_POST['c']))
{
    echo "Fields are not set";
}
    elseif (!is_numeric($a) || !is_numeric($b) || !is_numeric($c))
    {
        echo "We can use only numbers";
    }
    elseif ($a==0)
    {
        echo "You can't solve this equalution as a = 0";
    }
    elseif ($_POST['a']=="" || ($_POST['b']=="") || ($_POST['c']==""))
    {
        echo "Fields are empty";
    }
else
{
    $d = $b * $b - 4 * $a * $c;

    if ($d < 0)
    {
        echo "You can't solve this equalution";
    }
    elseif ($d == 0)
    {
        echo "x = ";
        echo (-$b / 2 * $a);
    }
    else
    {
        echo "x1 = " . ((-$b + sqrt($d)) / (2  *$a));
        echo "<br>";
        echo "x2 = ";
        echo ((-$b - sqrt($d)) / (2 * $a));
    }
}
?>