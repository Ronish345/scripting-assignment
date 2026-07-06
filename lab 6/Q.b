<?php
$num = 17;
$flag = true;

if($num <= 1){
    $flag = false;
}

for($i=2; $i<=$num/2; $i++){
    if($num % $i == 0){
        $flag = false;
        break;
    }
}

if($flag)
    echo "$num is a Prime Number";
else
    echo "$num is not a Prime Number";
?>
