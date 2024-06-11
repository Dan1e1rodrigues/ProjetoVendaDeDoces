<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações principais da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="css/register.css">
    <!-- Título da página -->
    <title>Cadastro de Usuario</title>
</head>

<body>
    <!-- Container principal -->
    <div class="container">
        <!-- Seção da imagem no formulário -->
        <div class="form-image">
            <img src="images/undraw_cooking_p7m1.svg" alt="">
        </div>
        <!-- Seção do formulário -->
        <div class="form">
            <!-- Formulário -->
            <form action="#">
                <!-- Cabeçalho do formulário -->
                <div class="form-header">
                    <!-- Título do formulário -->
                    <div class="title">
                        <h1>Cadastre-se ou faça seu </h1>
                    </div>
                    <!-- Botão de login -->
                    <div class="login-button">
                        <button><a href="/ProjetoVendaDeDoces/principal/login.php">Login</a></button>
                    </div>
                </div>

                <!-- Grupo de inputs do formulário -->
                <div class="input-group">
                    <!-- Campo de input para o primeiro nome -->
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <!-- Campo de input para o sobrenome -->
                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>

                    <!-- Campo de input para o e-mail -->
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <!-- Campo de input para o celular -->
                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <!-- Campo de input para a senha -->
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>

                    <!-- Campo de input para confirmar a senha -->
                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>
                </div>

                <!-- Inputs de gênero -->
                <div class="gender-inputs">
                    <!-- Título da seção de gênero -->
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <!-- Grupo de opções de gênero -->
                    <div class="gender-group">
                        <!-- Opção de gênero feminino -->
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <!-- Opção de gênero masculino -->
                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <!-- Opção de gênero outros -->
                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <!-- Opção de gênero prefiro não dizer -->
                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <!-- Botão de continuar -->
                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
