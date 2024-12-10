<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = [
        'nome' => $_POST['nome'],
        'endereco' => $_POST['endereco'],
        'bairro' => $_POST['bairro'],
        'cidade' => $_POST['cidade'],
        'uf' => $_POST['uf'],
        'cpf' => $_POST['cpf'],
        'celular' => $_POST['celular'],
        'zap' => $_POST['zap'],
        'datanascimento' => $_POST['nascimento'],
        'disciplinascursadas' => $_POST['cursadas'],
        'disciplinaspreferidas' => $_POST['preferidas']
    ];

    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }
    $_SESSION['alunos'][] = $aluno;

    header('Location: listaluno.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de alunos</title>
</head>
<body>
    <div class="container">
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

    <h2>Cadastro de aluno</h2>

    <div class="formulario">
    <form action="listaluno.php" method="POST">
        
    <label for="nome">Nome completo</label>
    <input type="text" id="nome" name="nome" placeholder="Digite seu nome"><br><br>

    <label for="endereco">Endereço</label>
    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço"><br><br>

    <label for="bairro">Bairro</label>
    <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro"><br><br>

    <label for="cidade">Cidade</label>
    <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade"><br><br>


    <label for="uf">UF</label>
<select id="uf" name="uf">
  <option value="AC">Acre (AC)</option>
  <option value="AL">Alagoas (AL)</option>
  <option value="AP">Amapá (AP)</option>
  <option value="AM">Amazonas (AM)</option>
  <option value="BA">Bahia (BA)</option>
  <option value="CE">Ceará (CE)</option>
  <option value="DF">Distrito Federal (DF)</option>
  <option value="ES">Espírito Santo (ES)</option>
  <option value="GO">Goiás (GO)</option>
  <option value="MA">Maranhão (MA)</option>
  <option value="MT">Mato Grosso (MT)</option>
  <option value="MS">Mato Grosso do Sul (MS)</option>
  <option value="MG">Minas Gerais (MG)</option>
  <option value="PA">Pará (PA)</option>
  <option value="PB">Paraíba (PB)</option>
  <option value="PR">Paraná (PR)</option>
  <option value="PE">Pernambuco (PE)</option>
  <option value="PI">Piauí (PI)</option>
  <option value="RJ">Rio de Janeiro (RJ)</option>
  <option value="RN">Rio Grande do Norte (RN)</option>
  <option value="RS">Rio Grande do Sul (RS)</option>
  <option value="RO">Rondônia (RO)</option>
  <option value="RR">Roraima (RR)</option>
  <option value="SC">Santa Catarina (SC)</option>
  <option value="SP">São Paulo (SP)</option>
  <option value="SE">Sergipe (SE)</option>
  <option value="TO">Tocantins (TO)</option>
</select> <br><br>


    <label for="cpf">CPF</label>
    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF"><br><br>

    <label for="celular">Celular</label>
    <input type="number" id="celular" name="celular" placeholder="Digite seu número de celular"><br><br>

    <label for="zap">WhatsApp</label>
    <input type="number" id="zap" name="zap" placeholder="Digite seu WhatsApp"><br><br>

    <label for="nascimento">Data de nascimento</label>
    <input type="date" id="nascimento" name="nascimento" placeholder="Selecione sua data de nascimento"> <br><br>

    <label for="cursadas">Disciplinas cursadas</label>
    <input type="text" id="cursadas" name="cursadas" placeholder="Digite suas disciplinas cursadas"><br><br>

    <label for="preferidas">Disciplinas preferidas</label>
    <input type="text" id="preferidas" name="preferidas" placeholder="Digite suas disciplinas preferidas"><br><br>
  
    <input type="submit" value="Cadastrar">
  </form>
</div>

        <footer>
            <h3>Desenvolvido por Marlon Breno Navarro</h3>
        </footer>

</body>
</html>