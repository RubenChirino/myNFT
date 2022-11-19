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

    </div>

  </div>

  <script>
    const cart = JSON.parse(window.localStorage.getItem("cart") ?? {});
    const totalItems = (Object.keys(cart)).length;

    // Elements
    const cartItemsElem = document.querySelector(".cart-items");

    // Formatter
    const formatter = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'ARS',
    });

    if (totalItems) {
        // Section 1
        for (const [key, value] of Object.entries(cart)) {
            cartItemsElem.innerHTML += createNftCard(value);
        }

        // Section 2
        const totalItemsElem = document.querySelector("#total-item");
        const totalPriceElem = document.querySelector("#total-price");

        totalItemsElem.textContent = `${totalItems} NFTs`;
        totalPriceElem.textContent = `Total price: ${getTotalPrice()}`;
    } else {
        const cartInfoElem = document.querySelector(".cart-info");
        removeElements([cartItemsElem, cartInfoElem]);
    }

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
        const card = `
            <div id="nft-${nft.id}-card" class="nft-card max-w-sm rounded-md overflow-hidden shadow-lg cursor-pointer">
                <img class="card-img-top" src="{{ asset('/img/nfts/orochi-silver.png') }}" alt="...">
                <div class="px-3 py-2">
                    <div id="row-1">
                        <h5 class="card-title font-bold truncate">${truncateString(nft.name, 10)}</h5>
                        <button id="nft-${nft.id}-btn" onclick="removeToCart(${nft})" class="card-add-to-cart-btn">
                            <img class="bg-red-500 p-1 rounded" src="{{ asset('/img/icons/trash.png') }}" alt="">
                        </button>
                    </div>
                    <div id="row-2">
                        <span class="font-bold">Price:</span>
                        <p class="font-bold">${formatter.format(nft.price)}</p>
                    </div>
                </div>
            </div>
        `;
        return card;
    }

    function truncateString(str, num) {
        if (str.length > num) {
            return str.slice(0, num) + "...";
        } else {
            return str;
        }
    }

    function removeToCart(item) {
        if (!item) {
            console.error("Not Item received");
            return;
        }

        // console.log("DATA =>", {
        //     cart,
        //     item: cart[item.id],
        // });

        // Verify
        // if (cart[item.id]) {

        //     delete cart[item.id];

        //     try {
        //         window.localStorage.setItem("cart", JSON.stringify(cart));
        //         // removeCard(item.id);
        //     } catch (error) {
        //         console.error("An error has ocurred to add the new item to the cart", error);
        //     }
        // } else {
        //     console.warn("The item is already in the cart", cart[item.id]);
        // }

        return;
    }

    // function removeCard(id) {
    //     // const card = document.querySelector(`#nft-${id}-card`);
    //     console.log("card =>", id);
    //     // card.remove();
    // }

  </script>

</x-app-layout>
