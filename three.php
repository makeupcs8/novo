<?php 
$arr = array(1,1,2,1,1,1,1,1,1,1,2,3,4,4,3,5,6,2,1);

$half_size_arr = count($arr)/2;

$a = array_count_values($arr);

echo '<pre>';
print_r($a);

foreach($a as $key=>$val){
    if($val>$half_size_arr){
        echo $key.'-'.$val.'<br>';
    }
}

?>