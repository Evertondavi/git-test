
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title></title>

<style>
	table,tr,td{border: solid 1px  #000;}
        .cor{background:gray;}
</style>
</head>
<body>
 <table>
<?php
   echo  
        "  <tr>
		<td>Nome</td>
           	<td>ID</td>
		<td>DESC</td>

	</tr>";

       for($i = 0; $i < 7; $i++){
    
        if(($i % 2 == 0)||($i == 0)){  
         echo
         "<tr>
		<td>nome</td>
           	<td>id</td>
		<td>desc</td>
	</tr>";
        }else{
           echo
            "<tr class='cor'>
		<td>nome</td>
           	<td>id</td>
		<td>desc</td>

	</tr>"; 
            
            
        }
	}
?>
     </table>

</body>
</html>

