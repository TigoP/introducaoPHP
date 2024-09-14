<?php

require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Serie.php';
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Calculos/CalduladoraDeMaratona.php';


echo "Bem vindo!!";

$filme = new Filme(
    'Deadpool', 
    2024, 
    Genero::SuperHeroi,
    180
);


$filme->avalia(10);
$filme->avalia(9.8);
$filme->avalia(10);
$filme->avalia(9.9);

var_dump($filme);

echo$filme->media() . "\n";

echo $filme->anoLancamento;

$serie = new Serie('Lost', 2001, Genero::Fantasia, 8, 10, 50);
echo $serie->anoLancamento . "\n";
$serie-> avalia(9);
echo $serie-> media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para esta maratona vc gastará $duracao minutos";