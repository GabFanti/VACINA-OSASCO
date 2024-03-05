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
            <a href="agendamento.php" class="nav-link active-purple">Agendamentos</a>
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
            <a href="alterar_apagar_registro.php" class="nav-link purple">Editar dados</a>
          </li>
          <li class="nav-item">
            <a href="index.html" class="nav-link purple">Sair</a>
          </li>
        </ul>
      </header>

      <div id="div_form">
      <form method="POST" action="salvar_agendamento.php" enctype="multipart/form-data">
      
        <small>Nome</small> <br>
      <input type="text" name="txt_nome"  placeholder="Nome completo" autofocus="" required size="80px"> <br>
        <small>Celular</small> <br>
	    <input type="text" name="txt_celular" placeholder="Celular Ex:(00) 00000-0000"> <br>
        <small>E-mail</small> <br>
	    <input type="text" name="txt_email" placeholder="emailteste@gmail.com" size="80px"> <br>
        <small>CEP</small> <br>
		  <input type="text" name="txt_cep" placeholder="00000-000"> <br>
        <small>CPF</small> <br>
		  <input type="text" name="txt_cpf" placeholder="000.000.000-00"> <br>
        <small>RG</small> <br>
		  <input type="text" name="txt_rg" placeholder="0000000-00"> <br>
        <small>Data de agendamento</small> <br>
	    <input type="date" name="txt_data"  > <br>
        <small>Horário (aberto das 0 9:00 às 17:00): </small> <br>
      <input id="hora-cons" type="time" name="txt_hora" min="09:00" max="17:00"> <br>
        <span class="validacao"></span>

        <small>Unidade de Saúde</small> <br>
      <select name="txt_ubs" >
      <option value="Centro de Atenção ao Idoso KM 18 - Padre Rafael Bussatto"disabled>Centro de Atenção ao Idoso KM 18 - Padre Rafael Bussatto</option>
      <option value="Centro de Atenção ao Idoso Presidente Altino - Único Gallafrio"disabled>Centro de Atenção ao Idoso Presidente Altino - Único Gallafrio</option>
      <option value="Jardim Veloso - UBS Vasco da Rocha Leão"disabled>Jardim Veloso - UBS Vasco da Rocha Leão</option>
      <option value="Metalurgicos - UBS Guilhermina de Nóbrega Abreu"disabled>Metalurgicos - UBS Guilhermina de Nóbrega Abreu</option>
      <option value="Novo Osasco - UBS Maria Girade Cury"disabled>Novo Osasco - UBS Maria Girade Cury</option>
      <option value="Conceição/Vila da Justiça - UBS Lia Buarque Macedo Gasperine"disabled>Conceição/Vila da Justiça - UBS Lia Buarque Macedo Gasperine</option>
      <option value="Olaria do Nino - UBS Irmã Águeda Maria Jaime"disabled>Olaria do Nino - UBS Irmã Águeda Maria Jaime</option>
      <option value="Santa Maria - UBS José Meneses Alves"disabled>Santa Maria - UBS José Meneses Alves</option>
      <option value="Padroeira - UBS Getulino José Dias"disabled>Padroeira - UBS Getulino José Dias</option>
      <option value="Palmares - UBS Maria do Socorro Bezerra Patrício"disabled>Palmares - UBS Maria do Socorro Bezerra Patrício</option>
      <option value="Jardim Roberto - UBS Luciano Rodrigues Costa"disabled>Jardim Roberto - UBS Luciano Rodrigues Costa</option>
      <option value="Jardim das Flores - UBS Maria Gatti Giglio"disabled>Jardim das Flores - UBS Maria Gatti Giglio</option>
      <option value="Cidade das Flores - UBS Neide Alves da Silva"disabled>Cidade das Flores - UBS Neide Alves da Silva</option>
      <option value="Pestana/Vila Isabel - UBS Anunciata de Lúcia"disabled>Pestana/Vila Isabel - UBS Anunciata de Lúcia</option>
      <option value="Quitaúna - UBS Francisco Dias da Silva"disabled>Quitaúna - UBS Francisco Dias da Silva</option>
      <option value="Jardim D`Abril - UBS Laurinda Rodolfo Rubo"disabled>Jardim D`Abril - UBS Laurinda Rodolfo Rubo</option>
      <option value="Presidente Altino - UBS Santa Gema Galgani"disabled>Presidente Altino - UBS Santa Gema Galgani</option>
      <option value="Jaguaribe - UBS Carolina Maria de Jesus">Jaguaribe - UBS Carolina Maria de Jesus</option>
      <option value="Cipava - UBS José Guimarães de Abreu"disabled>Cipava - UBS José Guimarães de Abreu</option>
      <option value="Bela Vista - UBS Santa Maria Goretti"disabled>Bela Vista - UBS Santa Maria Goretti</option>
      <option value="Vila Yara / UBS Oduvaldo Maglio"disabled>Vila Yara / UBS Oduvaldo Maglio</option>
      <option value="Vila Yolanda - UBS José Francisco Rezende"disabled>Vila Yolanda - UBS José Francisco Rezende</option>
      <option value="Jardim Helena Maria / UBS Silvio João Luiz de Lúcia" disabled>Jardim Helena Maria / UBS Silvio João Luiz de Lúcia</option>
      <option value="Munhoz Jr I - UBS Raimunda Cavalcante de Souza"disabled>Munhoz Jr I - UBS Raimunda Cavalcante de Souza</option>
      <option value="Munhoz Jr II - UBS Emília Cosme Cerqueira"disabled>Munhoz Jr II - UBS Emília Cosme Cerqueira</option>
      <option value="Jardim Aliança - UBS José Groff"disabled>Jardim Aliança - UBS José Groff</option>
      <option value="Rochdalle - UBS Helena Marrey"disabled>Rochdalle - UBS Helena Marrey</option>
      <option value="Piratininga - UBS José Hilário dos Santos"disabled>Piratininga - UBS José Hilário dos Santos</option>
      <option value="Vila dos Remédios - UBS Padre Guerrino Riciotti"disabled>Vila dos Remédios - UBS Padre Guerrino Riciotti</option>
      <option value="Ayrosa I - UBS Darcy Alves Evangelista Robalinho"disabled>Ayrosa I - UBS Darcy Alves Evangelista Robalinho</option>
      <option value="Ayrosa II - UBS Otacílio Firmino Lopes"disabled>Ayrosa II - UBS Otacílio Firmino Lopes</option>
      <option value="Jardim D`Avila - UBS Carmeno Nagghy"disabled>Jardim D`Avila - UBS Carmeno Nagghy</option>
      <option value="Portal D`Oeste - UBS Francisca Lima de Lira"disabled>Portal D`Oeste - UBS Francisca Lima de Lira</option>
      <option value="Baronesa - UBS José Sabino Ferreira"disabled>Baronesa - UBS José Sabino Ferreira</option>
      <option value="Três Montanhas - UBS Dr. Adauto Ribeiro"disabled>Três Montanhas - UBS Dr. Adauto Ribeiro</option>
      <option value="Vila Menk - UBS Márcio Valdevino Batista"disabled>Vila Menk - UBS Márcio Valdevino Batista</option>
      </select>   

      <fieldset>
        <br>
        <input type="submit" name="btn_salvar" value="Salvar">
        <input type="reset" name="btn_limpar" value="limpar">
      </fieldset>

      </form>
    </div>
  </body>
</html>