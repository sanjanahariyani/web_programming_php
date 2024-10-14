<?php
function odd($var)
{
  return($var & 1);
}

function even($var)
{
    return !($var & 1);
}

$a1=array(1,2,3,4,5);

$a2=array(1,2,3,4,5);

echo "Odd Numbers:"."<br>";
print_r(array_filter($a1,"odd"));
echo"<br>";
echo "Even Numbers:"."<br>";
print_r(array_filter($a2,"even"));
?>
