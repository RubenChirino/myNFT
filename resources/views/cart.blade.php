<x-app-layout>

    <!-- Scripts -->
    @vite(['resources/css/views/cart.css'])

  <div class="cart-page">

    <h1 class="title">Shopping Cart</h1>

    <div class="content">

        <div class="cart-items"></div>

        <div class="cart-info bg-white overflow-hidden shadow rounded-lg">
            <h3 id="total-item" class="font-bold"></h3>
            <p id="total-price" class="font-bold"></p>
            <button class="bg-blue-600 text-white py-1 px-4 rounded font-bold">
                Buy
            </button>
        </div>

        <!-- Not Items in the cart -->
        <div class="cart-no-items">
            No items in the cart :(
        </div>

    </div>

  </div>

  <script>

    const cart = (window.localStorage.getItem("cart")) ?
            JSON.parse(window.localStorage.getItem("cart")) : {};
    const totalItems = (cart) ? (Object.keys(cart)).length : 0;

    // ===== Elements =====

    // Section 1
    const cartItemsElem = document.querySelector(".cart-items");

    // Section 2
    const cartInfoElem = document.querySelector(".cart-info");
    const totalItemsElem = document.querySelector("#total-item");
    const totalPriceElem = document.querySelector("#total-price");

    // Section 3
    const noItemsInCartElem = document.querySelector(".cart-no-items");

    // Formatter
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'ARS',
    });

    updateScreen();
    updateData();


    function removeElements(elements) {
        elements.forEach(element => {
            element.remove();
        });
    }

    function getTotalPrice() {
        let val = 0;

        for (const [key, value] of Object.entries(cart)) {
            val += value.price;
        }
        return formatter.format(val);
    }

    function createNftCard(nft) {
        const card = document.createElement("div");
        card.id = `nft-${nft.id}-card`;
        card.className = "nft-card max-w-sm rounded-md overflow-hidden shadow-lg cursor-pointer";
        card.innerHTML = `<img class="card-img-top" src="{{ asset('/img/nfts/orochi-silver.png') }}" alt="...">
                <div class="px-3 py-2">
                    <div id="row-1">
                        <h5 class="card-title font-bold truncate">${truncateString(nft.name, 10)}</h5>
                        <button id="nft-${nft.id}-btn" class="card-add-to-cart-btn">
                            <img class="bg-red-500 p-1 rounded" src="{{ asset('/img/icons/trash.png') }}" alt="">
                        </button>
                    </div>
                    <div id="row-2">
                        <span class="font-bold">Price:</span>
                        <p class="font-bold">${formatter.format(nft.price)}</p>
                    </div>
                </div>`;

        const removeItemFromCartBtn = card.querySelector(`#nft-${nft.id}-btn`);
        removeItemFromCartBtn.onclick = () => {
            try {
                delete cart[nft.id];
                window.localStorage.setItem("cart", JSON.stringify(cart));
                const card = document.querySelector(`#nft-${nft.id}-card`);
                // console.log("card =>", card);
                card.remove();

                updateData();

                // Update Screen
                const updatedCart = getCart();
                const totalItems = (updatedCart) ? (Object.keys(updatedCart)).length : 0;
                if (totalItems === 0) {
                    noItemsInCartElem.style.display = "flex";
                    removeElements([cartItemsElem, cartInfoElem]);
                }

            } catch (error) {
                console.error("An error has ocurred to remove the new item to the cart", error);
            }
        }

        return card;
    }

    function truncateString(str, num) {
        if (str.length > num) {
            return str.slice(0, num) + "...";
        } else {
            return str;
        }
    }

    function getCart() {
        return (window.localStorage.getItem("cart")) ?
            JSON.parse(window.localStorage.getItem("cart")) : {};
    }

    function updateData() {
        const cart = getCart();
        const totalItems = (cart) ? (Object.keys(cart)).length : 0;
        if (totalItems) {
            // Section 2
            const totalItemsElem = document.querySelector("#total-item");
            const totalPriceElem = document.querySelector("#total-price");

            totalItemsElem.textContent = `${totalItems} NFTs`;
            totalPriceElem.textContent = `Total price: ${getTotalPrice()}`;
        }
    }

    function updateScreen() {
        const cart = getCart();
        const totalItems = (cart) ? (Object.keys(cart)).length : 0;
        if (totalItems) {

            // Section 3
            noItemsInCartElem.style.display = "none";

            // Section 1
            for (const [key, value] of Object.entries(cart)) {
                cartItemsElem.appendChild(createNftCard(value));
            }

            // Section 2
            totalItemsElem.textContent = `${totalItems} NFTs`;
            totalPriceElem.textContent = `Total price: ${getTotalPrice()}`;
        } else {
            // Section 1 & 2
            removeElements([cartItemsElem, cartInfoElem]);
        }
    }

  </script>

</x-app-layout>
