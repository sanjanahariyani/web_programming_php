<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a);
print_r($a);
echo "<br>";

array_unshift($a,"black");
print_r($a);

?>
