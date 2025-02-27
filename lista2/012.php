<?php 
    $aux = null;

    for ($i = 1; $i <= 4; $i++){
        $valor = readline("Digite um número: ");
        if ($valor % 2 == 0 && ($aux == null || $aux > $valor)){
            $aux = $valor;
        } 
    }

   if ($aux == null) {
    echo "Não existem números pares dentre os quatro digitados.";
   } else {
    echo "O menor número digitado é: $aux";
   }
?>