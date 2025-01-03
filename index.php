<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="conteudo-principal">
<section>
    <form action="Classes/Insercao.php" id="form" class="form-conteudo" method="post">
        <div>
            <h1>Cadastro de Usuários</h1>
        </div>
        <div class="campo-form">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui..." required>
        </div>
        <div class="campo-form">
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone aqui..." required>
        </div>
        <div class="campo-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email aqui..." required>
        </div>
        <div class="campo-form">
            <label for="observacao">Observação:</label>
            <input type="text" id="observacao" name="observacao" placeholder="Digite sua mensagem aqui.">
        </div>
        <div class="btn">
            <button class="btn-enviar" type="submit" id="enviar">Enviar</button>
            <button class="btn-cancelar" type="reset">Limpar</button>
        </div>
        <span id="mensagem"></span>
    </form>
</section>

<script src="index.js"></script>
</body>
</html>
