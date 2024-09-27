<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Coleta e sanitiza os dados do formulário
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $data_nascimento = isset($_POST['data-nascimento']) ? $_POST['data-nascimento'] : '';
    $genero = isset($_POST['genero']) ? $_POST['genero'] : '';
    $biografia = isset($_POST['biografia']) ? trim($_POST['biografia']) : '';

    // Verifica se todos os campos foram preenchidos
    if (empty($nome) || empty($email) || empty($data_nascimento) || empty($genero) || empty($biografia)) {
        // Se algum campo estiver vazio, exibe uma mensagem de erro
        $mensagem = "Por favor, preencha todos os campos!";
        $tipo = "erro";
    } else {
        // Se todos os campos forem válidos, exibe uma mensagem de sucesso
        $mensagem = "Cadastro concluído com sucesso!";
        $tipo = "sucesso";
        
        // Aqui você pode incluir o código para salvar os dados no banco de dados ou outro processamento
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Cadastro</title>
    <link rel="stylesheet" href="../Css/Card.css"> <!-- Referência ao seu arquivo CSS -->
</head>
<body>

<div class="card <?php echo $tipo; ?>">
    <h1><?php echo ($tipo == "erro") ? "Erro" : "Sucesso"; ?></h1>
    <p><?php echo $mensagem; ?></p>
    <button onclick="window.location.href='../index.html';">Voltar à Página Inicial</button>
</div>

</body>
</html>
