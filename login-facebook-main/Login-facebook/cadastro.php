<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="edit">
        <form action="criarcadastro.php" method="post" class="cadastro">

            
            <h1>Cadastro</h1>
            
            
            <input type="text" id="nome" name="nome" placeholder="Nome">
            <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
            <input type="password"  id="senha" name="senha" placeholder="Senha">
            <input type="email"  id="email" name="email" placeholder="Email">
            <div class="conta">
                <a href="./Login-facebook/index.html">Fazer login</a>
            </div>
            <input type="submit" value="Criar">
            
        </form>


        </div>
</body>
</html>