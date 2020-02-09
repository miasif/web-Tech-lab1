<?php
  
 
 $array= array(6,19,12,38,41,59,36,47,78,90);

  function search($v , $array)
  {
	  for($i=0;$i<count($array);$i++)
		{
			if($v == $array[$i])
				{
					echo "$v was found at index : $i <br>";
				}
 
		}
  }
  
  search(12,$array);
  search(59,$array);
 

?>