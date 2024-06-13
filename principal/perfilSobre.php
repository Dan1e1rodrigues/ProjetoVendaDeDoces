<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Um pouco da Minha Historia</title>
    <link rel="stylesheet" href="./css/perfilSobre.css">
</head>
<body>
    <header id="header">
        <div class="container">

            <div class="flex">

                <a href="#"><i class="bi bi-cart"></i></a>

                <nav>
                    <ul>
                        <li><a href="#" style="color: #b88601;">VAMOS AS COMPRAS</a></li>
                        <li><a href="#">NOVIDADES</a></li>
                        <li><a href="#">REDES SOCIAIS</a></li>
                        <li><a href="#">BLOG</a></li>
                        <!-- Possibilidade de adicionar mais um sem quebrar -->
                    </ul>
                </nav>

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

    <section class="banner">
        <h1>UM POUCO DA MINHA<span>HISTORIA</span></h1>
    </section>

    <!--  -->
    <footer>
        <div class="container">
            <p>&copy; 2024 - Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="menu.js"></script>
</body>
</html>