<x-app-layout>

    <x-bootstrap-css />

  <div class="py-12">

    <div>
        <form class="flex flex-col" method="POST" action="{{ route('login') }}">
            @include('auth._form-account')
            <input class="btn btn-block bg-blue-600 hover:bg-blue-700 login-btn" name="login" id="login" type="submit" value="{{ __('Edit') }}">
        </form>
        <a>Go to the admin tools</a>
    </div>

    <div>
        Shippings table
        {{-- <table>...</table> --}}
    </div>

  </div>

</x-app-layout>
