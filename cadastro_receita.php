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
            <label for="receita">Cadastrar Receita:</label>
            <input type="textbox" id="receita" name="receita" required>
            
            <button type="submit" onClick="document.form.action='cadastrar_conta.php'">Cadastrar</button>
        </form>
    </section>

<br>
    <footer>
        <p><a href="sobrenos.html">Sobre nós</a></p>
        <p>Endereco: Av. Antônia Rosa Fioravanti, 804. Maua-SP CEP: 09360-120</p>
    </footer>
</body>
</html>
 
