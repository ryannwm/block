@extends('components.auth')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-dvh">
    <div class="card w-96">
        <header class="text-center">
          <h2 class="text-2xl">Create new account</h2>
          <p>Enter your details below to create your account</p>
        </header>
        <section>
          <form class="form grid gap-6">
             <div class="grid gap-2">
              <label for="demo-card-form-email">User Type</label>
              <div id="select-904250" class="select">
                <button type="button" class="btn-outline justify-between font-normal w-full" id="select-904250-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-904250-listbox">
                  <span class="truncate"></span>
              
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
                    <path d="m7 15 5 5 5-5" />
                    <path d="m7 9 5-5 5 5" />
                  </svg>
                </button>
                <div id="select-user-type-popover" data-popover aria-hidden="true">
                  <div role="listbox" id="select-user-type-listbox" aria-orientation="vertical" aria-labelledby="select-user-type-trigger" data-empty="No framework found.">
                    <div role="option" data-value="user">User</div>
              
                    <div role="option" data-value="user">Admin</div>
                  </div>
                </div>
                <input type="hidden" name="select-user-type-value" value="" />
              </div>

            </div>
            <div class="grid gap-2">
              <label for="demo-card-form-email">Name</label>
              <input type="email" id="demo-card-form-email">
            </div>
            <div class="grid gap-2">
              <label for="demo-card-form-email">Email</label>
              <input type="email" id="demo-card-form-email">
            </div>
            <div class="grid gap-2">
              <div class="flex items-center gap-2">
                <label for="demo-card-form-password">Password</label>
                <a href="#" class="ml-auto inline-block text-sm underline-offset-4 hover:underline">Forgot your password?</a>
              </div>
              <input type="password" id="demo-card-form-password">
            </div>
          </form>
        </section>
        <footer class="flex flex-col items-center gap-2">
          <button type="button" class="btn w-full">Register</button>
          <p class="mt-4 text-center text-sm">Already have an account? <a href="#" class="underline-offset-4 hover:underline">Login</a></p>
        </footer>
      </div>
</div>
@endsection