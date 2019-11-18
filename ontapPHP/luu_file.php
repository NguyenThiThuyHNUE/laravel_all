<?php
function getCluster($fileSize)
{
    if ($fileSize <= 4096) {
        return 4;
    }
    elseif($fileSize%4096==0){
        return $fileSize/4096*4;
    }
    else{

        $count=0;
        while ($fileSize>4096){
            $fileSize=$fileSize - 4096;
            $count++;
        }
    }return $count*4+4;
}
echo getCluster('4097')



?>