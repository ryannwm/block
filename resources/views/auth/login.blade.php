@extends('components.auth')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-dvh">
    <div class="card w-96">
        <header class="text-center">
          <h2 class="text-2xl">Login to your account</h2>
          <p>Enter your details below to login to your account</p>
        </header>
        <section>
          <form method="POST" action="{{ route('login.attempt') }}" class="form grid gap-6">
            @csrf
            <div class="grid gap-2">
              <label for="demo-card-form-email">Email</label>
              <input type="email" name="email" id="demo-card-form-email">
            </div>
            <div class="grid gap-2">
              <div class="flex items-center gap-2">
                <label for="demo-card-form-password">Password</label>
                <a href="#" class="ml-auto inline-block text-sm underline-offset-4 hover:underline">Forgot your password?</a>
              </div>
              <input type="password" name="password" id="demo-card-form-password">
            </div>
            <label class="label gap-3">
              <input type="checkbox" name="remember" class="input">
              Remember me
            </label>
            <footer class="flex flex-col items-center gap-2">
              <button type="submit" class="btn w-full">Login</button>
              <p class="mt-4 text-center text-sm">Don't have an account? <a href="{{ route('register') }}" class="underline-offset-4 hover:underline">Register</a></p>
            </footer>
          </form>
        </section>
      </div>
</div>
@endsection