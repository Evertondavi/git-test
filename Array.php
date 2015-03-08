<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
	tr{border: solid 1px  #000;}
        table{width:1000px;padding:10px;}
        tr{width:200px;float:left;padding:4px;}
        td{width:200px;text-align:center;padding:4px;}
        
</style>
    </head>
    <body>
        <table>
        <?php
$tabela [0][0] = 'Turma';
$tabela [0][1] = 'Disciplina';
$tabela [0][2] = 'Semana';
$tabela [0][3] = 'Porfessor';
$tabela [1][0] = '02k01';
$tabela [1][1] = 'Tecnologia Web II';
$tabela [1][2] = 'Segunda';
$tabela [1][3] = 'Charles';
$tabela [2][0] = '02J01';
$tabela [2][1] = 'Linguagem de ProgramaçãoI';
$tabela [2][2] = 'Terça';
$tabela [2][3] = 'João';
$tabela [3][0] = '02K01';
$tabela [3][1] = 'Linguagem de ProgramaçãoI';
$tabela [3][2] = 'Quarta';
$tabela [3][3] = 'Charles';
//Ou

$n_linhas = sizeof($tabela);
for($linha = 0;$linha < $n_linhas;$linha++) {
$n_colunas = sizeof($tabela[$linha]);
for($coluna=0; $coluna < $n_colunas ;$coluna++) {
    
echo "<tr><td>".$tabela[$linha][$coluna]. "</td></tr>" ;
   
} 
echo "<br>";
}
        ?>
        <table>
    </body>
</html>
