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
        <a href="home.html">
            <h1>SIT</h1>
            <p>Sistema Interno de Talentos</p>
        </a>

    </header>

    <main>

        <h1 class="titulo">Atualização dos Meus dados:</h1>


        <form action="atualizacao.php" method="post" class="form-termo-atualizacao">

            <div class="barr-termo">
                <p><strong>Dados Pessoais</strong></p>
            </div>

            <fieldset class="box-form">
                <div class="divisa-input">
                    <label for="atualizacao-nome">Nome:</label>
                    <input type="text" name="nome-atualizar" id="atualizacao-nome" class="form-input" placeholder="Nome Completo">
                </div>

                <div class="divisa-input">
                    <label for="atualizacao-telefone">Telefone:</label>
                    <input type="text" name="telefone" id="atualizacao-telefone" class="form-input" placeholder="Telefone">
                </div>

                <div class="divisa-input">
                    <label for="atualizacao-email-principal">E-mail:</label>
                    <input type="email" name="email" id="atualizacao-email-principal" class="form-input" placeholder="E-Mail">
                </div>  
            </fieldset>

            <div class="barr-termo">
                <p><strong>Dados do Endereço</strong></p>
            </div>
            
            <fieldset class="box-form">
                <div class="divisa-input">
                    <label for="">Reside à Rua:</label>
                    <input type="text" name="rua" class="form-input" placeholder="Rua">
                </div>

                <div class="divisa-input">
                    <label for="">Numero:</label>
                    <input type="text" name="numero" class="form-input" placeholder="Numero">
                </div>

                <div class="divisa-input">
                    <label for="">Bairro:</label>
                    <input type="text" id="bairro" class="form-input" placeholder="Bairro">
                </div>

                <div class="divisa-input">
                    <label for="">CEP:</label>
                    <input type="text" id="cep" class="form-input" placeholder="CEP">
                </div>

                <div class="divisa-input">
                    <label for="">Cidade:</label>
                    <input type="text" id="cidade" class="form-input" placeholder="Cidade">
                </div>

                <div class="divisa-input">
                    <label for="">Estado:</label>
                    <input type="text" name="estado" class="form-input" placeholder="Estado">
                </div>
                
            </fieldset>

            <input type="submit" name="atualizacao-enviar" class="botao-enviar" value="Atualizar Meu Cadastro">
        </form>

    </main>

    <footer>
        <h4>SIT</h4>
        <h4>Sistema Interno De Talentos</h4>
    </footer>

</body>
</html>