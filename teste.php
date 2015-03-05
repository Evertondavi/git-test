
<!DOCTYPE html>
<?php include "operacoes.php" ?>
<html>
<head>
<meta charset="UTF-8">
<title></title>

</head>
<body>
 

    <?php
    $n1 = 5;
    $n2 = 4;
    
    echo soma($n1, $n2);
    
    
    echo "<br>";
    echo subtracao($n1, $n2);
    
    
    echo "<br>";
    $resultado = divisao($n1, $n2);
    print_fun($resultado);
    
    echo "<br>";
    echo  multiplicacao($n1, $n2);
   
    
    
    
    ?>
    
</body>
</html>

