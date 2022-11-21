<x-app-layout>

    <!-- Styles -->
    @vite(['resources/css/views/dashboard/nfts/add.css'])

    <div class="py-12">

        <h1 class="title">Add Nft</h1>

        <div class="form-container bg-white my-8 mx-auto sm:px-4 lg:px-7 overflow-hidden shadow rounded-lg">

            <form
            class="flex flex-col mx-auto py-8"
            action="{{ route('nfts.store') }}"
            method="POST"
            enctype="multipart/form-data">
                @include('admin.dashboard.nfts._form')
                <input class="cursor-pointer mt-7 font-extrabold rounded text-white bg-blue-600 p-2" type="submit" value="Add"> 
            </form>

        </div>
    </div>

</x-app-layout>
