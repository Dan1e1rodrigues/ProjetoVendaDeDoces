<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Configurações principais da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Título da página -->
    <title>Login de Usuario</title>
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
                        <h1>Login</h1>
                    </div>
                    <!-- Botão de login -->
                    <div class="login-button">
                        <button><a href="#">Entrar</a></button>
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
