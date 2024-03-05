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
$codigo_dg = $_POST['txt_cod_selecionado'];
$nome_dg = $_POST['txt_nome'];
$celular_dg = $_POST['txt_celular'];
$email_dg = $_POST['txt_email'];
$cep_dg = $_POST['txt_cep'];
$cpf_dg = $_POST['txt_cpf'];
$rg_dg = $_POST['txt_rg'];
$data_dg = $_POST['txt_data'];
$hora_dg = $_POST['txt_hora'];




//Código em sql para alterar na tabela do banco de dados MySql e MariaDB

$script_sql = "update tb_dados_agendamento set 
age_nome = '$nome_dg',
age_celular = '$celular_dg',
age_email = '$email_dg',
age_cep = '$cep_dg',
age_cpf = '$cpf_dg',
age_rg = '$rg_dg', 
age_data = '$data_dg',
age_hora = '$hora_dg'
where age_codigo = $codigo_dg;";



//Comando sql para executar a gravação na tabela do banco de dados MySql e MariaDB

if(mysqli_query($conexao_servidor_bd, $script_sql))
{
  	echo"<body bgcolor='white' text='green'><h1>Alteração concluída com sucesso!</h1>";
 	echo"<meta http-equiv='refresh' content='2; url=alterar_apagar_registro.php'> ";
	echo"<img class='img' src='img/ok.png'>";
}
else
{
	echo"<body bgcolor='white' text='red'>";
	echo"<h1 align='center'>Falha na alteração, tente novamente.</h1><hr><p>";
 	echo "<b>Descrição do erro:</b> Houve um erro na gravação de dados na tabela.";
	echo"<meta http-equiv='refresh' content='2; url=alterar_apagar_registro.php'> ";
	echo"<img class='img' src='img/error.png'>";
}

?>
</html>