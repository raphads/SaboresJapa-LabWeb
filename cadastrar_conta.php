<?php
 include 'conexao.php';
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$data_nasc = $_POST["data_nasc"];
$telefone = $_POST["telefone"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$compl = $_POST["compl"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];


$sql = $conecta_db->prepare("SELECT * FROM tb_login WHERE cpf = ?");
$sql->bind_param("s", $cpf); // "s" indica que estamos passando um string (CPF)
$sql->execute();
$result = $sql->get_result(); // Executa a consulta e obtém o resultado


      $sql = $conecta_db->prepare ("INSERT INTO tb_login (cpf, nome, email, senha, data_nasc, tel, cep, rua, num, comp, bairro, cid, uf)
	                     VALUES ('$cpf','$nome','$email','$senha','$data_nasc','$telefone','$cep','$rua','$numero','$compl', '$bairro', '$cidade', '$estado')") ;
    $sql->execute();

    }

header('location:area_adm.php');
?>
     	
				  