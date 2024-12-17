<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>pagina-psw</title>
</head>
<body>

    <div class="cabecalho">
        <img id="logo-psw" src="imagens/image.png" alt="">
        <h1>LISTA DE ALUNOS </h1>
        <img id="logo-if" src="imagens/IF Baiano - Logo.png" alt="">
    </div>

    <div id="divisoria-nav" ></div>

    <div class="barra-nav">
        <ul>
            <li><a href="http://localhost:8081/atv03-agata-martins/index.php">Home</a></li>
            <li><a href="http://localhost:8081/atv03-agata-martins/cadaluno.php">Cadastro de aluno</a></li>
            
        </ul>

    </div>


<div id="tab">

<div id="ldo1"></div>
<div id="tabel">
    <table id= "tabela">
<tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Endereço</th>
    <th>Bairro</th>
    <th>Cidade</th>
    <th>Estado</th>
    <th>Gênero</th>
    <th>CPF</th>
    <th>WhatsApp</th>
    <th>Telefone</th>
    <th>Nascimento</th>
    <th>Estado Civil</th>
    <th>Turma</th>
    <th>Disciplina Preferida</th>
</tr>
<tr>
    <td> <?php echo $_POST['nome']; ?></td>
    <td><?php echo $_POST['email']; ?></td>
    <td><?php echo $_POST['endereco']; ?></td>
    <td><?php echo $_POST['bairro']; ?></td>
    <td><?php echo $_POST['cidade']; ?></td>
    <td><?php echo $_POST['estado']; ?></td>
    <td><?php echo $_POST['genero']; ?></td>
    <td><?php echo $_POST['cpf']; ?></td>
    <td><?php echo $_POST['zap']; ?></td>
    <td><?php echo $_POST['telefone']; ?></td>
    <td><?php echo $_POST['nascimento']; ?></td>
    <td><?php echo $_POST['estadocivil']; ?></td>
    <td><?php echo $_POST['turma']; ?></td>
    <td><?php echo $_POST['disciplinapreferida']; ?></td>
</tr>
<tr>
    
</tr>
<tr>


    </table>
    </div>
  <div id="ldo2"></div>

  </div>
   <br><br>

   <div class="rodape">
        <h5 id="cop" >© 2024 - TODOS OS DIREITOS RESERVADOS POR ÁGATA  CRISTINI TEIXEIRA MARTINS</h5>
        
    </div>

  
    
</body>
</html>