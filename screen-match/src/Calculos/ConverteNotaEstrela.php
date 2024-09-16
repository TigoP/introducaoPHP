<?php

namespace screenmatch\Calculos;
use screenmatch\Modelo\Avaliavel;

class ConverteNotaEstrela {
    public function converte(Avaliavel $avaliavel): float {
        $nota = $avaliavel->media();

        return $nota;
    }
}