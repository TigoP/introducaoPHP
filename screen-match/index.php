<?php

require __DIR__ . "/src/Modelo/ComAvaliacao.php";
require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Episodio.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalduladoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConverteNotaEstrela.php";

use screenmatch\Modelo\ {
    Titulo, Filme, Serie, Episodio, Genero
};
use screenmatch\Calculos\ {
    CalculadoraDeMaratona, ConverteNotaEstrela
};

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
$episodio = new Episodio($serie,  'Piloto', 153);
echo $serie->anoLancamento . "\n";
$serie-> avalia(9);
echo $serie-> media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para esta maratona vc gastará $duracao minutos";

$conversor = new ConverteNotaEstrela();
echo $conversor->converte($serie);