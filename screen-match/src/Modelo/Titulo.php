<?php

Class Titulo {
    #private string $nome;
    #private int $anoLancamento;
    #private string $genero;
    private array $notas;

    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero
    ) 
    {

        #$this->nome = $nome;
        #$this->anoLancamento = $anoLancamento;
        #$this->genero = $genero;
        #todos estes itens que comentei acima se transformarão nestes, eliminando a ambiguidade dos demais:
        $this->notas = [];
    }

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function duracaoEmMinutos(): int {
        return 0;
    }
}