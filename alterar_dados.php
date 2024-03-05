<!doctype html>
<html lang="pt" style="overflow-y: hidden; overflow-x: hidden;">
  <head>
    <meta charset="utf-8">
    <title>Vacina Osasco</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <img class="img" src="img/logo.png"/>
        </a>
        <ul class="nav nav-pills py-3">
          <li class="nav-item">
            <a href="home_adm.html" class="nav-link purple">Home</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link active-purple">Alteração de agendamento</a>
          </li>
          <li class="nav-item">
            <a href="alterar_apagar_registro.php" class="nav-link purple">Voltar</a>
          </li>
        </ul>
      </header>

		<?php		      
		$cod_paciente = $_POST['txt_cod_selecionado'];
		$nome_paciente = $_POST['txt_nome'];
		$celular_paciente = $_POST['txt_celular'];
		$email_paciente = $_POST['txt_email'];
		$cep_paciente = $_POST['txt_cep'];
		$cpf_paciente = $_POST['txt_cpf'];
		$rg_paciente = $_POST['txt_rg'];
		$data_paciente = $_POST['txt_data'];
		$hora_paciente = $_POST['txt_hora'];
		?>


	<div id="div_form">
      <form method="POST" action="alterar_agendamento_bd.php" enctype="multipart/form-data">
      
	  <small>Código</small> <br>
      <input type="text" name="txt_cod_selecionado"  placeholder="Código" readonly autofocus=""  required size="5" value="<?php echo $cod_paciente; ?>"> <br>
        <small>Nome</small> <br>
      <input type="text" name="txt_nome"  placeholder="Nome completo" autofocus="" required size="80px" value="<?php echo $nome_paciente; ?>"> <br>
        <small>Celular</small> <br>
	    <input type="text" name="txt_celular" placeholder="Celular Ex:(00) 00000-0000" value="<?php echo $celular_paciente; ?>"> <br>
        <small>E-mail</small> <br>
	    <input type="text" name="txt_email" placeholder="emailteste@gmail.com" size="80px" value="<?php echo $email_paciente; ?>"> <br>
        <small>CEP</small> <br>
		  <input type="text" name="txt_cep" placeholder="00000-000" value="<?php echo $cep_paciente; ?>"> <br>
        <small>CPF</small> <br>
		  <input type="text" name="txt_cpf" placeholder="000.000.000-00" value="<?php echo $cpf_paciente; ?>"> <br>
        <small>RG</small> <br>
		  <input type="text" name="txt_rg" placeholder="0000000-00" value="<?php echo $rg_paciente; ?>"> <br>
        <small>Data de agendamento</small> <br>
	    <input type="date" name="txt_data" value="<?php echo $data_paciente; ?>"> <br>
        <small>Horário (aberto das 09:00 às 17:00): </small> <br>
      <input id="hora-cons" type="time" name="txt_hora" min="09:00" max="17:00" value="<?php echo $hora_paciente; ?>"> <br>
        <span class="validacao"></span>

      <fieldset>
        <br>
        <input type="submit" name="btn_salvar" value="Salvar">
        <input type="reset" name="btn_limpar" value="limpar">
      </fieldset>

      </form>
    </div>
	</body>
</html>