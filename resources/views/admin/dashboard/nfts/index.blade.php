<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nfts') }}
        </h2>

        <a href="{{ route('nfts.create') }}">Crear</a>
    </x-slot> --}}

    <!-- Styles -->
    <x-bootstrap-css />
    @vite(['resources/css/views/dashboard/nfts/index.css'])

    <div class="admin-nfts-page py-12">

        <h1 class="title">Admin Dashboard</h1>

        <div class="table-container bg-white mx-auto sm:px-4 lg:px-7 overflow-hidden shadow rounded-md">
            <table class="table table-striped-columns">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($nfts as $nft)
                <tr class="border-b border-gray-200 text-sm">
                    <td id="nft-id_column" class="px-6 py-2">{{ $nft->id }}</td>
                    <td id="nft-name_column" class="px-6 py-2">
                        {{ substr($nft->name, 0, 15) }}
                    </td>
                    <td id="nft-price_column" class="px-6 py-2">{{ $nft->price }}</td>
                    <td id="nft-actions_column" class="px-6 py-2">
                        <a href="{{ route('nfts.edit', $nft) }}" class="text-indigo-600">Editar</a>

                        <form action="{{ route('nfts.destroy', $nft) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input
                            class="bg-gray-800 text-white rounded px-4 py-2"
                            type="submit"
                            value="Eliminar"
                            onclick="return confirm('Do you want to eliminate it?')">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="pagination-container">
                {{ $nfts->links() }}
            </div>
        </div>

    </div>

</x-app-layout>


{{-- {{ asset('images/logo.png') }} --}}

{{-- Search --}}
{{-- {{ request('search') }} --}}

{{-- <div class="py-12 ruben">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4">
                        @foreach ($nfts as $nft)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-2">{{ $nft->name }}</td>
                            <td class="px-6 py-2">
                                <a href="" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-2">Eliminar</td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $nfts->links() }}

                </div>
            </div>
        </div>
    </div> --}}
