<?php

$alunos2021 = [
  'Vinicius',
  'João',
  'Ana',
  'Roberto',
  'Maria',
];

$novosAlunos = [
  'Patricia',
  'Nico',
  'Kilderson',
  'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];
// $alunos2022 = [...$alunos2021, $novosAlunos];
// $alunos2022 = array_merge($alunos2021, $novosAlunos); // uni junta dois array, coloca o segundo no final do primeiro
var_dump($alunos2022);

array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // Adiciona elementos no final do array
var_dump($alunos2022);

$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela'); // Adiciona elementos no inicio do array
var_dump($alunos2022);

array_shift($alunos2022); // Remove o elemento do inicio do array
var_dump($alunos2022);

array_pop($alunos2022); // Remove o elemento do final do array
var_dump($alunos2022);