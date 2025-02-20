<?php 
    $primeiroValor = readline("Digite o primeiro valor: ");
    $segundoValor = readline("Digite o primeiro valor: ");

    if ($primeiroValor > $segundoValor) {
        echo "$primeiroValor é maior que $segundoValor";
    } else {
        echo "$segundoValor é maior que $primeiroValor";
    }
?>