<?php

namespace screenmatch\Modelo;

abstract class Titulo implements Avaliavel {

    use ComAvaliacao;
    
    public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero
    ) 
    {}

    public abstract function duracaoEmMinutos(): int;
};