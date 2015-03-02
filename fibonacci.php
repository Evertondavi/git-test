
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title></title>

<style>
	
</style>
</head>
<body>
 
<?php
   $x= 10;
   $y = 0;
   $w = 1;
   echo "$x números da sequência de Fibonacci :{";
   echo "$y, $w,";
   for($i = 0; $i < $x; $i++){
       $soma = $y + $w;
       echo "$soma";
       if($i != $x-1){
           echo ',';
       }
       $y = $w;
       $w = $soma;
   }echo '}';
?>
    

</body>
</html>


