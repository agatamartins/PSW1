<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Contato</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>


    <div class="header">
        <h1> PROGRAMAÇÃO DE SISTEMAS PARA WEB - FORMULÁRIO </h1> 
   
   </div>

     <div class="navegacão"> 
             
    <ul class="topnav">
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="right"><a href="#about">About</a></li>
      </ul>
     </div>

     
     <br>

     <div class="box forms"> 
        <div id="box">     
            <section class="formulario" id="formulario">
                <div class="formulario-content">

                 <h1>FORMULÁRIO PARA PREENCHIMENTO</h1>   
            <action="/action_page.php">
                <label for="nome">Nome completo</label> <br>
                <input type="text" id="nome" name="nome" placeholder="Escreva seu nome..." size="40"> <br>

                <label for="name">Sexo</label>
                    <select id="name" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="Outro">Prefiro não informar</option>
                    
                    </select>

                <label for="data de nascimento">Data de nascimento</label> <br>
                <input type="date" id="data de nascimento" name="data de nascimento"> <br>

                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" pattern= "\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite seu CPF no formato: xxx.xxx.xxx-xx" placeholder= "Digite seu CPF no formato: xxx.xxx.xxx-xx">

                <label for="nome">Status de relacionamento</label>
                    <select id="status" name="status">
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="namorando">Namorando</option>
                    <option value="casado">Casado(a)</option>
                    <option value="outro">Outro</option>
                    
                    
                    </select>

                <label for="country">Nacionalidade</label>
                    <select id="country" name="nacionalidade">
                    <option value="Brasil">Brasil</option>
                    <option value="e.u.a">E.U.A</option>
                    <option value="china">CHINA</option>
                    <option value="fraça">Fraça</option>
                    
                    </select>
                    
                    <label for="nome">Endereço</label> <br>
                    <input type="text" id="nome" name="nome" placeholder="Escreva seu endereço..." size="40"> <br>    

                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required placeholder="Escreva seu CEP..." size="40">    
              
                <label for="phone">Telefone</label> <br>
                <input type="tel" id="phone" name="phone" placeholder="Escreva seu número de telefone..." pattern=[0-9]{2}-[0-9]{5}-[0-9]{}> <br>

                <label for="email">E-mail</label> <br>
                <input type="email" id="email" name="email" placeholder="Escreva seu e-mail..."> <br>

                <label for="pwd">Senha</label><br>
                <input type="password" placeholder="Escreva sua senha..." id="pwd" name="pwd"><br>
                
                <p>Idiomas fluentes</p>
                <input type="checkbox" id="ingles" name="ingles" value="Inglês">
                <label for="ingles"> Inglês</label><br>

                <input type="checkbox" id="espanhol" name="espanhol" value="Espanhol">
                <label for="espanhol">Espanhol</label><br>

                <input type="checkbox" id="frances" name="frances" value="Francês">
                <label for="frances">Francês</label><br>

                <input type="checkbox" id="italiano" name="italiano" value="Italiano">
                <label for="vehicle1">Italiano</label><br>

                <input type="checkbox" id="japones" name="japones" value="Japonês">
                <label for="japones">Japonês</label><br>

                <input type="checkbox" id="russo" name="russo" value="Russo">
                <label for="russo">Russo</label><br><br>
               
                <label for="favcolor">Selecione sua cor favorita:</label>
                <input type="color" id="favcor" name="favcor" value="#ff0000">

                <br>
                <br>
                <br>
                  
                <label for="vol">Pertinência deste formulário (entre 0 e 100):</label>
                <input type="range" id="vol" name="vol" min="0" max="100">
                

                <p>Fim do formulário: <input type="button" onclick="alert('Obrigada pela participação!')" value="Clique aqui!"> </p>

                <input type="submit" value="Enviar"> <br>
            </form>
        </div>
    </div>   
     
    <br>
    <br>
    <br>
    
<div class="footer">
    <div id="div1"> Copyright &copy 2024 by Ágata Martins. Todos os direitos reservados. </div>
</div>
    


</body>
</html>


