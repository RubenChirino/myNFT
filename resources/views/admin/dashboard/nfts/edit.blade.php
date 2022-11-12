<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nfts') }}
        </h2>
    </x-slot> --}}

    <!-- Scripts -->
    @vite(['resources/css/views/auth/dashboard/nfts/edit.css'])

  <div class="py-12">

      <h1 class="title">Edit Nft</h1>

      <div class="form-container bg-white my-8 mx-auto sm:px-4 lg:px-7 overflow-hidden shadow rounded-lg">

          <form
          class="flex flex-col mx-auto py-8"
          action="{{ route('nfts.update', $nft) }}"
          method="POST">
            @method('PUT')
            @include('admin.dashboard.nfts._form')
          </form>

      </div>
  </div>

</x-app-layout>
