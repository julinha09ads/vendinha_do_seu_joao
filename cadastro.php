<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/cadastro.css" rel="stylesheet">
</head>

<body>
    
        <div class="cadastro">
            
                <div class="tiltle">
                    <h1>Vendinha</h1>
                    <h1>do</h1>
                    <h1>João</h1>
                </div>
                <br>
                <br>
                <div class="info">
                    <label><b>Nome do cliente:</b></label>
                    <br>
                    <input type="text" name="nome">
                    <br>
                    <br>
                    <label><b>Email:</b></label>
                    <br>
                    <input type="email" name="nome" maxlength="30" required>
                    <br>
                    <br>
                    <label><b>Criar senha:</b></label>
                    <br>
                    <input type="password" name="nome">
                    <br>
                    <br>
                    <a href="index.html"><input type="submit" name="enviar" value="Cadastrar"></a>
                    <a href="index.html"><input type="submit" name="voltar login" value="Voltar login"></a>
                </div>
            
        </div>
    

    <!-- Plugin VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <!-- Plugin VLibras -->


    <?php
    $email = 0;
    $passaword = 0;
    $nome = 0;


    if (isset($_POST["num"])) {
        $nome = ($_POST["nome"]);
        $email = ($_POST["email"]);
        $passaword = ($_POST["senha"]);

        echo "confirme seu cadastro";
        echo "br";
        echo $nome;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $passaword;
    }
    ?>

</body>

</html>