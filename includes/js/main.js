let cartCount = 0;

function addToCart() {
  cartCount++;
  document.getElementById("cart-count").innerText = cartCount;
}

function removeFromCart() {
  if (cartCount > 0) {
    cartCount--;
    document.getElementById("cart-count").innerText = cartCount;
  }
}

