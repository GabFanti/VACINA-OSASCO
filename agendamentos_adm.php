<!doctype html>
<html lang="pt" style="overflow-y: hidden; overflow-x: hidden;">
  <head>
    <meta charset="utf-8">
    <title>Vacina Osasco</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
            <a href="agendamento.php" class="nav-link purple">Agendamentos</a>
          </li>
          <li class="nav-item">
            <a href="dados_pacientes.php" class="nav-link purple">Dados Pacientes</a>
          </li>
          <li class="nav-item">
            <a href="agendamentos_adm.php" class="nav-link active-purple">Consultas agendamentos</a>
          </li>
          <li class="nav-item">
            <a href="relatorios.php" class="nav-link purple">Relatórios</a>
          </li>
          <li class="nav-item">
            <a href="alterar_apagar_registro.php" class="nav-link purple">Editar dados</a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link purple">Sair</a>
          </li>
        </ul>
      </header>
    </div>

    <div class="container">
    <form method="POST" action="agendamentos_adm.php">
	    <label><b>Código</b></label>
		<input type="number" name="txt_codigo" autofocus="" placeholder="0000">
		<input type="submit" value="Procurar">

		<label><b>Nome</b></label>
		<input type="text" name="txt_nome" placeholder="Nome completo">
		<input type="submit" value="Procurar">

        <label><b>CPF</b></label>
		<input type="text" name="txt_cpf" placeholder="000.000.000-00">
		<input type="submit" value="Procurar">
    </form><br>

    
    <table class="table table-striped table-dark">
	<tr class="bg-primary" >
 		<th>Código</th>
 		<th>Nome</th>
 		<th>Celular</Canvas></th>
 		<th>E-mail</th>
 		<th>CEP</th>
 		<th>CPF</th>
 		<th>RG</th>
 		<th>Data</th>
 		<th>Hora</th>
 		<th>UBS</th>
 	</tr>
    </div>

     <?php

    include("conexao_bd_mysql/conexao_bd_mysql.php");

        if($_POST)
        {
            $cod_procurado = $_POST['txt_codigo'];
            $nome_procurado = $_POST['txt_nome'];
            $cpf_procurado = $_POST['txt_cpf'];

            // Consulta padrão da página em SQL
            $consulta_sql = "SELECT * FROM tb_dados_agendamento WHERE age_codigo = 0";


        // Consulta selecionadas da página em SQL
            if($cod_procurado != "")
            { $consulta_sql = "SELECT * FROM tb_dados_agendamento WHERE age_codigo = '$cod_procurado' "; }

            if($nome_procurado != "")
            { $consulta_sql = "SELECT * FROM tb_dados_agendamento WHERE age_nome = '$nome_procurado' "; }

            if($cpf_procurado != "")
            { $consulta_sql = "SELECT * FROM tb_dados_agendamento WHERE age_cpf like '$cpf_procurado' "; }


        // Execução da consulta no BD

        $resultado_consulta = mysqli_query($conexao_servidor_bd, $consulta_sql) 
        or die
        ("<h5 class='alert alert-danger'>Erro de consulta: A consulta não foi realizada.</h5>");


        // Obtendo os dados por meio de um loop while
        while($registros_consulta = mysqli_fetch_array($resultado_consulta))
        {
            $cod_retorno = $registros_consulta['age_codigo'];
            $nome_retorno = $registros_consulta['age_nome'];
            $celular_retorno = $registros_consulta['age_celular'];
            $email_retorno = $registros_consulta['age_email'];
            $cep_retorno = $registros_consulta['age_cep'];
            $cpf_retorno = $registros_consulta['age_cpf'];
            $rg_retorno = $registros_consulta['age_rg'];
            $data_retorno = $registros_consulta['age_data'];
            $hora_retorno = $registros_consulta['age_hora'];
            $ubs_retorno = $registros_consulta['age_ubs'];

        echo "<tr>"; 		
                echo "<td>" . $cod_retorno . "</td>";
                echo "<td>" . $nome_retorno . "</td>";
                echo "<td>" . $celular_retorno . "</td>";
                echo "<td>" . $email_retorno . "</td>";
                echo "<td>" . $cep_retorno . "</td>";
                echo "<td>" . $cpf_retorno . "</td>";
                echo "<td>" . $rg_retorno . "</td>";

        //converter a data do mysql para o formato brasileiro.
        $data_retorno = implode("/",array_reverse(explode("-",$data_retorno)));
                
                    echo "<td>" . $data_retorno . "</td>";
                    echo "<td>" . $hora_retorno . "</td>";
                echo "<td>" . $ubs_retorno . "</td>";
            echo "</tr>";

        }

        echo "</table>";

        mysqli_close($conexao_servidor_bd);

        }

        ?>

    </body>
</html>
      
      