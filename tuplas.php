<?php

// $dados = ['Vinicius', 10, 24];
// $nome = $dados[0];
// $nota = $dados[1];
// $idade = $dados[2];
// list($nome, $nota, $idade) = $dados;
// var_dump($nome, $nota, $idade);

// $dados = [
//   'nome' => 'Vinicius',
//   'nota' => 10,
//   'idade' => 24
// ];
// list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados;
// var_dump($nome, $nota, $idade);

$dados = [
  'nome' => 'Vinicius',
  'nota' => 10,
  'idade' => 24
];
extract($dados); // Pega um array e transforma em varaias variaveis
var_dump($nome, $nota, $idade);
var_dump(compact('nome', 'nota', 'idade')); // Pega varaias variaveis e transforma em um array