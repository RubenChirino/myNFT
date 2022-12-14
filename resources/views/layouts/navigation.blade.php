<!-- Styles -->
@vite(['resources/css/views/layouts/navigation.css'])

<nav x-data="{ open: false }" class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <img :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" src="{{ asset('/img/hamburguer-menu.png') }}" alt="">
                    <img :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" src="{{ asset('/img/close.png') }}" alt="">
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden shadow-md">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('home')" :active="request()->routeIs('home')">
                <img class="inline-flex" src="{{ asset('/img/icons/home.png') }}" alt="">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('gallery')" :active="request()->routeIs('gallery')">
                <img class="inline-flex" src="{{ asset('/img/icons/portrait-frame.png') }}" alt="">
                {{ __('Gallery') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('cart')" :active="request()->routeIs('cart')">
                <img class="inline-flex" src="{{ asset('/img/icons/cart.png') }}" alt="">
                {{ __('Shopping Cart') }}
                <span id="cart-items-counter" class="bg-blue-600 text-white"></span>
            </x-responsive-nav-link>

            @auth
                <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('account')" :active="request()->routeIs('account')">
                    <img class="inline-flex" src="{{ asset('/img/icons/user.png') }}" alt="">
                    {{ __('Account') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <img class="inline-flex" src="{{ asset('/img/icons/logout.png') }}" alt="">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            @else
                <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('login')" :active="request()->routeIs('login')">
                    <img class="inline-flex" src="{{ asset('/img/icons/user.png') }}" alt="">
                    {{ __('Login') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link class="flex items-center gap-2 no-underline hover:bg-blue-50 hover:border-blue-600" :href="route('register')" :active="request()->routeIs('register')">
                    <img class="inline-flex" src="{{ asset('/img/icons/user.png') }}" alt="">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>

    <script>

        const totalItemsInCart = (window.localStorage.getItem("cart")) ?
            Object.keys(JSON.parse(window.localStorage.getItem("cart"))).length : 0;
        setTotalItemsInCart(totalItemsInCart);

        function setTotalItemsInCart(number) {
            const elem = document.querySelector("#cart-items-counter");
            elem.textContent = number;
        }
    </script>

</nav>
