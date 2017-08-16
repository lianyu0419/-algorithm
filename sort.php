<?php

//冒泡法
function bubbleSort ($arr){
	$count = count($arr);
	for($i=0;$i<$count;$i++){
		for($j=0;$j<$count-1;$j++){
			if($arr[$j]>$arr[$j+1]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $temp;
			}
		}
	}
	return $arr;
}

//快速排序法
function quick_sort($arr){
	if(!is_array($arr)) return false;
	$count = count($arr);
	if($count <= 1){
		return $arr;
	}
	$left = array();
	$right = array();
	for ($i=1; $i<$count;$i++){
		if($arr[$i]<$arr[0]){
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	$left = quick_sort($left);
	$right = quick_sort($right);
	return array_merge($left, array($arr[0]), $right);
}

$arr=array(1,43,54,62,21,66,32,78,36,76,39);
print_r(bubbleSort($arr));
print_r(quick_sort($arr));

