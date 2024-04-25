<?php
 //declaração de variaveis
 $nome = "julia";
 $numero;
 $salario = 1000.50;
  $numeros = array(1,2,"3", "texto");
  $teste = true;
  

//impressao com interpolação
echo "O nome é: {$nome} e o salario é: {$salario}";
//impressao com contenação
echo "\nnome: ".$nome. "e o salario".$salario."\n" ;
//impressão com var_dump()
var_dump($nome);

echo '<pre>';
print_r($numeros);  

var_dump($teste);
?>