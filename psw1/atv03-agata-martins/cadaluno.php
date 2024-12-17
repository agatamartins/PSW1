<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cadaluno</title>
</head>
<body>

    <div class="cabecalho">
        <img id="logo-psw" src="imagens/image.png" alt="">
        <h1>Cadastro de Aluno</h1>
        <img id="logo-if" src="imagens/IF Baiano - Logo.png" alt="">
    </div>

    <div class="barra-nav">
        <ul>
            <li><a href="http://localhost:8081/atv03-agata-martins/index.php">Home</a></li>
            <li><a href="http://localhost:8081/atv03-agata-martins/listaalunos.php">Lista de aluno</a></li>
         </ul>
    </div>

    <div class="titulo-2">
        <h2 id="titulo-cad" >Cadastro</h2>
    </div>

<form action="listaaluno.php" method="post">
    <div class="formulario">
        <div class="formulario-esquerda">
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Ágata Cristini Teixeira Martins" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Ex:agatamartins474@gmail.com" required>

            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco" placeholder="Ex: Rua 3, 525" required>

            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro" placeholder="Ex: centro" required>

            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Ex: Guanambi" required>

            <label for="estado">Estado(UF):</label>
            <select id="estado" name="estado">
                <option value="" disabled selected>Selecione</option>
                <option value="Acre(AC)">Acre(AC)</option>
                <option value="Alagoas(AL)">Alagoas(AL)</option>
                <option value="Amapá(AP)">Amapá(AP)</option>
                <option value="Amazonas(AM)">Amazonas(AM)</option>
                <option value="Bahia(BA)">Bahia(BA)</option>
                <option value="Ceará(CE)">Ceará(CE)</option>
                <option value="Distrito Federal(DF)">Distrito Federal(DF)</option>
                <option value="Espírito Santo(ES)">Espírito Santo(ES)</option>
                <option value="Goiás(GO)">Goiás(GO)</option>
                <option value="Maranhão(MA)">Maranhão(MA)</option>
                <option value="Mato Grosso(MT)">Mato Grosso(MT)</option>
                <option value="Mato Grosso do Sul(MS)">Mato Grosso do Sul(MS)</option>
                <option value="Minas Gerais(MG)">Minas Gerais(MG)</option>
                <option value="Pará(PA)">Pará(PA)</option>
                <option value="Paraíba(PB)">Paraíba(PB)</option>
                <option value="Paraná(PR)">Paraná(PR)</option>
                <option value="Pernambuco(PE)">Pernambuco(PE)</option>
                <option value="Piauí(PI)">Piauí(PI)</option>
                <option value="Rio de Janeiro(RJ)">Rio de Janeiro(RJ)</option>
                <option value="Rio Grande do Norte(RN)">Rio Grande do Norte(RN)</option>
                <option value="Rio Grande do Sul(RS)">Rio Grande do Sul(RS)</option>
                <option value="Rondônia(RO)">Rondônia(RO)</option>
                <option value="Roraima(RR)">Roraima(RR)</option>
                <option value="Santa Catarina(SC)">Santa Catarina(SC)</option>
                <option value="São Paulo(SP)">São Paulo(SP)</option>
                <option value="Sergipe(SE)">Sergipe(SE)</option>
                <option value="Tocantins(TO)">Tocantins(TO)</option>
            </select>

            <label for="genero">Gênero: </label>
            <select name="genero" id="genero">
                <option value="" disabled selected>Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Prefiro Não Dizer">Prefiro não dizer</option>
            </select>

        

           
        </div>
        
        <div class="formulario-direita">

            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf" placeholder="Ex: 000.000.000-00" required>

            <label for="zap">WhatsApp: </label>
            <input type="tel" name="zap" id="zap" placeholder="Ex: 00123456789" required>

            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefone" name="telefone" placeholder="Ex: 1234-5678" required>

            <label for="nascimento">Nascimento: </label>
            <input type="date" name="nascimento" id="nascimento" required>

           

            <label for="estadocivil">Estado Civil: </label>
            <select name="estadocivil" id="estadocivil">
                <option value="" disabled selected>Selecione</option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viuvo(a)">Viúvo(a)</option>
            </select>

            <label for="turma">Turma: </label>
            <select name="turma" id="turma">
                <option value="" disabled selected>Selecione</option>
                <option value="1AII">1AII</option>
                <option value="1BII">1BII</option>
                <option value="2AII">2AII</option>
                <option value="2BII">2BII</option>
                <option value="3AII">3AII</option>
                <option value="3BII">3BII</option>
            </select>

            <div class="radio">
                <ul id="ul-esquerda" >
                    <label>Disciplina Preferida: </label><br>
                    <input type="radio" id="pref" name="pref">
                    <label for="mat">Matemática</label>
                    <input type="radio" id="pref" name="pref"> 
                    <label for="port">Português</label>
                    <input type="radio" id="pref" name="pref">
                    <label for="psw">PSW-I</label>
                    <input type="radio" id="pref" name="pref">
                    <label for="fis">Física</label>
                    <input type="radio" id="pref" name="pref">
                    <label for="asw">ASW</label>
                </ul>
            </div>



        </div>
    </div>

    <div class="botao">
        <button type="submit">Salvar</button>
        <button type="reset">Resetar</button>
    </div>
</form>

    <div class="rodape">
        <h5>© 2024 - TODOS OS DIREITOS RESERVADOS A ÁGATA MARTINS</h5>
    </div>
    
</body>
</html>