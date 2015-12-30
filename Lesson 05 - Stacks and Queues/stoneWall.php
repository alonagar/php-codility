function solution($H) {
   	$stack=[];
	$stack_num = 0 ;
	$stones = 0;
	foreach ($H as $h) {
		while ($stack_num > 0 && $stack[$stack_num - 1] > $h) {
			$stack_num -= 1;
		}
		if ($stack_num > 0 &&  $stack[$stack_num - 1] == $h) {
			
		}else{
			$stack[$stack_num] = $h;
			$stones++;
			$stack_num++;
		}
	}
	return $stones;
}
