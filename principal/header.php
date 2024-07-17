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

                <!-- Testando o Menu Hamburguer -->
                <nav>
                    <ul>
                        <li><a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/index.php'); ?>" style="color: #b88601;">VAMOS AS COMPRAS</a></li>
                        <li><a href="#">NOVIDADES</a></li>
                        <li><a href="#">REDES SOCIAIS</a></li>
                    </ul>
                </nav>  

                <!-- Caminho com as nomas de php -->
                <!-- Botão Login -->
                <div class="btn-contato">
                    <a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/login.php'); ?>"><button>Receba hoje</button></a>
                </div>

                <!-- Botão Cadastro -->
                <!-- <div class="btn-contato">
                    <a href="<?php echo htmlspecialchars('/ProjetoVendaDeDoces/principal/register.php'); ?>"><button>CADASTRO</button></a>
                </div> -->

            </div><!--flex-->

        </div><!--container-->
        
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>