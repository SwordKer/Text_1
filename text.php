<?php 


function recursive($num) {
    echo $num;
    
    if($num < 0) {
        return;
    }
    recursive($num-1);
    echo $num;
}

recursive(10);