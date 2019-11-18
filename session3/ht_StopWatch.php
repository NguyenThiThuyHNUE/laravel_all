<?php
include ("StopWatch.php");

$array=[];
function  rundom(){
    return rand(0,10000);
}
for ($i=0; $i<10000; $i++){
  array_push($arr,rundom());
}



    $stopwatch=new StopWatch();
    $stopwatch->start();


    for($i=0;$i<count($arr)-1;$i++){
        for ($j=$i+1;$j<count($arr);$j++){
            if ($arr[$i]>$arr[$j]){
                $tg=$arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$tg;
            }
        }
    }
 $stopwatch->stop();
$stopwatch->getElapsedTime();

echo $stopwatch->getElapsedTime();
?>