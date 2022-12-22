<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="geral.css">
    <title>SIT - Sistema Interno de Talentos</title>
</head>
<body>
    <header> 
        
        <div>
            <a href="index.html">
            <h1>SIT</h1>
            <p>Sistema Interno de Talentos</p>
            </a>
        </div>

        <div>
            
        </div>

    </header>

    <main>
        <form action="login.php" method="post" class="form-login">
            
            <img src="imagens\logo_marca.png" id="logo-login">
            <input type="hidden" name="id" value="1">
            <div class="login-divisa-input">
                <label for="login-matricula">Matricula: </label>
                <input type="text" name="matricula" id="login-matricula" class="login-input" placeholder="Matricula">
            </div>

            <div class="login-divisa-input">
                <label for="login-senha">Senha: </label>
                <input type="password" name="senha" id="login-senha" class="login-input" placeholder="Senha">
            </div>

            <input type="submit" id="login-botao-enviar" value="Entrar">

        </form>
    </main>

    <footer>
        <h4>SIT</h4>
        <h4>Sistema Interno De Talentos</h4>
    </footer>
</body>
</html>