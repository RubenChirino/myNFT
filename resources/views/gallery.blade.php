<x-app-layout>

    <!-- Styles -->
    @vite(['resources/css/views/gallery.css'])

  <div class="gallery-page">

    <h1 class="title">Gallery</h1>

    <div class="nfts-container">

        @foreach( $nfts as $nft )
            {{-- <x-nft-card :name={{ $nft->name }} :price={{ $nft->price }} /> --}}
            <div class="nft-card max-w-sm rounded-md overflow-hidden shadow-lg cursor-pointer">
                <img class="card-img-top" src="{{ asset('/img/nfts/orochi-silver.png') }}" alt="...">
                <div class="px-3 py-2">
                    <div id="row-1">
                        <h5 class="card-title font-bold truncate">{{ $nft->name }}</h5>
                        <button class="card-add-to-cart-btn">
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

</x-app-layout>
