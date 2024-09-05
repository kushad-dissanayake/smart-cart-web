let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  document.addEventListener('DOMContentLoaded', () => {
    let openShopping = document.querySelector('.cart-link');
    let closeShopping = document.querySelector('.closeShopping');
    let body = document.body;

    openShopping.addEventListener('click', () => {
        body.classList.add('active');
    });

    closeShopping.addEventListener('click', () => {
        body.classList.remove('active');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const cart = document.querySelector(".listCard");
    const totalElement = document.querySelector(".total");
    const closeShoppingBtn = document.querySelector(".closeShopping");
    const quantityElement = document.querySelector(".quantity");

    // Retrieve cart data from local storage, if available
    const cartItems = JSON.parse(localStorage.getItem("cartItems")) || {};

    // Add event listener to each "Add to Cart" button
    const addToCartButtons = document.querySelectorAll(".add-to-cart");
    addToCartButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const productId = button.getAttribute("data-product-id");
            const productName = button.getAttribute("data-product-name");
            const price = parseFloat(button.getAttribute("data-discounted-price"));

            if (!cartItems[productId]) {
                cartItems[productId] = {
                    name: productName,
                    quantity: 1,
                    price: price,
                    imageSrc: button.getAttribute("data-product-image"),
                };
            } else {
                cartItems[productId].quantity++;
            }

            // Save updated cart data to local storage
            localStorage.setItem("cartItems", JSON.stringify(cartItems));

            updateCart();
        });
    });

    // Update the cart display and total
    function updateCart() {
        cart.innerHTML = "";
        let total = 0;
        let quantity = 0;

        for (const itemId in cartItems) {
            const item = cartItems[itemId];
            total += item.price * item.quantity;
            quantity += item.quantity;

            const listItem = document.createElement("li");
            listItem.innerHTML = `
            <div class="cart-item">
            <div class="cart-item-details">
                <div>${item.name}</div>
                <div>
                ${item.quantity} x RS ${item.price.toFixed(2)}
                <button class="remove-item" data-product-id="${itemId}">Remove</button>
                </div>
            </div>
            </div>
            `;

            cart.appendChild(listItem);
        }

        totalElement.textContent = "Total: RS " + total.toFixed(2);
        quantityElement.textContent = quantity;
    }

    // Handle remove item from cart
    cart.addEventListener("click", (e) => {
        if (e.target.classList.contains("remove-item")) {
            const productId = e.target.getAttribute("data-product-id");
            if (cartItems[productId]) {
                cartItems[productId].quantity--;
                if (cartItems[productId].quantity <= 0) {
                    delete cartItems[productId];
                }

                // Save updated cart data to local storage
                localStorage.setItem("cartItems", JSON.stringify(cartItems));

                updateCart();
            }
        }
    });

    // Initial cart update
    updateCart();

    // Close shopping cart
    closeShoppingBtn.addEventListener("click", () => {
        // Clear cart data and remove from local storage
        localStorage.removeItem("cartItems");
        cartItems = {};
        updateCart();
    });
});