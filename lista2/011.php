<?php 
    $usuario = readline("Escolha dois ou um: ");
    $usuarioDois = rand(1,2);
    $usuarioTres = rand(1,2);

    echo "Você escolheu $usuario\nO úsuario 2 escolheu $usuarioDois\nO úsuario 3 escolheu $usuarioTres.\n";

    if ($usuario == $usuarioDois && $usuario == $usuarioTres) {
        echo "Empate, recomece";
    } elseif ($usuario == $usuarioDois) {
        $escolha = strtolower(readline("Escolha par ou ímpar: "));
        $usuario = readline("Digite um número: ");
        $usuarioDois = random_int(1,10);
        echo "Você escolheu $usuario, o úsuario 2 escolheu $usuarioDois\n";
        $resultadoParOuImpar = ($usuario + $usuarioDois) % 2;
        if ($escolha == "impar" || $escolha == "ímpar" || $escolha == "Ímpar") {
            if ($resultadoParOuImpar != 0) {
                echo "Você venceu !!!!";
            } else {
                echo "O úsuario 2 venceu";
            }
        } else {
            if ($resultadoParOuImpar != 0) {
                echo "O úsuario 2 venceu";
            } else {
                echo "Você venceu !!!!";
            }
        }
    } elseif ($usuario == $usuarioTres) {
        $escolha = strtolower(readline("Escolha par ou ímpar: "));
        $usuario = readline("Digite um número: ");
        $usuarioTres = random_int(1,10);
        echo "Você escolheu $usuario, o úsuario 3 escolheu $usuarioTres\n";
        $resultadoParOuImpar = ($usuario + $usuarioTres) % 2;
        if ($escolha == "impar" || $escolha == "ímpar") {
            if ($resultadoParOuImpar != 0) {
                echo "Você venceu !!!!";
            } else {
                echo "O úsuario 3 venceu";
            }
        } else {
            if ($resultadoParOuImpar != 0) {
                echo "O úsuario 3 venceu";
            } else {
                echo "Você venceu !!!!";
            }
        }
    } elseif ($usuarioDois == $usuarioTres) {
        $escolha = random_int(1,2);
        $usuarioDois = random_int(1,10);
        $usuarioTres = random_int(1,10);
        echo "O úsuario 2 escolheu $usuarioDois\no úsuario 3 escolheu $usuarioTres\n";
        $resultadoParOuImpar = ($usuarioDois + $usuarioTres) % 2;
        if ($escolha == "impar" || $escolha == "ímpar") {
            if ($resultadoParOuImpar != 0) {
                echo "O úsuario 2 venceu!";
            } else {
                echo "O úsuario 3 venceu!";
            }
        } else {
            if ($resultadoParOuImpar != 0) {
                echo "O úsuario 3 venceu!";
            } else {
                echo "O úsuario 2 venceu!";
            }
        }
    }

?>