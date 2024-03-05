<?php

include ('conexao_bd_mysql/conexao_bd_mysql.php');

if(isset($_POST['txt_cod_selecionado']))
{

$cod_proc_apagar = $_POST['txt_cod_selecionado'];

 
$sql = "DELETE FROM tb_dados_agendamento WHERE age_codigo = '$cod_proc_apagar'";

  
  // Verifica se o comando foi executado com sucesso


  if(mysqli_query($conexao_servidor_bd, $sql))

  	{ 
      echo"<body bgcolor='white' text='green'> <h1>Agendamento apagado com sucesso..</h1>";   
      echo"<img class='img' src='img/ok.png'>";	
    }
  		else

	   {echo"<body bgcolor='white' text='red'><h1>Agendamento não apagado..</h1>"; }
      echo "<meta http-equiv='refresh' content='2; url=alterar_apagar_registro.php'>";
}

?>

