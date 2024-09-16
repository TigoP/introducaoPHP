<?php
namespace screenmatch\Calculos;
use screenmatch\Modelo\Titulo;

Class CalculadoraDeMaratona {
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void {
        $this-> duracaoMaratona += $titulo-> duracaoEmMinutos();
    }

    public function duracao(): int {
        return $this-> duracaoMaratona;
    }
}