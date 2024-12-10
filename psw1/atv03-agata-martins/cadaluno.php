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
        <img id="logo-psw" src="imagem/logo-psw.png" alt="">
        <h1>Sistema Aluno</h1>
        <img id="logo-if" src="imagem/logo-if.png" alt="">
    </div>

    <div class="barra-nav">
        <ul>
            <li><a href="http://localhost:8081/atv03-paulo-wisniewski/index.php">Sistema</a></li>
            <li><a href="http://localhost:8081/atv03-paulo-wisniewski/listaaluno.php">Listaaluno</a></li>
            <li><a href="https://web.whatsapp.com/">WhatsApp</a></li>
            <li><a href="https://www.google.com/maps/dir/-14.232444,-42.7556864/Instituto+Federal+de+Educa%C3%A7%C3%A3o,+Ci%C3%AAncia+e+Tecnologia+Baiano+-+Campus+Guanambi,+Caixa+Postal+N%C2%BA+09+Distrito+de,+Sa%C3%ADda+p%2F+cera%C3%ADma+-+n,+%E2%80%93+Zona+Rural,+Guanambi+-+BA,+46430-000/@-14.2666334,-42.769777,13z/data=!3m1!4b1!4m10!4m9!1m1!4e1!1m5!1m1!1s0x75ac88e01cf19d5:0x3eeac85e6070b24b!2m2!1d-42.6936198!2d-14.3014979!3e0?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D">Localização</a></li>
        </ul>
    </div>

    <div class="titulo-2">
        <h2 id="titulo-cad" >Cadastro de Aluno</h2>
    </div>

<form action="listaaluno.php" method="post">
    <div class="formulario">
        <div class="formulario-esquerda">
            <label for="nome">Nome Completo: </label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Paulo Gabriel Silva" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Ex: pgabrielwisniewski@gmail.com" required>

            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco" placeholder="Ex: Rua Monteiro Lobato, 525" required>

            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro" placeholder="Ex: Morada Nova" required>

            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Ex: Guanambi" required>

            <label for="genero">Gênero: </label>
            <select name="genero" id="genero">
                <option value="" disabled selected>Selecione</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Prefiro Não Dizer">Prefiro não dizer</option>
            </select>

            <label for="disponibilidade">Disponibilidade: </label>
            <select name="disponibilidade" id="disponibilidade">
                <option value="" disabled selected>Selecione</option>
                <option value="Manhã">Manhã</option>
                <option value="Tarde">Tarde</option>
                <option value="Noite">Noite</option>
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
        
        <div class="formulario-direita">

            <label for="senha">Crie uma Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Ex: Silva.123" required>

            <label for="cpf">CPF: </label>
            <input type="number" name="cpf" id="cpf" placeholder="Ex: 000.000.000-00" required>

            <label for="zap">WhatsApp: </label>
            <input type="tel" name="zap" id="zap" placeholder="Ex: 77998403950" required>

            <label for="telefone">Telefone: </label>
            <input type="tel" id="telefone" name="telefone" placeholder="Ex: 3451-6393" required>

            <label for="nascimento">Nascimento: </label>
            <input type="date" name="nascimento" id="nascimento" required>

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

            <label for="estadocivil">Estado Civil: </label>
            <select name="estadocivil" id="estadocivil">
                <option value="" disabled selected>Selecione</option>
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viuvo(a)">Viúvo(a)</option>
            </select>

            <label for="foto">Envie uma foto sua: </label>
            <input type="file" name="foto" id="foto">

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

            <div class="checkbox">
                <ul id="ul-direita" >
                    <label>Disciplinas Cursadas: </label><br>
                    <input type="checkbox" name="mat" id="mat">
                    <label for="mat">Matemática</label>                    
                    <input type="checkbox" name="port" id="port">
                    <label for="port">Português</label>                   
                    <input type="checkbox" name="psw" id="psw">
                    <label for="psw">PSW-I</label>   
                    <input type="checkbox" name="fis" id="fis">
                    <label for="fis">Física</label>                   
                    <input type="checkbox" name="asw" id="asw">
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
        <h5>© 2024 - TODOS OS DIREITOS RESERVADOS A PAULO WISNIEWSKI</h5>
        <a href="https://github.com/psw1-2024"><img id="logo-git" src="imagem/logo-git.webp" alt=""></a>
    </div>
    
</body>
</html>