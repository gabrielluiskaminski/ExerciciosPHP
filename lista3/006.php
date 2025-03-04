<?php 
    do {
        $notaUm = readline("Digite a primeira nota: ");
        $notaDois = readline("Digite a segunda nota: ");
        $media = ($notaUm + $notaDois) / 2; 

        if ($notaUm >= 0 && $notaUm <= 10 ){
            if ($notaDois >= 0 && $notaDois <= 10){
                if ($media >= 6){
                    echo "Você foi aprovado com uma média de " . number_format($media, 1, ".") . "\n";
                } else {
                    echo "Infelizmente você não foi aprovado, sua média foi de " . number_format($media, 1, ".") . "\n";
                }
            } else {
                echo "A nota dois é inválida.\n";
            }
        } else {
            echo "A nota um é inválida.\n";
        }

        $continuar = readline("Deseja Tentar novamente?");
    } while ($continuar == "S" || $continuar == "s");
?>