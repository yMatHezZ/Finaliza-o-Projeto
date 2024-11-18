<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="pagamento.css">
</head>
<body>
    <div class="container">
        <h1>Escolha a Forma de Pagamento</h1>
        <form id="paymentForm">
            <!-- Opções de pagamento -->
            <div class="payment-method">
                <label>
                    <input type="radio" name="payment" value="pix" required>
                    <span>Pix</span>
                </label>
                <label>
                    <input type="radio" name="payment" value="credit" required>
                    <span>Cartão de Crédito</span>
                </label>
                <label>
                    <input type="radio" name="payment" value="boleto" required>
                    <span>Boleto Bancário</span>
                </label>
            </div>

            <!-- Detalhes para cada método -->
            <div id="paymentDetails"></div>

            <button type="submit" id="submitPayment">Pagar Agora</button>
        </form>
    </div>

    <script src="pagamento.js"></script>
</body>
</html>