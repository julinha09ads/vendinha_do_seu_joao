<!DOCTYPE html>
<html lang="pt-br">

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="calculadora.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?family= Lilita +One & display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="bi bi-bag-fill"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Calculadora <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.html">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sair.php">Sair</a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>
<BR>
    <div class="calc">
        <h1>Calculadora</h1>
    <form action="calculadora.php" method="post">
        <label>Valor 1 e Valor 2:</label>
        <br>
        <input type="number" name="valor1" placeholder="Insira aqui o valor 1" maxlength="10">
        <input type="number" name="valor2" placeholder="Insira aqui o valor 2" maxlength="10" size="200">
        <br>
        <br>
        <label>Operação:</label>
        <br>
        <br>
        <select name="operacoes">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="divisao"><A>Divisão</A></option>
            <option value="multiplicacao"><A>Multiplicação</A></option>
        </select>
        <br>
        <br>
        <input type="submit" name="calcular" value="CALCULAR">
        <br>
        <br>
        <label>Resultado:</label>
        <br>

        <?php

        session_start();
        if (!isset($_SESSION["nome"])) {
            header("location:index.html");
        }

        if (isset($_POST["valor1"])) {
            $operacoes = $_POST["operacoes"];
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $resultado = 0;
            if ($operacoes == "adicao") {
                $soma = $valor1 + $valor2;
                echo $soma;
            } elseif ($operacoes == "subtracao") {
                $sub = $valor1 - $valor2;
                echo $sub;
            } elseif ($operacoes == "multiplicacao") {
                $multi = $valor1 * $valor2;
                echo $multi;
            } elseif ($operacoes == "divisao") {
                $div = $valor1 / $valor2;
                echo $div;
            }
        }
        ?>

        <br>
        <br>
        <input type="reset" name="Limpar" value="LIMPAR">
    </form>
    <br>
    <br>
    <br>
    <hr>
    <br>

    <form action="calculadora.php" method="post">
        <h2>Troco</h2>
        <br>
        <input type="number" name="valorpago" placeholder="Valor Pago" maxlength="10">
        <input type="number" name="valordacompra" placeholder="Valor da Compra" maxlength="10">
        <br>
        <br>
        <label>Forma de pagamento:</label>
        <br>
        <label for="opcao2">
    
    

   
<input type="radio" id="opcao2" name="opcao" value="opcao2"> PIX
  </label>
  
 
<br>
  
 
<label for="opcao3">
    
   
<input type="radio" id="opcao3" name="opcao" value="opcao3"> Dinheiro
  
 
</label>
<br>
<input type="radio" id="opcao3" name="opcao" value="opcao3"> Cartão de Débito
  
 
</label>
<br>
<input type="radio" id="opcao3" name="opcao" value="opcao3"> Cartão de Crédito
  
 
</label>
        <br>
        <br>
        <input type="submit" name="calcular" value="Calcular">
        <input type="reset" name="apagar" value="Apagar">
        <br>
        <br>
        <label>Seu troco aqui:</label>
        <br>
    
    <div class="result">
        <?php

        if (isset($_POST["valordacompra"])) {
            $valordacompra = $_POST["valordacompra"];
            $valorpago = $_POST["valorpago"];
            $resultado = 0;

            $resultado = $valorpago - $valordacompra;
            echo $resultado;
        }
        ?>



            
    </div>
    </div>
    </form>
    <br>

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


</body>

</html>