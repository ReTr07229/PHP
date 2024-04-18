<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Desafio 05</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <main>
    <h1>Analisador de Número Real</h1>
    <?php
    if (isset($_POST['submit']) && !empty($_POST['numFloat'])) {
      require_once "functions_split_php.php";
      $val = $_POST['numFloat'];
      $inteiro = separador_Inteiro($val);
      $decimal = separador_Decimal($val);
      echo "<p>Analisando o número<b> " . number_format($val, 3, ",", ".") . " </b>informado pelo usuário</p>";
      echo "<ul><li>A parte inteira do número é<b> " . number_format($inteiro, 0, ",", ".") . "</b></li>";
      echo "<li>A parte fracionária do número é<b> 0," . number_format($decimal, 0, ",", ".") . "</b></li><ul>";
    } else {
      header("Location: index.php");
    }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>

</html>