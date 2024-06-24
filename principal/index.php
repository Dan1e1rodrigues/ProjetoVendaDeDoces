<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>docinhosdesaojose</title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- Icone na pagina -->
    <link rel="icon" href="images/logo/Black & White Minimalist Aesthetic Initials Font Logo.jpg" type="image/png">

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
    
    <?php include 'header.php'; ?>

    <section class="carousel-section">
        <div id="product-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicadores do Carrossel -->
            <ul class="carousel-indicators">
                <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#product-carousel" data-slide-to="1"></li>
                <li data-target="#product-carousel" data-slide-to="2"></li>
                <li data-target="#product-carousel" data-slide-to="3"></li>
                <li data-target="#product-carousel" data-slide-to="4"></li>
            </ul>
    
            <!-- Slides do Carrossel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/boloDeote02.jpg" alt="Doce 1">
                    <!-- <div class="carousel-caption">
                        <h3>Bolos de Pote Morango</h3>
                        <p>O melhor de toda região de São Paulo</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img src="images/Fabiana-Dangelo.foto-Divulgação.jpeg.webp" alt="Doce 2">
                    <!-- <div class="carousel-caption">
                        <h3>Cones de prestígio e chocolate</h3>
                        <p>Os melhores</p>
                    </div> -->
                </div> 
                <div class="carousel-item">
                    <img src="images/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Doce 3">
                    <!-- <div class="carousel-caption">
                        <h3>Beijinho de Coco</h3>
                        <p>Delícia para todas as ocasiões</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img src="images/Torta de Limão Trufada.jpeg" alt="Doce 4">
                    <!-- <div class="carousel-caption">
                        <h3>Torta de Limão Trufada</h3>
                        <p>O sabor irresistível do limão</p>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img src="images/boloDePote03.jpg" alt="Doce 5">
                    <!-- <div class="carousel-caption">
                        <h3>Brigadeiro</h3>
                        <p>O tradicional docinho brasileiro</p>
                    </div> -->
                </div>
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
            <img src="images/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/Torta de Limão Trufada.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/boloDeote02.jpg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/boloDePote03.jpg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <!-- Reformulação dos cards, descrição (testando com 6 card ou ++) -->
        <article class="product">
            <img src="images/boloDeote02.jpg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/Torta de Limão Trufada.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 5,00</span>
            <button class="buy-button">Comprar</button>
        </article>

        <article class="product">
            <img src="images/Torta de Limão Trufada.jpeg" alt="Doce 1">
            <h2>Doce de Chocolate</h2>
            <p>Um doce de chocolate delicioso.</p>
            <span class="price">R$ 15,00</span>
            <button class="buy-button">Comprar</button>
        </article>
    </section>

    <!-- Formulario -->
     
     <!-- Fim -->

    <!-- Zap -->
    <a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=5511994377452">
        <i class="fab fa-whatsapp"></i> 
    </a>

    <?php include 'footer.php'; ?>
    
</body>
</html>
