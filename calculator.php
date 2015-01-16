<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 1/16/15
 * Time: 12:26 PM
 */
$_POST['number'];

echo identifyEvenOrOddNumber($_POST['number']);
function is_odd(($number % 2)==0){
    return false;


}else{
    return true;
}

function identifyEvenOrOddNumber($number){
    if(($number%2)==0){
        return "even number";

    }else{
        return "odd number";


    }
}
