<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<html>
    <head>
        <link rel="stylesheet" href="carrinho.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <p class="logo"></p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>CARRINHO</p></div>
                <div id="cartItem">SEU CARRINHO ESTÁ VAZIO</div>
                <div class="foot">
    <h3>Total</h3>
    <h2 id="total">R$ 0.00</h2>
</div>
<button id="checkout" onclick="finalizePurchase()">Finalizar Compra</button>
            </div>
        </div>
        <script src="carrinho.js"></script>
    </body>
</html>