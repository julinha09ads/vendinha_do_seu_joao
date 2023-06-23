<?php
$nomecorreto = "juliagomes";
$senhacorreta = "1234";

if (isset($_POST["nome"]) && isset($_POST["senha"])) {
    $nome = ($_POST["nome"]);
    $senha = ($_POST["senha"]);

    if ($nome == $nomecorreto && $senha == $senhacorreta) {
        session_start();
        $_SESSION["nome"] = $_POST["nome"];
        header("Location: calculadora.php");
    } else {
        header("Location: index.html");

    }
}

?>