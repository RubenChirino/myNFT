<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nfts') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 ruben">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4">
                        @foreach ($nfts as $nft)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $nft->title }}</td>
                            <td class="px-6 py-4">
                                <a href="" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
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
                    </table>

                    {{ $nfts->links() }}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>

{{-- <div class="py-12 ruben">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="mb-4">
                        @foreach ($nfts as $nft)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 py-4">{{ $nft->title }}</td>
                            <td class="px-6 py-4">
                                <a href="" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">Eliminar</td>
                        </tr>
                        @endforeach
                    </table>

                    {{ $nfts->links() }}

                </div>
            </div>
        </div>
    </div> --}}
