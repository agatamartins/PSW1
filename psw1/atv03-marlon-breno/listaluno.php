<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Lista de alunos</title>
</head>
<body>
<div class="c">
<header>
            <h1><a href="index.php">Sistema Aluno</a></h1>
            <img src="img1.png" alt="">
        </header>
        <nav>
            <div class="pagina"><a href="cadaluno.php">Cadastro de Alunos</a></div>
            <div id="divisoria"></div>
            <div class="pagina"><a href="listaluno.php">Lista de Alunos</a></div>
        </nav>
    </div>

    <h2 id="l">Lista de alunos</h2>

    <table id="customers">
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>CPF</th>
            <th>Celular</th>
            <th>WhatsApp</th>
            <th>Data de Nascimento</th>
            <th>Disciplinas cursadas</th>
            <th>Disciplinas preferidas</th>
        </tr>

        <tr>
            <td><?php echo $_POST['nome']?></td>
            <td><?php echo $_POST['endereco']?></td>
            <td><?php echo $_POST['bairro']?></td>
            <td><?php echo $_POST['cidade']?></td>
            <td><?php echo $_POST['uf']?></td>
            <td><?php echo $_POST['cpf']?></td>
            <td><?php echo $_POST['celular']?></td>
            <td><?php echo $_POST['zap']?></td>
            <td><?php echo $_POST['nascimento']?></td>
            <td><?php echo $_POST['cursadas']?></td>
            <td><?php echo $_POST['preferidas']?></td>
        </tr>


    
</table>
        <footer>
            <h3>Desenvolvido por Marlon Breno Navarro</h3>
        </footer>
    
</body>
</html>