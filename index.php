<?php 
 function calculator($a,$b,$operation){
    switch ($operation) {
        case 'add':
            return $a+$b;
            break;
        case 'sub':
                return $a-$b;
                break;    
        case 'mul':
            return $a*$b;
        break;
        case 'div':
            return $a/$b;
        break;
        default:
            return 'Choose correct option';
            break;
    }
 }

$result= calculator(10,3,'add');
 echo $result;
?>