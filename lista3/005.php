<?php 
    $numero = readline ("Digite um número: ");
    $maior = $numero;
    $menor = $numero;

    while ($numero != 0) {
        if ($numero > $maior) {
            $maior = $numero;
        }

        if ($menor > $numero) {
            $menor = $numero;
        }
        $numero = readline ("Digite um número: ");
    }
    
    echo "O menor número é $menor e o maior número é $maior";
?>