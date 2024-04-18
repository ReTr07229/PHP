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

      $num = $_POST['numFloat'];

      //Aqui tranformo o número float em int, assim eliminiando sua parte fracionária
      $inteiro = (int)$num;
      //Agora como a parte fracionária foi eliminada na variavel $inteiro, é só subtrai-la com o valor completo($num), que ele retornará já a parte decimal
      $decimal = $num - $inteiro;

      echo "<p>Analisando o número<b> " . number_format($num, 3, ",", ".") . " </b>informado pelo usuário</p>";
      echo "<ul><li>A parte inteira do número é<b> " . number_format($inteiro, 0, ",", ".") . "</b></li>";
      echo "<li>A parte fracionária do número é<b> " . number_format($decimal, 3, ",", ".") . "</b></li><ul>";
    } else {
      header("Location: index.php");
    }
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>

</html>