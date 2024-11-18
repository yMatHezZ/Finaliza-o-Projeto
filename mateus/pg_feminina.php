<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pg feminina</title>
    <link rel="stylesheet" type="text/css" href="pg_fem.css" media="screen" />
</head>
<script>
    // Função para redirecionar para outra página
function redirecionarParaOutraPagina() {
    // Substitua 'URL_DA_PAGINA_DESTINO' pela URL para onde deseja redirecionar
    window.location.href = 'carrinho.php';
}
function redirecionarParaOutraPagina1() {
    // Substitua 'URL_DA_PAGINA_DESTINO' pela URL para onde deseja redirecionar
    window.location.href = 'pg_cadastro.php';
}
    </script>
<body>
<header>
        <div class="header-content">
            <div class="logo"></div>
            <div>
        
            <div class="destaq"><h2 >Produtos em Destaque</h2>  </div>
            </div>
        <div class="user-links">
        <div class= carrinho> <img src="carrinho.png" alt="Descrição da Imagem" onclick="redirecionarParaOutraPagina()"> </div>
        <div class= user><img src="user.jpg" alt="Descrição da Imagem" onclick="redirecionarParaOutraPagina1()"></div>
        </div>
        
    </header>
    <div class="container">
        
        <div class="gender-link">
            <a href="PG_PRINCIPAL.php">Masculino</a>
        </div><br>
        <div class="product">
            <div class="product-item">
                <a href="maiodet.php">
                    <div class="product-image" style="background-image: url('maio.jpeg');"></div>
                    <div class="product-details">
                        <h3 class="product-title">Pulseira de corações</h3>
                        <span class="product-price">R$385.00</span>
                    </div>
                </a>
            </div>
            <div class="product-item">
                <a href="detalhes_prod_fem.php">
                <div class="product-image" style="background-image: url('jeansfem.png');"></div>
                <div class="product-details">
                    <h3 class="product-title">Calça Jeans</h3>
                    <span class="product-price">R$220.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="detalhes_prod_fem.php">
                <div class="product-image" style="background-image: url('cropped.jpeg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Cropped</h3>
                    <span class="product-price">R$160.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="vestidodet.php">
                <div class="product-image" style="background-image: url('vestdoverme.png');"></div>
                <div class="product-details">
                    <h3 class="product-title">Vestido Vermelho</h3>
                    <span class="product-price">R$720.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="colar.php">
                <div class="product-image" style="background-image: url('saia.jpg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Colar de rubi</h3>
                    <span class="product-price">R$305.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="detalhes_prod_fem.php">
                <div class="product-image" style="background-image: url('bikini.png');"></div>
                <div class="product-details">
                    <h3 class="product-title">Biquíni</h3>
                    <span class="product-price">R$150.00</span>
                </div>
            </a>
            </div>
            
        </div>

        <?php
    include_once('config.php');
    $sql = "SELECT nome, imagem, preco FROM produto WHERE categoria = 1";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='product-item'>";
            echo "<a href='detalhes_produto.php'>";
            echo "<div class='product-image' style='background-image: url(\"" . $row["imagem"] . "\");'></div>";
            echo "<div class='product-details'>";
            echo "<h3 class='product-title'>" . $row["nome"] . "</h3>";
            echo "<span class='product-price'>R$" . number_format($row["preco"], 2, ',', '.') . "</span>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
        }
    } else {
        echo "0 resultados";
    }

    $conexao->close();
    ?>
    </div>

    <footer>
        <p>&copy; MC</p>
    </footer>
</body>
</html>