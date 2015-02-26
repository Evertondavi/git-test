<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>

<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$napro = true;
$p1 = 10.0;
$m1 = 9.0;
$m2 = 10.0;
$proj1 = 7.0;
$proj2 = 8.0;
$proj3 = 7.0;
$proj4 = 6.0;
$traF = 7;
$proc = 8;
$pf = 8;
$mi = 0;
$mf = 0;

 $mi = (30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2
 + 5*$proj3 + 5*$proj4 + 10*$traF + 20*$proc)/100;
 
  if($mi >= 7.5){
  $mf = $mi;
  echo "<h1>Aprovado sem prova final</h1>";
    echo "<h1>Parabéns!!! Boas férias</h1>";
    echo "<h2>Media Final</h2>".$mf;
  }else{
  $mf = ($mi + $pf)/ 2;
  $napro = false;
  }
  
  if(($mf >= 5.0)and($napro == false)){
         echo "<h1>Aprovado com prova final</h1>";
		    echo "<h1>Agora já pode descansar tranquilo</h1>";
         echo "<h2>Media Final</h2>".$mf;
  }
  
  if($mi < 5.0){
      echo "<h1> Reprovado</h1>";
	  echo "<h1> Não foi dessa vez. Ano que vem tem mais TWIL</h1>";
	  echo "<h1>Media Intermediaria: </h1>". $mi;
	  echo "<h1>Media final: </h1>".$mf;
  }

  
?>
    </body>
</html>