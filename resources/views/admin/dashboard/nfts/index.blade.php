<x-app-layout>

    <!-- Styles -->
    <x-bootstrap-css />
    @vite(['resources/css/views/dashboard/nfts/index.css'])

    <div class="admin-nfts-page pt-12 pb-24">

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
                        <a id="edit-btn" href="{{ route('nfts.edit', $nft) }}" class="bg-blue-600 rounded p-2">
                            <img src="{{ asset('/img/icons/pencil.png') }}" alt="...">
                        </a>

                        <form id="delete-btn" action="{{ route('nfts.destroy', $nft) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <label class="bg-red-500 rounded p-2">
                                <input
                                class="invisible"
                                type="submit"
                                value=""
                                onclick="return confirm('Do you want to eliminate it?')">
                                <img src="{{ asset('/img/icons/trash.png') }}" alt="...">
                            </label>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="add-nft-container">
                <a id="add-btn" class="bg-green-700 rounded" href="{{ route('nfts.create') }}">
                    Add
                </a>
            </div>

            <div class="pagination-container">
                {{ $nfts->links() }}
            </div>
        </div>

    </div>

</x-app-layout>
