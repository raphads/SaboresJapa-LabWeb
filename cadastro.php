<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hinomaru Sushi - Cadastro</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <script src="sushi.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    
</head>
<body>
    <header>
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <img src="images/logo.png" height="10%" width="10%" style="position: static; right: auto;">
    </header>
    <hr>
    <nav class="sidebar" id="sidebar">
        <ul>
            <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contat.html">Contato</a></li>
            <li><a href="lista.php">Lista</a></li>
        </ul>
    </nav>
    <section class="content" name="content">
        <h2>Cadastro de Clientes</h2>
        <form id="userForm" method="post" action="cadastrar_conta.php">
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required placeholder="999.999.999-99">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="data_nasc">Data de Nascimento:</label>
            <input type="date" id="data_nasc" name="data_nasc" required>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required placeholder="(99) 99999-9999">
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required placeholder="99999-999">
            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua" required>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" required>
            <label for="compl">Complemento:</label>
            <input type="text" id="compl" name="compl">
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" required>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>
            
            <button type="submit" onClick="document.form.action='cadastrar_conta.php'">Cadastrar</button>
        </form>
    </section>

    
    <footer>
        <p><a href="sobrenos.html">Sobre nós</a></p>
        <p>Endereco: Av. Antônia Rosa Fioravanti, 804. Maua-SP CEP: 09360-120</p>
    </footer>
</body>
</html>
 
