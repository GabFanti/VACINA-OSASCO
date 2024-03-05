<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SRA - Situação do cadastro de aluno</title>
</head>
<body>

<?php

include("conexao_bd_mysql/conexao_bd_mysql.php");

// Recebendo dados digitados da página cadastro_aluno.php (Via POST)
$nome_dg = $_POST['txt_nome'];
$celular_dg = $_POST['txt_celular'];
$email_dg = $_POST['txt_email'];
$cep_dg = $_POST['txt_cep'];
$cpf_dg = $_POST['txt_cpf'];
$rg_dg = $_POST['txt_rg'];
$data_dg = $_POST['txt_data'];
$hora_dg = $_POST['txt_hora'];
$ubs_dg = $_POST['txt_ubs'];


//Código em sql para gravar na tabela do banco de dados MySql e MariaDB

$script_sql = "insert into tb_dados_agendamento(age_nome, age_celular, age_email, age_cep, age_cpf,
age_rg, age_data, age_hora, age_ubs)
value 
('$nome_dg', '$celular_dg', '$email_dg', '$cep_dg', '$cpf_dg', '$rg_dg',
'$data_dg', '$hora_dg', '$ubs_dg');";


//Comando sql para executar a gravação na tabela do banco de dados MySql e MariaDB

if(mysqli_query($conexao_servidor_bd, $script_sql))
{
  	echo"<body bgcolor='white' text='green'><h1>Agendamento concluído com sucesso!</h1>";
 	echo"<meta http-equiv='refresh' content='2;url=agendamento.php'> ";
	echo"<img class='img' src='img/ok.png'>";
}
else
{
	echo"<body bgcolor='white' text='red'>";
	echo"<h1 align='center'>Falha no agendamento, tente novamente.</h1><hr><p>";
 	echo "<b>Descrição do erro:</b> Houve um erro na gravação de dados na tabela.";
	echo"<meta http-equiv='refresh' content='2;url=agendamento.php'> ";
	echo"<img class='img' src='img/error.png'>";
}

?>
</html>