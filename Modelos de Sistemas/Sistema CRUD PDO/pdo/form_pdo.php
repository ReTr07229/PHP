<?php 

if(isset($_POST['submit'])){
    require_once('dbcon_pdo.php');//requerindo uma única vez o sistema em pdo

    $foto = $_POST['foto'];//aqui faz o recebimento do dado escrito no input, assimilando esse valor ao da variável $foto
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data_nsc = $_POST['data_nsc'];
    $genero = $_POST['genero'];
    $celular = $_POST['celular'];
    $email_wk = $_POST['email'];
    $senha = $_POST['senha'];

    //Cria um hash seguro da senha, para ser amarzenado no banco de dados
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $test_senha = $_POST['test_senha'];

    if($senha == $testsenha){

    $sql = "INSERT INTO user (foto, nome, sobrenome, data_nsc, genero, 
    celular, email, curso, senha)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";//aqui dá o comando de inserir esses dados na tabela "user", os valores dentro do VALUES estão
    //em ?, para sinalizar que existe um valor á ser inserido ali, que só vai ser preenchido na consulta.
    $stmt = $pdo->prepare($sql);//aqui assimilha a variavel $stmt á variavel/objeto $pdo, onde
    $stmt->bindParam(1, $foto);
    $stmt->bindParam(2, $nome, PDO::PARAM_STR);//Aqui eu estou de
    $stmt->bindParam(3, $sobrenome, PDO::PARAM_STR);
    $stmt->bindParam(4, $data_nsc, PDO::PARAM_INT);
    $stmt->bindParam(5, $genero, PDO::PARAM_STR);
    $stmt->bindParam(6, $celular, PDO::PARAM_INT);
    $stmt->bindParam(7, $email, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(8, $curso, PDO::PARAM_STR_CHAR);
    $stmt->bindParam(9, $senha, PDO::PARAM_STR_CHAR);
    $stmt->execute();

    header ("Location:login.php");

    }
    else{
        echo "A senha está diferente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PDO</title>
</head>
<body>
<div class="box">
        <form action="form.php" method="POST">
            <h1>Cadastro</h1>
            <div class="inputBox">
                <input type="file" name="foto" id="foto" class="inp" placeholder="Foto" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inp" placeholder="Nome" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="sobrenome" id="sobrenome" class="inp" placeholder="Sobrenome" required>
            </div>
            <br>
            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nsc" id="data_nsc" min="1950-12-31" max="2018-12-31" value="1999-01-01"
                required>
            <!-- min é o ano minímo que deve ser preenchido, max é o ano máximo que deve ser preenchido e o value define o valor padrão.
            sendo a data dentro desses valores no input sempre seguindo o modelo: yyyy-mm-dd-->
            <br>
            <div class="inputBox" id="genero" required>
                <legend>Sexo</legend>
                <div class="opcoes">
                    <p><input type="radio" name="genero" id="genero" value="Masculino" required> Masculino</p>
                    <p><input type="radio" name="genero" id="genero" value="Feminino" required> Feminino</p>
                    <p><input type="radio" name="genero" id="genero" value="Nopcoes" required> Prefiro não dizer</p>
                </div>
            </div>
            <br>
            <div class="inputBox">
                <input type="tel" name="celular" id="celular" class="inp" placeholder="Celular" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="email" name="email_wk" id="email_wk" class="inp" placeholder="E-mail Institucional" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="curso" id="curso" class="inp" placeholder="Curso" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="code_acesso" id="code_acesso" class="inp" placeholder="Código de Acesso(Temporário)" required>
            </div>
            <br>
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inp" placeholder="Senha" required>
            </div>
            <div class="inputBox">
                <input type="password" name="test_senha" id="test_senha" class="inp" placeholder="Confirmar Senha" required>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>