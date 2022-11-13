{{-- @extends('layouts.app')

@section('content')

@endsection --}}



<x-app-layout>

    <!-- Scripts -->
    @vite(['resources/css/views/gallery.css'])

  <div class="gallery-page py-9">

    <h1 class="title">Gallery</h1>

    <div class="nfts-container">

        @foreach( $nfts as $nft )
            {{-- <x-nft-card :title={{ $nft->title }} :price={{ $nft->price }} /> --}}
            <div class="nft-card max-w-sm rounded-md overflow-hidden shadow-lg cursor-pointer">
                <img class="card-img-top" src="{{ asset('/img/nfts/orochi-silver.png') }}" alt="...">
                <div class="px-3 py-2">
                    <h5 class="card-title font-bold truncate">{{ $nft->title }}</h5>
                    <div>
                        <span class="font-bold">Price:</span>
                        <p class="font-bold">{{ $nft->price }} ARS</p>
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
