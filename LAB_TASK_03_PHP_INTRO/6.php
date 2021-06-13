<?php
	$a=array(1,2,3,4,5,6,7,8,9,10);
	$search=40;
	$valid=0;
	for($i=0;$i<count($a);$i++){
		if($search==$a[$i]){
			echo $search." founded.";
			$valid=1;
			break;
		}
	}
	if(!$valid)
		echo $search." not founded!";
?>