<?php


function wordTOdigit($str){
    $arr = [];
    $arr['one'] = 1;
    $arr['two'] = 2;
    $arr['three'] = 3;
    $arr['four'] = 4;
    $arr['five'] = 5;
    $arr['six'] = 6;
    $arr['seven'] = 7;
    $arr['eight'] = 8;
    $arr['nine'] = 9;
    $arr['zero'] = 0;

    $data = explode(';',$str);
    $txt = "";
    foreach ($data as $value) {
        $txt .= $arr[$value];
    }
    return $txt;
}

$str = "one;two;three";
echo $str;
$data = wordTOdigit($str);
echo "<br>";
echo $data;
?>
