<html>
<body>
<?php

$myarray = range(20,1000,37);

function find_3_prime($num)
{
$count = 0;
foreach($num as &$value)
{
if (isprime($value))
{
$count++;
}
if($count == 3)
{
return $value;
}
}
}

function isprime($number)
{	
        if ($number <= 2) {
                return false;
        }
        for ($i=2; $i<=($number / 2); $i++) {
                if($number % $i == 0) { 
                        return false;
                }
        }
        return true;
}


echo find_3_prime($myarray)."<br />";

function check_exists($arr)
{
if (in_array(146,$arr))
echo "The number " . 146 . " exist in the array <br />";
else
echo "The number " . 146 . " doesn't exist in the array <br />";
if (in_array(284,$arr))
echo "The number " . 284 . " exist in the array <br />";
else
echo "The number " . 284 . " doesn't exist in the array <br />";
if (in_array(871,$arr))
echo "The number " . 871 . " exist in the array <br />";
else
echo "The number " . 871 . " doesn't exist in the array <br />";
}

check_exists($myarray);
?>
</body>
</html>