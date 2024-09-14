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
#12 - Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
function operMath(int $x, int $y, string $resultado) {
    return $resultado = $x + $y;
}
echo "---------------------------------------------\n";
#13 - Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
function calculoImc(float $peso, float $altura): float {
    $altura = 1.69;
    $peso = 79;

    return $peso / $altura ** 2;
}
echo calculoImc(1.69, 79);
echo "---------------------------------------------\n";
#14 - Crie uma função em PHP que converta graus celsius para Fahrenheit.
function conversao(float $celsius): float {
    return ($celsius * 9 / 5) + 32;
}
echo "---------------------------------------------\n";
#15 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
$notas1 = [9, 8, 7, 10];
rsort($notas1);
echo $notas1[0], $notas1[1], $notas1[2];
echo "---------------------------------------------\n";
#16 - Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.
$string = "Vinicius Dias,1997,Programador";
var_dump(explode(',', $string));
echo "---------------------------------------------\n";
#17 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética;

function desordenado(array $string1): array {
    sort($string1);
    return $string1;
}
$string1 = array("casa", "papel", "sofa", "abacate");
print_r($string1);

$ordenado = desordenado($string1);
print_r($ordenado);
echo "---------------------------------------------\n";
#18 - Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.
$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);
"---------------------------------------------\n";
#19 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.
$nomeArq = 'teste.txt';
$texto = "\n PHP é um programa!";
$abrirArq = fopen($nomeArq, 'a');
fwrite($abrirArq, $texto);
fclose($abrirArq);
"---------------------------------------------\n";
#19 - Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.
$string2 = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$converter = json_decode($string2);
var_dump($converter);
echo "---------------------------------------------\n";
#20 - Levando em consideração o código a seguir: Como podemos torná-lo um pouco mais robusto, impedindo que o saldo seja manipulado livremente, por exemplo? Altere o código da classe para que o saldo seja alterado somente através das operações de saque e depósito.

#21 - Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;
enum TipoConta {
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxa(): bool {
        return match($this) {
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria=> false,
        };
    }
}

#22 - Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo. Use os tipos e formas de acesso adequadas.
class Conta {
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ) {
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }
}