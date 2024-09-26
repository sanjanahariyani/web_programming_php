<?php
$students=array(
		  array("name"=>"sanju","scores"=>array(90,90,93)),
		  array("name"=>"kruti","scores"=>array(90,45,78)),
		  array("name"=>"trupti","scores"=>array(56,78,46)),
		  );
		  
		  foreach($students as $student)
		  {
			  echo "scores for ".$student['name'].":";
			  echo implode(",",$student['scores'])."<br>";
		  }
		  
?>
