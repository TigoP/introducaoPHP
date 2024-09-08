<?php

echo "Bem vindo!\n";
echo "---------------------------------------------\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "A Bela e a fera";
$nomeFilme = "Deadpool";
#$anoLancamento = $argv[1] ?? 2022;
$anoLancamento = 2022;
$quantidadeNotas = $argc -1;

$notas = [];

for ($contador=1; $contador < $argc; $contador++) { 
    $notas[] = (float) $argv[$contador];
} 

$notaFilme = array_sum($notas) / $quantidadeNotas;
echo "---------------------------------------------\n";
$planoPrime = true;
#echo $nomeFilme, $incluidonoPlano = $planoPrime && $anoLancamento < 2020;

#$contador1 = 1;
#while ($argv != 0) {
#    $somaNotas += $argv[$contador++];
#}
#echo $contador1;

echo "Nome do filme: " .$nomeFilme . "\n";
echo "---------------------------------------------\n";
echo "Nota do filme: $notaFilme\n";
echo "---------------------------------------------\n";
echo "Ano de lancamento: $anoLancamento\n";
echo "---------------------------------------------\n";

if ($anoLancamento > 2022) {
    echo "Este filme é um lançamento\n";
} elseif($anoLancamento >= 2020 && $anoLancamento <= 2022) {
    echo "Este filme ainda é meio novo\n";
} else {
    "É, este filme está velho\n";
}
echo "---------------------------------------------\n";
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação\n" ,
    "Deadpool" => "Herói\n",
    "A Bela e a fera" => "Fantasia\n",
    default => "Genero desconhecido\n",
};
echo $genero;
echo "---------------------------------------------\n";

$argc; #indica a quantidade de itens existem na variavel

$notasFilmes = [9.8, 9.9, 10, 8.3, 9];
var_dump($notasFilmes);
echo "---------------------------------------------\n";

$filmes = [
    'nome' => 'Deadpool',
    'ano' => 2024,
    'nota' => 7.8,
    'genero' => 'heroi'
];
echo $filmes['nome'];
echo "\n";
echo "---------------------------------------------\n";
