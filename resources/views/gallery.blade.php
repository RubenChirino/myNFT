{{-- @extends('layouts.app')

@section('content')

@endsection --}}



<x-app-layout>

    <!-- Scripts -->
    {{-- @vite(['resources/css/views/auth/dashboard/nfts/add.css']) --}}

  <div class="py-12">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>

            @foreach( $nfts as $nft )
            <p>
                <strong>{{ $nft->id }}</strong>

                <br>
                <span>{{ $nft->title }}</span>
            </p>
            @endforeach

        </div>

    </div>

  </div>

</x-app-layout>
