<?php 
  $quantidadeMacas = readline("Digite a quantidade de maças compradas: "); 
  
  if ($quantidadeMacas < 12) {
    $quantidadeMacas = $quantidadeMacas * 1.30;
  } else {
    $quantidadeMacas = $quantidadeMacas * 1;
  }

  echo "O valor total das maças compradas é: $quantidadeMacas";
?>