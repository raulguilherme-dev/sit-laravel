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
        
        <div class="header-logo">
            <a href="home.html">
                <h1>SIT</h1>
                <p>Sistema Interno de Talentos</p>
            </a>
        </div>

        <div class="header-usuario">
            <h3>ALUNO</h3>
        </div>

    </header>


    <main>
        <h1 class="titulo">Coleta de Dados:</h1>
        <div class="barr-termo">
            <p><strong>Coleta de Dados Para Termo de Estágio</strong></p>
        </div>

        <form action="termo.php" method="post" class="form-termo-atualizacao">
        
            <div class="barr-termo">
                <p><strong>Dados Pessoais do Estágiario</strong></p>
            </div>

            <fieldset class="box-form">
                <div class="divisa-input">
                    <label for="termo-nome">Nome Completo:</label>
                    <input type="text" name="nome" id="termo-nome" class="form-input" placeholder="Nome Completo">
                </div>

                <div class="divisa-input">
                    <label for="termo-cpf">CPF:</label>
                    <input type="text" name="cpf" id="termo-cpf"  class="form-input" placeholder="CPF">
                </div>

                <div class="divisa-input">
                    <label for="termo-rg">RG Nº:</label>
                    <input type="text" name="rg" id="termo-rg" class="form-input" placeholder="Número RG">
                </div>

                <div class="divisa-input">
                    <label for="">Orgão Expedidor:</label>
                    <input type="text" name="orgao" class="form-input" placeholder="Orgão Expedidor">
                </div>
                
                <div class="divisa-input">
                    <label for="">Telefone:</label>
                    <input type="text" name="telefone" class="form-input" placeholder="Telefone">
                </div>

                <div class="divisa-input">
                    <label for="termo-email">E_mail:</label>
                    <input type="email" name="email" id="termo-email" class="form-input" placeholder="E-Mail">
                </div>
            </fieldset>

            <div class="barr-termo">
                <p><strong>Dados de Endereço do Estágiario</strong></p>
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
                    <input type="text" name="bairro" class="form-input" placeholder="Bairro">
                </div>

                <div class="divisa-input">
                    <label for="">CEP:</label>
                    <input type="text" name="cep" class="form-input" placeholder="CEP">
                </div>

                <div class="divisa-input">
                    <label for="">Cidade:</label>
                    <input type="text" name="cidade" class="form-input" placeholder="Cidade">
                </div>

                <div class="divisa-input">
                    <label for="">Estado:</label>
                    <input type="text" name="estado" class="form-input" placeholder="Estado">
                </div>
            </fieldset>
            
            <div class="barr-termo">
                <p><strong>Dados da Concedente e Curso</strong></p>
            </div>

            <fieldset class="box-form">
                <div class="divisa-input">
                <label for="termo-concedente">Concedente:</label>
                <select name="concedente" id="termo-concedente">
                    <option value="2" aria-checked="true">Selecione a Concedente</option>
                    <option value="0">Fortti International Company</option>
                    <option value="1">Impactul International Company</option>
                    <option value="1">Balance International Company</option>
                </select>
                </div>

                <div class="divisa-input">
                    <label for="termo-curso">Curso</label>
                    <select name="curso" id="termo-curso">
                        <option value="3" aria-checked="true">Selecione o Curso</option>
                        <option value="0">Medio Integrado - Agropecuaria</option>
                        <option value="1">Medio Integrado - Informatica</option>
                        <option value="2">Medio Integrado - Edificações</option>
                    </select>
                </div>
            </fieldset>

            <div class="barr-termo">
                <p><strong>Dados do Supervisor e Orientador</strong></p>
            </div>

            <fieldset class="box-form">
                <div class="divisa-input">
                <label for="">Supervisor:</label>
                <input type="text" name="supervisor" class="form-input" placeholder="Nome Completo">
                </div>

                <div class="divisa-input">
                    <label for="">Cargo:</label>
                    <input type="text" name="cargo-supervisor" class="form-input" placeholder="Cargo do Supervisor">
                </div>

                <div class="divisa-input">
                    <label for="">E-Mail Supervisor:</label>
                    <input type="text" name="email-supervisor" class="form-input" placeholder="E-Mail do Supervisor">
                </div>

                <div class="divisa-input">
                    <label for="">Contato:</label>
                    <input type="text" name="contato" class="form-input" placeholder="Contato do Supervisor">
                </div>

                <div class="divisa-input">
                    <label for="">Orientador:</label>
                    <input type="text" name="orientador" class="form-input" placeholder="Nome Completo">
                </div>
            </fieldset>

            <div class="barr-termo">
                <p><strong>Dados do Estágio</strong></p>
            </div>

            <fieldset class="box-form">
                <div class="divisa-input">
                    <label for="">Periodo do Curso:</label>
                    <input type="text" name="periodo" class="form-input" placeholder="Periodo Do Curso">
                </div>

                <div class="divisa-input">
                    <label for="">Data de Inicio do Estagio:</label>
                    <input type="date" name="data" class="form-input" placeholder="Data de Inicio">
                </div>

                <div class="divisa-input">
                    <label for="inicio-jornada">Inicio da Jornada:</label>
                    <input type="text" name="inicio" id="inicio-jornada" class="form-input" placeholder="Horario do Inicio Jornada de Trabalho">
                </div>

                <div class="divisa-input">
                    <label for="fim-jornada">Fim da Jornada:</label>
                    <input type="text" name="fim" id="fim-jornada" class="form-input" placeholder="Horario do Fim Jornada de Trabalho">
                </div>

                <div class="divisa-input">
                    <label for="carga-total">Carga Horaria do Estagio:</label>
                    <input type="text" name="carga" id="carga-total" class="form-input" placeholder="Carga horaria">
                </div>

            </fieldset>

            <input type="submit" value="Enviar Informações" class="botao-enviar">
        </form>

    </main>

    <footer>
        <h4>SIT</h4>
        <h4>Sistema Interno De Talentos</h4>
    </footer>
</body>
</html>