<x-app-layout>

  <!-- Styles -->
  @vite(['resources/css/views/home.css'])
  {{-- max-w-6xl mx-auto sm:px-6 lg:px-8 --}}
    <div class="home-page">

        <div class= "mb-5 text-5xl text-black font-extrabold text-center">Discover and collect extraordinary NFTs</div>

        <div class="mb-10 text-3xl text-center">myNFT is the marketplace to buy NFTs in an easier way</div>

        <div id="text-box">
            <img  id="img-home"src="/img/aliens-collection.jpeg" alt="" class="img-fluid">
            <div id="text_above" class="text-center">Alien Collection Coming soon</div>
        </div>

        <div class="trust-us">
            <img src="/img/sponsors/mark-zuckerberg.png" alt="" class="max-w-full h-auto round text-center text-align-center">
            <div class="description text-center">"MyNFT is better than any other platform we've played with, and we've used them all"</div>
            <div class="author mb-1 text-center font-extrabold">Mark Zuckerberg, CEO of Meta</div>
        </div>

        <div class="grid grid-cols-2 gap-x-10 flex items-center">

            <div class="mb-4 m-10 ml-auto">
                <a href="https://blockchain.capital" target="_blank">
                    <img src="/img/sponsors/blockchain-capital.png" alt="">
                </a>
            </div>

            <div class="mb-4 m-10 mr-auto">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="/img/sponsors/meta.png" alt="">
                </a>
            </div>

            <div class="mb-4 m-10 ml-auto">
                <a href="https://www.ycombinator.com" target="_blank">
                    <img src="/img/sponsors/yCombinator.png" alt="">
                </a>
            </div>

            <div class="mb-4 m-10 mr-auto">
                <a href="https://www.paradigmcap.com" target="_blank">
                    <img src="/img/sponsors/paradigm-capital.png" alt="">
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 flex items-center">

            <div class="mr-auto ml-auto w-68">
                <a href="https://www.binance.com" target="_blank">
                    <img id="binance-icon" src="/img/sponsors/binance.png" alt="">
                </a>
            </div>

        </div>
    </div>

</x-app-layout>
