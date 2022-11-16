<x-app-layout>
    <link rel="stylesheet" href="/css/home.css">
    <!-- Scripts -->
    {{-- @vite(['resources/css/views/auth/dashboard/nfts/add.css']) --}}

  <div class="py-12">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class= "mb-5 text-5xl text-black font-extrabold text-center">Discover and collect extraordinary NFTs</div>

        <div class="mb-10 text-3xl text-center">myNFT is the marketplace to buy NFTs in an easier way</div>

        <div id="text-box">
            <img  id="img-home"src="/img/aliens-collection.jpeg" alt="" class="img-fluid">
            <div id="text_above" class="text-center">Alien Collection Coming soon</div>
        </div>

        <div>
            <img src="/img/sponsors/mark-zuckerberg.png" alt="" class="max-w-full h-auto round text-center text-align-center">
            <div class="mb-4 text-5xl text-center">"MyNFT is better than any other platform we've played with, and we've used them all"</div>
            <div class="mb-1 text-2xl text-center font-extrabold">Mark Zuckerberg, CEO of Meta</div>
        </div>

        <div class="grid grid-cols-2 gap-x-10 flex items-center">

            <div class="mb-4 m-10 ml-auto">
                <img src="/img/sponsors/blockchain-capital.png" alt="">
            </div>

            <div class="mb-4 m-10 mr-auto">
                <img src="/img/sponsors/meta.png" alt="">
            </div>

            <div class="mb-4 m-10 ml-auto">
                <img src="/img/sponsors/yCombinator.png" alt="">
            </div>

            <div class="mb-4 m-10 mr-auto">
                <img src="/img/sponsors/paradigm-capital.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 flex items-center">

            <div class="mr-auto ml-auto w-68">
                <img src="/img/sponsors/binance.png" alt="">
            </div>

        </div>
    </div>
  </div>
</x-app-layout>
