<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pg Inicial</title>
    <link rel="stylesheet" type="text/css" href="pg_princip.css" media="screen" />
    <script src=”carrinho.js”></script>

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
</head>
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
            <a href="pg_feminina.php">Feminino</a>
        </div><br>
       
        <div class="product">
            <div class="product-item">
                <a href="detalhes_produto.php">
                    <div class="product-image" style="background-image: url('camiseta_preta1.jpg');"></div>
                    <div class="product-details">
                        <h3 class="product-title">Camiseta Preta</h3>
                        <span class="product-price">R$80.00</span>
                    </div>
                </a>
            </div>
            <div class="product-item">
                <a href="jeandtl.php">
                <div class="product-image" style="background-image: url('calcajeans1.jpg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Relógio IWC </h3>
                    <span class="product-price">R$14000.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="detalhes_produto.php">
                <div class="product-image" style="background-image: url('moletompuma.jpg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Moletom Puma</h3>
                    <span class="product-price">R$300.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="moletommerc.php">
                <div class="product-image" style="background-image: url('moletommercedes.jpg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Corrente Cruz</h3>
                    <span class="product-price">R$240.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="detalhes_produto.php">
                <div class="product-image" style="background-image: url('calcanike.jpeg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Calça Moletom Nike</h3>
                    <span class="product-price">R$170.00</span>
                </div>
            </a>
            </div>
            <div class="product-item">
                <a href="jaqueta.php">
                <div class="product-image" style="background-image: url('jaquetadecouro.jpg');"></div>
                <div class="product-details">
                    <h3 class="product-title">Jaqueta de Couro</h3>
                    <span class="product-price">R$850.00</span>
                </div>
            </a>
            </div>
            
        </div>
        <div class="product">
    <?php
    include_once('config.php');
    $sql = "SELECT nome, imagem, preco FROM produto WHERE categoria = 0";
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


    </div>
 

    <footer>
        <p>&copy; MC</p>
    </footer>
    
</body>
</html>