@csrf

<!-- Email -->
<div class="form-group mb-8">

    <label for="email">Email</label>

    <input type="email" name="email" id="email" :value="__('Email')"
    class="form-control" required autofocus
    placeholder="Enter your email address...">

    <x-input-error :messages="$errors->get('email')" class="mt-2" />

</div>

<!-- Password -->
<div class="form-group mb-10">

    <label for="password">Password</label>

    <input type="password" name="password" id="password" class="form-control"
    :value="__('Password')" required autocomplete="current-password"
    placeholder="Enter your password...">

    <x-input-error :messages="$errors->get('password')" class="mt-2" />

</div>
