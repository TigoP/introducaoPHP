<?php

$caminho = __DIR__ . '/filme.json';
$pegarConteudo = file_get_contents($caminho);
$filme = json_decode($pegarConteudo, true);
var_dump($filme);
