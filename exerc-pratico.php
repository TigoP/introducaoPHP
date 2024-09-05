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

#6 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
for ($i=0; $i < 100; $i++) { 
    if ($i % 2 !== 0 ) {
        echo $i . " , ";
    }
}
echo "\n";
echo "---------------------------------------------\n";

#7 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
$peso = 79;
$altura = 1.69;
$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Com o IMC a $imc , você está abaixo do peso!\n";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Com o IMC a $imc , você está com peso normal!\n";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Com o IMC a $imc , você está com acima do peso!\n";
} else {
    echo "Com o IMC $imc , você está com obesidade!\n";
}
echo "---------------------------------------------\n";

#8 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$horas = 16;
switch ($horas) {
    case $horas < 12:
        echo "Bom dia!\n";
        break;
    case $horas >= 12 && $horas <= 18:
        echo "Boa tarde!\n";
        break;
    default:
        "Boa noite\n";
        break;
}
echo "---------------------------------------------\n";

#9 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].
$array = [1, 2, 2, 3, 4, 4, 5];
print_r ($semDuplicatas = array_unique($array));
echo "\n";
echo "---------------------------------------------\n";
#10 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}
echo "---------------------------------------------\n";
#10 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$contaBancaria = [
    'nome' => 'Tiago',
    'saldo' => 90000,
];
echo $contaBancaria['nome'] . ' possui R$ ' . $contaBancaria['saldo'];
echo "---------------------------------------------\n";
#11 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$nomesFamiliares = ['Andreia', 'Tamires', 'Atila', 'João'];
$nomesFamiliares[] = 'Bernardo';
print_r($nomesFamiliares);
echo "---------------------------------------------\n";
