<?php

class aDate{
	
  function diffDateTime($start, $end) {
		
  if(!is_int($start)) $start = strtotime($start);
  if(!is_int($end)) $end = strtotime($end);

  // if the difference is negative, the hours are from different days, and adds 1 day (in sec.)
  $diff = ($end >= $start) ? $end - $start : 86400 + $end - $start;

  // define the number of days, hours, minutes and seconds in difference
  $d = floor($diff / 86400);
  $h = floor(abs($diff - $d*86400)/3600);
  $m = floor(abs($diff - $d*86400 - $h*3600)/60);
  $s = $diff % 60;

  // sets the words, singular or plural
  $dstr =  ($d == 1) ? ' day ' : ' days ';
  $hstr =  ($h == 1) ? ' hour ' : ' hours ';
  $mstr =  ($m == 1) ? ' minute ' : ' minutes ';
  $sstr =  ($s == 1) ? ' second ' : ' seconds ';

  // setings for the string added in textual reprezentation of the difference
  $sdiff_d = ($d != 0) ? $d.$dstr : '';
  $sdiff_h = ($h != 0) ? $h.$hstr : '';
  $sdiff_m = ($m != 0) ? $m.$mstr : '';

  return array(
   'diff' => $sdiff_d. $sdiff_h. $sdiff_m. $s.$sstr,
   'days' => $d, 'hours'=>$h, 'min'=>$m, 'sec'=>$s,
   'totalhours' => floor($diff/3600), 'totalmin' => floor($diff/60), 'totalsec'=>$diff
  );
  
  function  dateFormat(){
	  
   }
  
}
	
	
	
}