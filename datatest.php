<?php $data = "2008-01-09 14:56:06"; 

echo date('d/m/Y H:i:s', strtotime($data))
."<br>"; 
print_r(date('d/m/Y', strtotime($data))); 

?>