<?php
function search($array,$k,$low=0,$high=0){
    //判断数组元素的数量
    if(count($array)!=0 and $high==0){      //判断是否为第一次调用
        //数组的元素个数
        $high = count($array);
    }
    if($low<=$high){
       $mid = intval(($high+$low)/2);
	if($array[$mid] == $k){
            return $mid;    //如果找到则返回
        }elseif($k < $array[$mid]){
            //如果上面没有找到，则继续查找
            return search($array,$k,$low,$mid-1);
        }else{
            return search($array,$k,$mid+1,$high);
        }
    }
    return "未找到";

}

$array = array(3,4,5,7,8,9,10);
echo search($array,4);
