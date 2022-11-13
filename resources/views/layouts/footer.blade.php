<!-- Scripts -->
@vite(['resources/css/views/layouts/footer.css'])

<footer class="flex flex-col bg-blue-600">

   <div class="container mx-auto pt-8 pb-4">

        <div class="flex justify-between">
            <img src="{{ asset('/img/logo-white.png') }}" alt="">

            <div class="community flex flex-col gap-2">
                <h4 class="title font-bold text-white">Join the community</h4>
                <div class="community-icons flex gap-3">
                    <img src="{{ asset('/img/icons/twitter.png') }}" alt="">
                    <img src="{{ asset('/img/icons/instagram.png') }}" alt="">
                    <img src="{{ asset('/img/icons/discord.png') }}" alt="">
                </div>
            </div>
        </div>

        <hr class="mt-8 mb-4">

        <div class="flex justify-between"> {{-- class="border-t mt-8" --}}
            <p class="text-white font-bold">© 2018 - 2022 MyNft, Inc</p>
            <div class="flex gap-6">
                <a class="text-white font-bold" href="">Privacy Policy</a>
                <a class="text-white font-bold" href="">Terms of Service</a>
            </div>
        </div>

   </div>

</footer>
