<?php

$notasBimestre1 = [
  'Vinicius' => 6,
  'João' => 8,
  'Ana' => 10,
  'Roberto' => 7,
  'Maria' => 9,
];

$notasBimestre2 = [
  'João' => 8,
  'Ana' => 10,
  'Roberto' => 7,
  'Maria' => 9,
];

// array_diff() => Verifica se tem diferenca entre dois ou mais array, busca entre os valores
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// array_diff_key() => Verifica se tem diferenca entre dois ou mais array, busca entre as chaves
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// array_diff_assoc() => Verifica se tem diferenca entre dois ou mais array, busca valores diferentes
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos)); // combina dois array

var_dump(array_flip($alunosFaltantes)); // inverte o array
