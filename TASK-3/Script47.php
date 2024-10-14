<?php
function myfunction($v)
{
    if ($v == "Dog")
      {
      return "Owl";
      }
  return $v;
}

$a=array("Horse","Dog","Cat");

print_r(array_map("myfunction",$a));

?>
