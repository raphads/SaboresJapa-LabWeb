<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit">
    <title>Hinomaru Sushi - Login</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="sushi.js"></script>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	
</head>
    <body>
<header>
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <img src="images/logo.png" height="10%" width="10%" style="position: static; right: auto;">
    </header>
        <hr>
        <nav class="sidebar" id="sidebar"  style="height: 100px;">
            <ul>
              <li><a href="index.html">Início</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contat.html">Contato</a></li>
            <li><a href="lista.php">Lista</a></li>
            </ul>
        </nav>
</header>

    <section class="content" name="content">
        <h2>Login</h2>
        <form id="userForm" name="frm_cadastro" method="post"  action="realizar_login.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="txt_email" required placeholder="hinomaru@sushi.com">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="txt_senha" required placeholder="*******">

            <button type="submit" value="ENVIAR" onClick="Validar()">Entrar</button>
            <button type="reset" value="LIMPAR">Limpar</button>
            <p><a href="index.html">Esqueceu a Senha?</a></p>
</form>
</section>

<br>
<footer>
        <p><a href="sobrenos.html">Sobre nós</a></p>
        <p>Endereco: Av. Antônia Rosa Fioravanti, 804. Maua-SP CEP: 09360-120</p>
</footer>

</body>
</html>