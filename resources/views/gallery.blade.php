<x-app-layout>

    <!-- Styles -->
    @vite(['resources/css/views/gallery.css'])

  <div class="gallery-page">

    <h1 class="title">Gallery</h1>

    <div class="nfts-container">

        @foreach( $nfts as $nft )
            {{-- <x-nft-card :name={{ $nft->name }} :price={{ $nft->price }} /> --}}
            <div id="nft-{{ $nft->id }}-card" class="nft-card max-w-sm rounded-md overflow-hidden shadow-lg cursor-pointer">
                <img class="card-img-top" src="{{ asset('/storage/'.$nft->image) }}" alt="...">
                <div class="px-3 py-2">
                    <div id="row-1">
                        <h5 class="card-title font-bold truncate">{{ $nft->name }}</h5>
                        <button id="nft-{{ $nft->id }}-btn" onclick="addToCart({{ $nft }})" class="card-add-to-cart-btn">
                            <img class="bg-blue-600 p-1 rounded" src="{{ asset('/img/icons/cart-white.png') }}" alt="">
                        </button>
                    </div>
                    <div id="row-2">
                        <span class="font-bold">Price:</span>
                        <p class="font-bold">{{ number_format($nft->price, 2, ",", ".") }} ARS</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination-container">
        {{ $nfts->links() }}
    </div>

  </div>

  <script>
    const cart = (window.localStorage.getItem("cart")) ?
        JSON.parse(window.localStorage.getItem("cart")) : {};

    function addToCart(item) {
        if (!item) {
            console.error("Not Item received");
            return;
        }

        // console.log("DATA =>", {
        //     cart,
        //     item: cart[item.id],
        // });

        // Verify
        if (!cart[item.id]) {
            cart[item.id] = {
                id: item.id,
                name: item.name,
                price: item.price,
                category: item.category,
            }
            try {
                window.localStorage.setItem("cart", JSON.stringify(cart));
                removeAddToCartBtn(item.id);

                // Navegation Counter
                const navegationCounter = document.querySelector("#cart-items-counter");
                if (navegationCounter) {
                    const totalItems = (cart) ? (Object.keys(cart)).length : 0;
                    navegationCounter.textContent = totalItems;
                }

            } catch (error) {
                console.error("An error has ocurred to add the new item to the cart", error);
            }
        } else {
            console.warn("The item is already in the cart", cart[item.id]);
        }

        return;
    }

    function removeAddToCartBtn(id) {
        const btn = document.querySelector(`#nft-${id}-btn`);
        // console.log("btn =>", btn);
        // btn.classList.add("in-cart");
        btn.remove();
    }

    // Remove the "Add to cart" btn fo the product added to the cart
    if (cart) {
        for (const [key, value] of Object.entries(cart)) {
            // console.log(`${key}: ${value}`);
            removeAddToCartBtn(key);
        }
    }

  </script>

</x-app-layout>
