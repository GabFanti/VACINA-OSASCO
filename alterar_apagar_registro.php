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
            <a href="agendamentos_adm.php" class="nav-link purple">Consultas agendamentos</a>
          </li>
          <li class="nav-item">
            <a href="relatorios.php" class="nav-link purple">Relatórios</a>
          </li>
          <li class="nav-item">
            <a href="alterar_apagar_registro.php" class="nav-link active-purple">Editar dados</a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link purple">Sair</a>
          </li>
        </ul>
        </header>
        </div>

        
        <!-- Criando tabela e cabeçalho de dados: -->
        <div class="container">
        <table class="table table-striped table-dark" style="margin: 0px;">
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
                <th>Alterar / Apagar</th>
            </tr>
        </div>
        <!-- Preenchendo a tabela com os dados do banco: -->
        <?php

        include("conexao_bd_mysql/conexao_bd_mysql.php");

        // Consulta para selecionar todos os campos da tb_aluno
            
            $consulta_sql = "SELECT * FROM tb_dados_agendamento order by age_codigo desc;";

        // Execução do relatório no BD

        $resultado_relatorio = mysqli_query($conexao_servidor_bd, $consulta_sql)
        or die
        ("<h5 class='alert alert-danger'>Erro de relatório: O relatório não foi realizado.</h5>");


        // Obtendo os dados por meio de um loop while
        while($registros_relatorio = mysqli_fetch_array($resultado_relatorio))
        {
            $cod_retorno = $registros_relatorio['age_codigo'];
            $nome_retorno = $registros_relatorio['age_nome'];
            $celular_retorno = $registros_relatorio['age_celular'];
            $email_retorno = $registros_relatorio['age_email'];
            $cep_retorno = $registros_relatorio['age_cep'];
            $cpf_retorno = $registros_relatorio['age_cpf'];
            $rg_retorno = $registros_relatorio['age_rg'];
            $data_retorno = $registros_relatorio['age_data'];
            $hora_retorno = $registros_relatorio['age_hora'];

        echo "<tr>";
                echo "<td>" . $cod_retorno . "</td>";
                echo "<td>" . $nome_retorno . "</td>";
                echo "<td>" . $celular_retorno . "</td>";
                echo "<td>" . $email_retorno . "</td>";
                echo "<td>" . $cep_retorno . "</td>";
                echo "<td>" . $cpf_retorno . "</td>";
                echo "<td>" . $rg_retorno . "</td>";
                echo "<td>" . $data_retorno . "</td>";
                echo "<td>" . $hora_retorno . "</td>";
                echo "<td>" . "

                <form name='form_aleteracao' action='alterar_dados.php' method='POST' style='float:left;'>
                           
                  <input type='hidden' name='txt_cod_selecionado' value= '$cod_retorno'>
                  <input type='hidden' name='txt_nome' value= '$nome_retorno'>
                  <input type='hidden' name='txt_celular' value= '$celular_retorno'>
                  <input type='hidden' name='txt_email' value= '$email_retorno'>
                  <input type='hidden' name='txt_cep' value= '$cep_retorno'>
                  <input type='hidden' name='txt_cpf' value= '$cpf_retorno'>
                  <input type='hidden' name='txt_rg' value= '$rg_retorno'>
                  <input type='hidden' name='txt_data' value= '$data_retorno'>
                  <input type='hidden' name='txt_hora' value= '$hora_retorno'>
                  
              
                      <input type='submit' name='botao_alterar' value='Alterar' class='btn btn-outline-warning' 
                      onclick='return pergunta_alterar_registro ($cod_retorno);'/>
                 </form>
              
              <form name='form_del' action='apagar_registro_bd.php' method='POST' style='float:left; position:relative; margin-left: 10px;'>
              
                     <input type='hidden' name='txt_cod_selecionado' value= '$cod_retorno'>
              
                     <input type='submit' name='botao_deletar' value='Apagar' class='btn btn-outline-danger' onclick='return pergunta_apagar_registro($cod_retorno);'/>
              </form>"
              
                      . "</td>";
              
                echo "</tr>";

        }

        echo "</table>";

        mysqli_close($conexao_servidor_bd);

        ?>

<script type="text/javascript">

function pergunta_alterar_registro(cod)
{ 
 return confirm('Código selecionado: ' + cod + '\n\n' + 'Deseja realmente alterar o agendamento selecionado?'); 
} 

function pergunta_apagar_registro(cod)
{ 
 return confirm('Código selecionado: ' + cod + '\n\n' + 'Deseja realmente apagar o agendamento selecionado?'); 
} 

</script>

  
    </body>
</html>
      


