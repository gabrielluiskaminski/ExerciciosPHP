<?php 
    for ($i = 1; $i <= 10; $i++){
        $numero = readline("Digite um número: ");

        if ($numero < 0) {
            $negativos[] = $numero;
        }
    }

    $totalNegativo = count($negativos);
    echo "O total de números negativos digitados é: $totalNegativo.\n";
?>