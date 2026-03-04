<?php

include 'conexao.php';

$sql = $conecta_db->prepare("SELECT * FROM tb_login");
$sql->execute();
$result = $sql->get_result(); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="sushi.js" defer></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #f4f4f4;
        }
    </style>
</head>
<body>
    <header style="width :150%">
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
    </header>

    <section class="content" style="width :150%">
        <h2>Lista de Usuários</h2>
        <?php if (count($sql) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                        <th>CEP</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $eq): ?>
                        <tr>
                            <td><?= htmlspecialchars($eq['cpf']) ?></td>
                            <td contenteditable="true" 
                                 onblur="atualizarCampo(this, 'nome', <?= $eq['nome'] ?>)"><?= htmlspecialchars($eq['nome']) ?></td>
                            <td contenteditable="true" 
                                onblur="atualizarCampo(this, 'email', <?= $eq['email'] ?>)"><?= htmlspecialchars($eq['email']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'senha', <?= $eq['senha'] ?>)"><?= htmlspecialchars($eq['senha']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'data_nasc', <?= $eq['data_nasc'] ?>)"><?= htmlspecialchars($eq['data_nasc']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'tel', <?= $eq['tel'] ?>)"><?= htmlspecialchars($eq['tel']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'cep', <?= $eq['cep'] ?>)"><?= htmlspecialchars($eq['cep']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'rua', <?= $eq['rua'] ?>)"><?= htmlspecialchars($eq['rua']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'num', <?= $eq['num'] ?>)"><?= htmlspecialchars($eq['num']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'comp', <?= $eq['comp'] ?>)"><?= htmlspecialchars($eq['comp']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'bairro', <?= $eq['bairro'] ?>)"><?= htmlspecialchars($eq['bairro']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'cid', <?= $eq['cid'] ?>)"><?= htmlspecialchars($eq['cid']) ?></td>
                            <td contenteditable="true" 
                onblur="atualizarCampo(this, 'uf', <?= $eq['uf'] ?>)"><?= htmlspecialchars($eq['uf']) ?></td>
                
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhuma aula cadastrada.</p>
        <?php endif; ?>
    </section>
            
    <script>
function atualizarCampo(elemento, campo, cod_aula) {
    const novoValor = elemento.innerText;

    fetch('atualizar_aula.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ cod_aula, campo, valor: novoValor })
    })
    .then(response => response.text())
    .then(data => {
        console.log('Atualização:', data);
    })
    .catch(error => {
        console.error('Erro:', error);
        alert('Erro ao atualizar campo.');
    });
}
</script>
<br>
  <footer>
        <p><a href="sobrenos.html">Sobre nós</a></p>
        <p>Endereco: Av. Antônia Rosa Fioravanti, 804. Maua-SP CEP: 09360-120</p>
    </footer>
</body>
</html>