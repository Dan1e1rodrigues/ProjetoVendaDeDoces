<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações principais da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="css/login_cd.css">
    <!-- Título da página -->
    <title>Login de Usuario</title>
</head>

<body>
    <!-- Container principal -->
    <div class="container">
        <!-- Seção da imagem no formulário -->
        <div class="form-image">
            <img src="images/undraw_male_avatar_g98d (1).svg" alt="">
        </div>
        <!-- Seção do formulário -->
        <div class="form">
            <!-- Formulário --> 
            <form action="../config/test.php" method="POST">
                <!-- Cabeçalho do formulário -->
                <div class="form-header">
                    <!-- Título do formulário -->
                    <div class="title">
                        <h1>Faça seu Login ou</h1>
                    </div>
                    <!-- Botão de login -->
                    <div class="login-button">
                        <button><a href="/ProjetoVendaDeDoces/principal/register.php">Cadastre-se</a></button>
                    </div>
                </div>

                <!-- Grupo de inputs do formulário -->
                <div class="input-group">
                    <!-- Campo de input para o e-mail -->
                    <div class="input-box">
                        <label for="email">Login</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <!-- Campo de input para senha -->
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>
                
                    
                </div>
                
                <!-- Messagem de erro -->
                <?php

                if (isset($_GET['error']) && $_GET['error'] === 'invalid_credentials') {
                    echo '<p class="error-message">E-mail ou senha incorretos.</p>';
                }
                ?>

                <!-- Botão de continuar -->
                <div class="continue-button">
                    <input type="submit" value="Continuar" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
