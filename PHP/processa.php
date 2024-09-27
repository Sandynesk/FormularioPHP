<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $data_nascimento = htmlspecialchars($_POST['data-nascimento']);
    $genero = htmlspecialchars($_POST['genero']);
    $biografia = htmlspecialchars($_POST['biografia']);

    // Aqui você pode adicionar lógica para armazenar os dados, por exemplo, em um banco de dados https://github.com/matheusmanuel/Formulario-de-cadastro-responsivo-com-html-e-css

    echo "<h1>Cadastro Realizado com Sucesso!</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Data de Nascimento: $data_nascimento</p>";
    echo "<p>Gênero: $genero</p>";
    echo "<p>Biografia: $biografia</p>";
} else {
    echo "<h1>Erro ao processar o formulário.</h1>";
}
?>
