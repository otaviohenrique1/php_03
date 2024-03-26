<?php

$notas = [
  'Vinicius' => 6,
  'João' => 8,
  'Ana' => 10,
  'Roberto' => 7,
  'Maria' => 9,
];
// sort($notas); // sort => ordena array
// rsort($notas); // rsort => ordena array de forma reversa
// asort($notas);
// arsort($notas);
// ksort($notas); // ordena usando as chaves
krsort($notas); // ordena usando as chaves de forma reversa
// usort($notas);
// uksort($notas);
var_dump($notas);

// echo gettype($notas);

// if(gettype($notas) === 'array') {
//   echo 'Sim, é um array';
// }

if(is_array($notas)) {
  echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas)); // Verifica se o array é uma lista

// function funcao(array $valor) {
//   for ($i=0; $i < count($valor); $i++) { 
//     echo $valor[$i];
//   }
// }

var_dump(array_key_exists('Vinicius', $notas)); // Verifica se a chave existe no array

// foreach ($notas as $aluno => $nota) {
//   if ($aluno === 'Vinicius') {
//     return true;
//   }
// }
var_dump(isset($notas['Vinicius'])); // Verifica se uma chave existe no array e se nao é nula

var_dump(in_array(10, $notas)); // Verifica se um valor existe no array
// var_dump(in_array(10, $notas, true)); // Verifica se um valor existe no array

var_dump(array_search(10, $notas)); // Verifica se um valor existe no array
// var_dump(array_search(10, $notas, true)); // Verifica se um valor existe no array