<?php

echo str_repeat('*',24) . "\n";
$titulo = [
    'titular' => 'Tiago Pereira',
    'saldo atual' => 1000,
];

echo 'Titular: ' . $titulo['titular'] . "\n";
echo 'Saldo: R$ ' . $titulo['saldo atual'] . "\n";
echo str_repeat('*',24) . "\n";

do {
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n" . "\n";
    echo "Digite a opção desejada:\n";

    $numero = (int) fgets(STDIN) . "\n";
    #if ($numero != 1 || $numero != 2 || $numero != 3 || $numero != 4);
    #    echo "Numero Invalido\n";
    #    echo "Digite a opção desejada:\n";
    #    $numero = fgets(STDIN) . "\n";

    switch ($numero) {
        case 1:
            echo "Saldo atual: R$ " . $titulo['saldo atual'] . "\n" . "\n";
            #echo "Digite a opção desejada:\n";
            #$numero = (int) fgets(STDIN) . "\n";
            break;
        case 2:
            echo "Qual valor deseja sacar? \n";
            $saque = (float) fgets(STDIN) . "\n";
            if ($saque > $titulo['saldo atual']){
                echo "Saldo Insuficiente";
            }else{
                #$saque -= $titulo['saldo atual'];
                echo "Saque autorizado" . "\n" . "\n";
                $titulo['saldo atual'] = $titulo['saldo atual'] - $saque;
                #echo "Digite a opção desejada:\n";
                #$numero = (int) fgets(STDIN) . "\n";
            }
                #if ($numero != 1 || $numero != 2 || $numero != 3 || $numero != 4);
                #    echo "Digite a opção desejada:\n";
                #    $numero = (int) fgets(STDIN) . "\n";
            break;
        case 3:
            echo "Qual valor deseja depositar?: \n";
            $deposito = (float) fgets(STDIN) . "\n";
            $titulo['saldo atual'] = $titulo['saldo atual'] + $deposito;
            echo "Deposito efetuado com sucesso!" . "\n" . "\n";
            #echo "Digite a opção desejada:\n";
            #$numero = fgets(STDIN) . "\n";
            #if ($numero != 1 || $numero != 2 || $numero != 3 || $numero != 4);
            #    echo "Digite a opção desejada:\n";
            #    $numero = (int) fgets(STDIN) . "\n";
            break;
        case 4:
            "Fim do programa!";
            break;
        default:
            echo "Numero Invalido";
            #echo "Digite a opção desejada:\n";
            #$numero = (int) fgets(STDIN) . "\n";
            break;
    }
} while ($numero != 4);
?>