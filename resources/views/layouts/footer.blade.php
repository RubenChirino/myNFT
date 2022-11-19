<!-- Styles -->
<x-bootstrap-css />
@vite(['resources/css/views/layouts/footer.css'])

<footer class="flex flex-col bg-blue-600">

   <div class="container mx-auto pt-8 pb-4">

        <div id="row-1" class="row">

            <div class="col-12 col-sm-6 col-lg-6">
                <img src="{{ asset('/img/logo-white.png') }}" alt="">
            </div>

            <div class="community col-12 col-sm-6 col-lg-6 flex flex-col gap-2">
                <h4 class="community-title font-bold text-white">Join the community</h4>
                <div class="community-icons flex gap-3">
                    <img src="{{ asset('/img/icons/twitter.png') }}" alt="">
                    <img src="{{ asset('/img/icons/instagram.png') }}" alt="">
                    <img src="{{ asset('/img/icons/discord.png') }}" alt="">
                </div>
            </div>

        </div>

        <hr class="text-white d-none d-sm-none d-lg-block mt-8 mb-4">

        <div id="row-2" class="row">

            <div class="col-12 col-sm-12 col-lg-6 order-2 order-sm-2 order-lg-1">
                <hr class="text-white d-block d-sm-block d-lg-none my-3">
                <p class="text-white font-bold">© 2018 - 2022 MyNft, Inc</p>
            </div>

            <div class="links-container col-12 col-sm-12 col-lg-6 order-1 order-sm-1 order-lg-2 flex gap-6">
                <a class="text-white font-bold no-underline" href="">Privacy Policy</a>
                <a class="text-white font-bold no-underline" href="">Terms of Service</a>
            </div>

        </div>

   </div>

</footer>
