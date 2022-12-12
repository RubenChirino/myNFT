<x-app-layout>

    <div class="container">

        <h1 class="title">Su compra fue exitosa</h1>


        <div class="content">

            <div class="container-items"></div>

            <div class="section overflow-hidden shadow rounded-lg">

                <h3 class="font-bold mb-4">Gracias</h3>
                <p class="font-bold mb-5 text-lg">Por apoyar nuestro negocio</p>
                <p class="font-bold mb-5 text-lg">¡Apreciamos mucho tu confianza en nosotros!</p>
                <p class="font-bold mb-4 text-lg">Sea el primero en enterarse de los nuevos Nfts</p>
                <p class="font-bold mb-4 text-lg">¡Seguinos en nuestras redes sociales!</p>


                <a href="{{ route('home') }}"
                class="bg-blue-500 text-white text-center py-1 px-4 rounded font-bold no-underline">
                    Volver al inicio
                </a>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    @vite(['resources/css/views/shoppings.css'])

</x-app-layout>