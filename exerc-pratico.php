<?php

#$nomeSerie = "Lost\n";
#$anoSerie = $argv[1] ?? 2019;
#$notaSerie = (10 + 9 + 7 + 5 + 8 + 10) / 6;

#echo "A serie: " .$nomeSerie . "Comecou em: " .$anoSerie . "\n e detem nota: " .$notaSerie;

#1 - Escreva um programa em PHP que exiba seu nome na tela.
echo $nome = $argv[1] ?? "meu nome\n";
echo "---------------------------------------------\n";

#2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$media = (10 + 9 + 8.8) / 3;
echo "A média é: " . $media ."\n";
echo "---------------------------------------------\n";

#3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$metros = 10;
$centimetros = $metros / 100;
echo "a conversao de $metros metros em centrimetros é: $centimetros cm.\n";
echo "---------------------------------------------\n";

#4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$ano = 2024;
if(($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "Ano $ano é bissexto\n";
} else {
    echo "Ano $ano não é bissexto\n";
}
echo "---------------------------------------------\n";

#5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$celsius = 34;
$fahrenheit = $celsius * 1.8 + 32;
echo "A conversao de $celsius para fahrenheit é: $fahrenheit \n";
echo "---------------------------------------------\n";
