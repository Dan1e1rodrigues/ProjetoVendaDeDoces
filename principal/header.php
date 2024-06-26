<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Um pouco da Minha Historia</title>
    <link rel="stylesheet" href="./css/headerFooter.css">
</head>
<body>
    <header id="header">
        <div class="container">

            <div class="flex">

                <a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/carrinhoDecompras.php'); ?>"><i class="bi bi-cart"></i></a>

                <nav>
                    <ul>
                        <li><a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/index.php'); ?>" style="color: #b88601;">VAMOS AS COMPRAS</a></li>
                        <li><a href="#">NOVIDADES</a></li>
                        <li><a href="#">REDES SOCIAIS</a></li>
                        <li><a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/perfilSobre.php'); ?>">MINHA HISTÓRIA</a></li>
                        <!-- Possibilidade de adicionar mais um sem quebrar -->
                    </ul>
                </nav>

                <!-- Caminho com as nomas de php -->
                <!-- Botão Login -->
                <div class="btn-contato">
                    <a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/login.php'); ?>"><button>LOGIN</button></a>
                </div>

                <!-- Botão Cadastro -->
                <div class="btn-contato">
                    <a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/register.php'); ?>"><button>CADASTRO</button></a>
                </div>

            </div><!--flex-->

        </div><!--container-->
    </header>

    
</body>
</html>