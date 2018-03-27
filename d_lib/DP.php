<?php

function findTegById($teg = 'div' , $id = 'main' , $html = '<div id="main" > Some content </div>')
{
	
	$teg = '<' . $teg;
	
	
	
	$len_html = mb_strlen($html,'UTF-8');
	$len_teg  = mb_strlen($teg ,'UTF-8');
	$len_id   = mb_strlen($id  ,'UTF-8');
	
	str_split($id  );
	str_split($teg );
	str_split($html);
	
	$content = '';
	$startPoint = -1;
	$finishPoint = -1;
	
	$isOpen = 0;
	
	for($i = 0;$i < $len_html ;$i++){
		if($html[$i] == 'i' && $html[$i + 1] == 'd'){		
			$control = '';
			for($i_id = 0;$i_id < $len_id ;$i_id++){
				if($control ){}
					if($html[$i + 4 + $i_id] == $id[$i_id]){
						$control .= $id[$i_id];
					}
					else{
						break;
					}
			}
		}
		if($control == $id){
			if($html[$i] == '>' && $startPoint == -1){
				$startPoint = $i + 1;
				
			}
			if($html[$i] == '<' && $html[$i + 1] != '/' ){
		
				$isOpen++;
				continue;
			}
			if($html[$i] == '<' && $html[$i + 1] == '/' && $isOpen > 0 || $html[$i] == '/' && $html[$i + 1] == '>' && $isOpen > 0 ){
				$isOpen--;
				
				continue;
			}
			if($html[$i] == '<' && $finishPoint == -1 && $html[$i + 1] == '/' && $isOpen <= 0 ){
				$finishPoint = $i;
				
				break;
			}
			
		
		}
	}
	
	for($s = $startPoint; $s < $finishPoint;$s++){
		$content .= $html[$s]; 
	}
	
	return $content ;	
}

function findTegByClass($teg = 'div' , $class = 'main' , $html = '<div class="main" > Some content </div>')
{
	
	$teg = '<' . $teg;
	
	
	
	$len_html = mb_strlen($html,'UTF-8');
	$len_teg  = mb_strlen($teg ,'UTF-8');
	$len_class   = mb_strlen($class  ,'UTF-8');
	
	str_split($class  );
	str_split($teg );
	str_split($html);
	
	$content = '';
	$startPoint = -1;
	$finishPoint = -1;
	
	for($i = 0;$i < $len_html ;$i++){
		if($html[$i] == 'c' && $html[$i + 1] == 'l' && $html[$i + 2] == 'a' && $html[$i + 3] == 's' && $html[$i + 4] == 's'  ){		
			$control = '';
			
			for($i_class = 0;$i_class < $len_class ;$i_class++){
				if($control ){}
					if($html[$i + 7 + $i_class] == $class[$i_class]){
						
						$control .= $class[$i_class];
					}
					else{
						break;
					}
			}
		}
		if($control == $class){
			if($html[$i] == '>' && $startPoint == -1){
				$startPoint = $i + 1;
			}
			if($html[$i] == '<' && $finishPoint == -1 ){
				$finishPoint = $i;
			}
		}
	}
	
	for($s = $startPoint; $s < $finishPoint;$s++){
		$content .= $html[$s]; 
	}
	
	return $content ;	
}

?>