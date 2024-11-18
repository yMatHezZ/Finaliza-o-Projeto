// Referências ao formulário e elementos
const paymentForm = document.getElementById("paymentForm");
const paymentDetails = document.getElementById("paymentDetails");

// Exibe os detalhes com base no método escolhido
paymentForm.addEventListener("change", (e) => {
    const selectedPayment = document.querySelector('input[name="payment"]:checked').value;

    switch (selectedPayment) {
        case "pix":
            paymentDetails.innerHTML = `
                <h3>Pagamento via Pix</h3>
                <p>Escaneie o QR Code abaixo ou copie a chave Pix:</p>
                <img id="pixQRCode" src="https://api.qrserver.com/v1/create-qr-code/?data=exemplo%40pix.com.br&size=200x200" alt="QR Code Pix" style="width: 200px; margin: 10px auto;">
                <p>Chave Pix: MC@pix.com.br</p>
            `;
            break;

        case "credit":
            paymentDetails.innerHTML = `
                <h3>Pagamento com Cartão de Crédito</h3>
                <label>Nome no Cartão:
                    <input type="text" placeholder="Digite o nome" required>
                </label>
                <label>Número do Cartão:
                    <input type="text" placeholder="Digite o número" maxlength="16" required>
                </label>
                <label>Validade:
                    <input type="month" required>
                </label>
                <label>CVV:
                    <input type="text" placeholder="123" maxlength="3" required>
                </label>
            `;
            break;

        case "boleto":
            paymentDetails.innerHTML = `
                <h3>Pagamento via Boleto</h3>
                <p>Clique no botão abaixo para gerar o boleto:</p>
                <button onclick="generateBoleto()">Gerar Boleto</button>
            `;
            break;

        default:
            paymentDetails.innerHTML = "";
    }

    paymentDetails.style.display = "block";
});

// Simulação de pagamento no formulário
paymentForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const selectedPayment = document.querySelector('input[name="payment"]:checked').value;
    alert(`Pagamento via ${selectedPayment.toUpperCase()} enviado com sucesso!`);
    window.location.href = "agradecimento.php"; // Redireciona para a página inicial
});

// Simula a geração de boleto
function generateBoleto() {
    alert("Boleto gerado com sucesso! Você pode baixá-lo agora.");
}