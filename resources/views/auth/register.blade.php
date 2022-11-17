<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>myNFT - Sign Up</title>

  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">

</head>

<body>
  <main>

    {{-- CSS Styles --}}
    <x-bootstrap-css />
    @vite(['resources/css/views/register.css'])

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 register-section-wrapper">
          <div class="brand-wrapper">

            <img src="/img/logo.png" alt="logo" class="logo">

          </div>
          <div class="register-wrapper my-auto">

            <h1 class="register-title">Sign Up</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

              <!-- Name -->
                <div class="form-group mb-8">

                    <label for="name">Name</label>

                    <input type="text"
                            name="name" id="name"
                            :value="__('Name')" class="form-control" required autofocus
                            placeholder="Enter your name...">

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                </div>

              <!-- Email -->
              <div class="form-group mb-8">

                <label for="email">Email</label>

                <input type="email"
                        name="email" id="email"
                        :value="__('Email')" class="form-control" required autofocus
                        placeholder="Enter your email address...">

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

              </div>

              <!-- Password -->
              <div class="form-group mb-8">

                <label for="password">Password</label>

                <input type="password"
                        name="password"
                        id="password" class="form-control"
                        :value="__('Password')" required autocomplete="current-password"
                        placeholder="Enter your password...">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

              </div>

              <!-- Confirm Password -->
              <div class="form-group mb-10">

                <label for="password_confirmation">Repeat Password</label>

                <input type="password"
                        name="password_confirmation"
                        id="password_confirmation" class="form-control"
                        :value="__('Repeat Password')" requiered autocomplete="current-password"
                        placeholder="Repeat Password...">

                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

              </div>

              <input class="btn btn-block bg-blue-600 hover:bg-blue-700 register-btn" name="register" id="register" type="submit" value="{{ __('Sign Up') }}">

            </form>

            <div class="w-auto p-2">
                <span class="text-md text-black font-extrabold text-black-600"> {{ __('Already registered?') }}</span>
                <a class="text-md font-extrabold text-indigo-500 hover:text-blue-700 hover:no-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>

          </div>
        </div>

        <!-- Image Register -->
        <div class="col-sm-7 px-0 d-none d-sm-block">
          <img src="/img/banners/sign-up-bannner.png" alt="register image" class="register-img">
            <div class="centered">A highly-curated platform for creating, collecting and trading unique NFTs</div>
            <div class="fra-1">Purchase cool NFTs very easy fast</div>
            <div class="fra-2">A digital gallery to showcase your collection</div>
        </div>

      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
</html>
