<?php
//Array change

$origin_array = array(1,2,3,4,5);
$updated_array = array('a','b','c','d','e','f');

function modifications($new_elements,$removed_elements){

	array_push($new_elements,6,7,8,9,10);
	array_splice($removed_elements,1,2);

	return print_r($new_elements)." ".print_r($removed_elements);

}

modifications($origin_array,$updated_array);

?>