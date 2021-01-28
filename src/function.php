<?php

#返回颜色
#get the color index,0-5
function colorIndex($contribute,$max){
    if($contribute == 0)
    {
        return 0;
    }
    else if ($contribute == $max){
        return 4;
    }
    else if($contribute >= $max / 3 * 2){
        return 3;
    }
    else if($contribute >= $max/3){
        return 2;
    }
    else return 1;
}

