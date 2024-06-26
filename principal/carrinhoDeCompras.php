<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/carrinho.css">
</head>
<body>
    
    <?php include 'header.php'?>
    
    <main class="carrinho-container">
        <div class="carrinho-produtos">
            <h2>Seu Carrinho</h2>
            <div class="produto">
                <img src="images/boloDeote02.jpg" alt="Bolo de Pote">
                <div class="produto-info">
                    <h3>Bolo de Pote</h3>
                    <p>Delicioso bolo de pote em diversos sabores.</p>
                    <div class="quantidade">
                        <button class="menos">-</button>
                        <span class="quantidade-valor">1</span>
                        <button class="mais">+</button>
                    </div>
                    <p class="preco">R$ 10,00</p>
                </div>
            </div>
            <div class="produto">
                <img src="images/Beijinho de Coco - Brazilian Coconut Balls Recipe with Condensed Milk.jpeg" alt="Beijinho de Coco">
                <div class="produto-info">
                    <h3>Beijinho de Coco</h3>
                    <p>Tradicional doce brasileiro feito com coco.</p>
                    <div class="quantidade">
                        <button class="menos">-</button>
                        <span class="quantidade-valor">2</span>
                        <button class="mais">+</button>
                    </div>
                    <p class="preco">R$ 5,00</p>
                </div>
            </div>
            <div class="produto">
                <img src="images/Torta de Limão Trufada.jpeg" alt="Torta de Limão Trufada">
                <div class="produto-info">
                    <h3>Torta de Limão Trufada</h3>
                    <p>Torta de limão com recheio trufado.</p>
                    <div class="quantidade">
                        <button class="menos">-</button>
                        <span class="quantidade-valor">1</span>
                        <button class="mais">+</button>
                    </div>
                    <p class="preco">R$ 15,00</p>
                </div>
            </div>
            <div class="total">
                <h3>Total: R$ 35,00</h3>
                <button class="finalizar-compra">Finalizar Compra</button>

                <button class="continuar-compra">Continuar Comprando</button>
            </div>
        </div>
    </main>
    
    <?php include 'footer.php'?>
</body>
</html>
