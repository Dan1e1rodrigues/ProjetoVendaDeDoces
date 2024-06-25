<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Docinhos de São José</title>
    <link rel="stylesheet" href="css/perfilSobre.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Banner -->
    <section class="banner">
        <img src="images/banner1sobre.jpg" alt="Banner Docinhos de São José" class="img-fluid">
    </section>

    <!-- Apresentação e Visão -->
    <section class="about-us container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="images/boloDePote01.jpg" alt="Apresentação" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center">
                <h2>Bem-vindo à Docinhos de São José</h2>
                <p>Me chamo Alicia, tenho 17 Anos, sou de São Paulo e estou cursando 2° ano do ensino médio.
                Venho de uma família Católica. Meu pais são separados, desde pequena minha mãe criou eu e meus dois irmãos com a ajuda dos meus avós. Desde 11 anos de idade gostava de ajudar minha avó na cozinha, principalmente quando precisava fazer doces. Então com mais três meninas, iniciei a loja "docinho de São José", com o propósito de ir para JMJ na Coreia do Sul, mas depois de alguns meses que a loja ficou parada eu decidi continuar as produções sozinha e com o intuito de ter um trabalho, por conta própria.</p>
                <h3>Visão</h3>
                <p>Ser reconhecido como o melhor e-commerce de doces artesanais, oferecendo produtos inovadores e de alta qualidade que encantam e fidelizam nossos clientes.</p>
            </div>
        </div>
    </section>

    <!-- Produtos -->
    <section class="products container mt-5">
    <h2>Nossos Produtos</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card product">
                <img src="images/boloDeote02.jpg" class="card-img-top" alt="Bolo de Pote">
                <div class="card-body">
                    <h5 class="card-title">Bolo de Pote</h5>
                    <p class="card-text">Delicioso bolo de pote em diversos sabores.</p>
                    <!-- <p class="price">R$ 10,00</p>
                    <a href="#" class="btn btn-primary">Comprar</a> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card product">
                <img src="images/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" class="card-img-top" alt="Beijinho de Coco">
                <div class="card-body">
                    <h5 class="card-title">Beijinho de Coco</h5>
                    <p class="card-text">Tradicional doce brasileiro feito com coco.</p>
                    <!-- <p class="price">R$ 5,00</p>
                    <a href="#" class="btn btn-primary">Comprar</a> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card product">
                <img src="images/Torta de Limão Trufada.jpeg" class="card-img-top" alt="Torta de Limão Trufada">
                <div class="card-body">
                    <h5 class="card-title">Torta de Limão Trufada</h5>
                    <p class="card-text">Torta de limão com recheio trufado.</p>
                    <!-- <p class="price">R$ 15,00</p>
                    <a href="#" class="btn btn-primary">Comprar</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
