<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>myNFT - Sign In</title>

  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
  <main>

    @vite(['resources/css/views/login.css'])

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 login-section-wrapper">

          <div class="brand-wrapper">
            <img src="/img/logo.png" alt="logo" class="logo">
          </div>

          <div class="login-wrapper my-auto">

            <h1 class="login-title">Sign in</h1>

            <form method="POST" action="{{ route('login') }}">
                @include('auth._form')
                <input class="btn btn-block bg-blue-600 hover:bg-blue-700 login-btn" name="login" id="login" type="submit" value="{{ __('Sign In') }}">
            </form>

            <div class="w-auto p-1 ml-auto">
                <a class="text-md font-extrabold text-black-600 font-medium flex items-center justify-center hover:no-underline"  href="{{ route('register') }}">{{ __('Create an Account') }}</a>
            </div>

          </div>
        </div>

        <!-- Image Login -->
        <div class="col-sm-7 px-0 d-none d-sm-block">
          <img src="/img/banners/sign-in-bannner.jpg" alt="login image" class="login-img">
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
