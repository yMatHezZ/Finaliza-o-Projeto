const product = [
  {
      id: 0,
      image: 'moletompuma.jpg',
      title: 'Moletom Puma',
      price: 300,
  },
  {
      id: 1,
      image: 'moletommercedes.jpg',
      title: 'Corrente em Cruz',
      price: 240,
  },
  {
      id: 2,
      image: 'maio.jpeg',
      title: 'Pulseira de Corações',
      price: 385,
  },
  {
      id: 3,
      image: 'cropped.jpeg',
      title: 'Cropped',
      price: 160,
  }
];
const categories = [...new Set(product.map((item)=>
  {return item}))]
  let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
  var {image, title, price} = item;
  return(
      `<div class='box'>
          <div class='img-box'>
              <img class='images' src=${image}></img>
          </div>
      <div class='bottom'>
      <p>${title}</p>
      <h2>R$ ${price}.00</h2>`+
      "<button onclick='addtocart("+(i++)+")'>COMPRAR</button>"+
      `</div>
      </div>`
  )
}).join('')

var cart =[];

function addtocart(a){
  cart.push({...categories[a]});
  displaycart();
}
function delElement(a){
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let j = 0, total = 0;
  document.getElementById("count").innerHTML = cart.length;

  if (cart.length === 0) {
      document.getElementById('cartItem').innerHTML = "Seu carrinho está vazio";
      document.getElementById("total").innerHTML = "R$ " + 0 + ".00";
  } else {
      document.getElementById("cartItem").innerHTML = cart.map((items) => {
          var { image, title, price } = items;
          total += price;
          document.getElementById("total").innerHTML = "R$ " + total + ".00";

          return (
              `<div class='cart-item'>
                  <div class='row-img'>
                      <img class='rowimg' src=${image}>
                  </div>
                  <div class='item-details'>
                      <p style='font-size:12px;'>${title}</p>
                      <h2 style='font-size: 15px;'>R$ ${price}.00</h2>
                  </div>
                  <span class='remove-icon' onclick='delElement(${j++})'>🗑️</span>
              </div>`
          );
      }).join('');
  }
}
  function finalizePurchase() {
    if (cart.length === 0) {
        alert("Seu carrinho está vazio! Adicione itens antes de finalizar a compra.");
        return;
    }

    // Redireciona para a página de pagamento
    window.location.href = "pagamento.php";
}
