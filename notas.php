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
  echo 'Sim, é um array';
}