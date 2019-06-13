<?php
// задача 1
function get_name($string){
    return  basename($string, '.txt');
};
$str = 'C:\Mysql\OSPanel\domains\test\test.txt';
var_dump(get_name($str));

// задача 2

function string_converter ($result_string, $flag) {
    switch ($flag) {
        case "upper":
            return mb_convert_case($result_string,MB_CASE_UPPER, "UTF-8");
        case "lower":
            return mb_convert_case($result_string,MB_CASE_LOWER, "UTF-8");
        case "two_upper":
            return mb_convert_case($result_string,MB_CASE_TITLE, "UTF-8");
    }
}

// Задача 3
$str = 'this_is_string';
function get_string($string){
    $newString=ucwords($string, '_');
    return str_replace('_','',$newString);
};
var_dump(get_string($str));
// задача 4

$array=function(){
    $array=[];
    for ($i=0;$i<5;$i++){
        array_push($array,rand(1,100));
    };
    return $array;
};
function get_arrays($get_array,$sum){
    $result_arr=[];
    for ($i=0;$i<5;$i++){
        $arr=$get_array();
        var_dump($arr);
        array_push($result_arr,$sum($arr));

    };
    $max=max($result_arr);
    return [$result_arr,
        $max
    ];
};
$sum=function($arr){
    return array_sum($arr);
};
var_dump(get_arrays($array,$sum));
?>