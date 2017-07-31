<?
/*
  By @nodws
  contact@nodws.com

1 function, no libs or schmuck Classes
*/

function short($id,$rev=0){
	if($rev)
	return intval($id,36);
	return base_convert($id, 10, 36);
}
