<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docinhosdesaojose</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Icone na pagina -->
    <link rel="icon" href="img/logo/Black & White Minimalist Aesthetic Initials Font Logo.jpg" type="image/png">

    <!-- Inclua os links para as bibliotecas Bootstrap CSS e JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonte -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link do bootsrap do zap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css">

</head>
<body>
    <header>
        <h1>docinhosdesaojose</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contato</a></li>
                <!-- <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Paroquia Santa Inês</a></li> -->
            </ul>
        </nav>
    </header>

    <section class="carousel-section">
        <div id="product-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores do Carrossel -->
            <ul class="carousel-indicators">
                <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#product-carousel" data-slide-to="1"></li>
                <li data-target="#product-carousel" data-slide-to="2"></li>
            </ul>
    
            <!-- Slides do Carrossel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/bolo-de-pote-0.jpg" alt="Doce 1">
                    <div class="carousel-caption">
                        <h3>Bolo de Pote</h3>
                        <p>O melhor de toda região</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Fabiana-Dangelo.foto-Divulgação.jpeg.webp" alt="Doce 2">
                    <div class="carousel-caption">
                        <h3>Cones de prestigio e chocolate</h3>
                        <p>Os melhores</p>
                    </div>
                </div>
                <!-- Adicione mais slides aqui -->
            </div>
    
            <!-- Controles do Carrossel -->
            <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section class="products">
        <article class="product">
            <img src="img/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="img/Torta de Limão Trufada.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="img/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>
        
        <!-- <article class="product">
            <img src="img/exemplocliente.png" alt="Doce 2">
            <h2>Vendas</h2>
            <p>Faça sua encomenda</p>
            <span class="price"></span>
            <button class="buy-button">Agendar</button>
        </article> -->

        <article class="product">
            <img src="img/Torta de Limão Trufada.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <!-- Adicione mais produtos aqui -->

    </section>

    <!-- Zap -->
    <a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=5511994377452">
        <i class="fab fa-whatsapp"></i> 
      </a>

    <footer>
        <p>&copy; 2023 docinhosdesaojose</p>
    </footer>
</body>
</html>
