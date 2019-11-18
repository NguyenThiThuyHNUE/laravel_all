<?php

function isPrime($m) {
    if($m<2){
        return 0;
    }
    for($i=2; $i< $m; $i++){
        if($m % $i==0){
            return 0;
        }
    }
    return 1;
}

function isNearPrime($m){
        if( isPrime($m-1) ||isPrime($m) || isPrime($m+1)){
            return 1;
        }return 0;
}
echo isNearPrime(77);




?>