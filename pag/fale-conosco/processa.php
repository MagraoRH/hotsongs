<?php
require ('conexao.php');
require ('class.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$mensagem = $_POST['mensagem'];

$a = new Faleconosco();
$a->setNome($nome);
$a->setCpf($cpf);
$a->setCidade($cidade);
$a->setEstado($estado);
$a->setMensagem($mensagem);

$sql = "INSERT INTO fale_conosco
(nome,cpf,cidade,estado,mensagem)VALUES
('". $a->getNome() ."','". $a->getCpf() ."','". $a->getCidade() ."',
'". $a->getEstado() ."','". $a->getMensagem() ."')";
if($conn->query($sql)=== true){
echo 
"<script language='javascript' type='text/javascript'>
alert('Cadastro realizado com sucesso!');
window.location.href='index.html';</script>";
die();
}else{
	echo "Erro: ".$sql."<br>"
	.$conn->error;
	echo "<br>";
	echo "Não foi possivel realizar 
	o cadastro";
}
//finaliza a conexão com o banco
$conn->close();

?>