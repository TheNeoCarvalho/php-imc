<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- 
  <form action="index.php" method="POST">
    <input type="text" name="email">
    <input type="password" name="senha">
    <button type="submit">Enviar</button>
  </form>
-->  

<form action="index.php" method="POST">
  <label for="peso">PESO</label>
    <input placeholder="Informe aqui seu peso"type="number" step="0.01" name="peso">
    <br>
     <label for="altura">ALTURA</label>
    <input placeholder="Informe aqui sua altura"type="number" step="0.01" name="altura">
    <br>
    <button type="submit">Calcular IMC</button>
  </form>

<?php

  if (isset($_POST['peso']) && isset($_POST['altura'])) {
    
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc = +$peso / +$altura ** 2;
  echo "<p>Seu IMC é " . number_format($imc, 2, ',', ' ')."</p>";

  if($imc < 18.5){
    echo "<p style='color: orange'>Abaixo do peso</p>";
  }
  if($imc > 18.6 && $imc < 24.9){
    echo "<p style='color: green'>Peso ideal</p>";
  }

  if($imc > 25 && $imc < 29.9){
    echo "<p style='color: yellow'>Levemente acima do peso</p>";
  }

  if($imc > 30 && $imc < 34.9){
    echo "<p style='color: red'>Obs I</p>";
  }

    if($imc > 35 && $imc < 39.9){
    echo "<p style='color: red'>Obs II</p>";
  }

    if($imc > 40){
    echo "<p style='color: red'>Obs III</p>";
  }
  } 
  

  ?>
<img src="https://www.drrogermoura.com.br/images/artigos/tabela-imc.png" alt="imc" width="100">
</body>
</html>