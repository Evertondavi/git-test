
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
   $n = 7;
   $cont= 0;
    for($i = 1; $i <= $n; $i++){
      
          if($n % $i == 0){
              $cont++;
          }
    }
          if($cont == 2){
              echo "<p>Número Primo <br>". $n . " </p>";
          }else{
              
             echo "<p>Não é um número Primo <br>". $n . " </p>";  
          }
        
        
        
    
?>
    

</body>
</html>

