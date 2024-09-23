<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="./Css/index.css"> 
</head>
<body>

<div class="box">
    <div class="img-box">
        <img src="img-formulario.png" alt="Imagem do Formulário">
    </div>
    
    <div class="form-box">
        <h2>Criar Conta</h2>
        <p>Já é um membro? <a href="#">Login</a></p>
        <form action="processa.php" method="post">
            <div class="input-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Digite o seu email" required>
            </div>

            <div class="input-group">
                <label for="data-nascimento">Data de Nascimento</label>
                <input type="date" id="data-nascimento" required>
            </div>

            <div class="input-group">
                <label for="genero">Gênero</label>
                <select id="genero" required>
                    <option value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outros">Outros</option>
                </select>
            </div>

            <div class="input-group">
                <label for="biografia">Biografia</label>
                <textarea id="biografia" placeholder="Escreva uma breve biografia" rows="4" required></textarea>
            </div>

            <div class="input-group">
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
