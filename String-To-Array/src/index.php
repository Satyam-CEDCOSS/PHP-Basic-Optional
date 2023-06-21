<?php

function strtoarr($arr){
    return explode('/',$arr);
}

$str = "Controller/Action/Parameter";
$data = strtoarr($str);
echo "<pre>";
print_r($data);

?>
