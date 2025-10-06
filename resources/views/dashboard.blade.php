@extends('components.layout')

@section('title', 'Dashboard')

@section('content')
    @include('components.partials.'.auth()->user()->userType)
    <dialog id="logout-dialog" class="dialog" aria-labelledby="alert-dialog-title" aria-describedby="alert-dialog-description">
        <article>
            <header>
                <h2 id="logout-dialog-title">Are you sure you want to log out?</h2>
                <p id="logout-dialog-description">You will need to log in again to access your account.</p>
            </header>

            <footer>
                <button class="btn-outline" onclick="document.getElementById('logout-dialog').close()">Stay Logged In</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-primary">Logout</button>
                </form>
            </footer>
        </article>
    </dialog>
    <dialog id="profile-dialog" class="dialog" aria-labelledby="alert-dialog-title" aria-describedby="alert-dialog-description">
        <article>
            <header>
                <h2 id="profile-dialog-title">Profile</h2>
            </header>

            <content>
                <form method="POST" action="{{ route('user.update') }}" class="form grid gap-6">
            @csrf
             <div class="grid gap-2">
              <label for="demo-card-form-email">User Type</label>
              <div id="select-userType♥S" class="select">
                <button type="button" class="btn-outline justify-between font-normal w-full" id="select-userType♥S-trigger" aria-haspopup="listbox" aria-expanded="false" aria-controls="select-userType♥S-listbox">
                  <span class="truncate"></span>
              
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-up-down-icon lucide-chevrons-up-down text-muted-foreground opacity-50 shrink-0">
                    <path d="m7 15 5 5 5-5" />
                    <path d="m7 9 5-5 5 5" />
                  </svg>
                </button>
                <div id="select-user-type-popover" data-popover aria-hidden="true">
                  <div role="listbox" id="select-user-type-listbox" aria-orientation="vertical" aria-labelledby="select-user-type-trigger" data-empty="No framework found.">
                    <div role="option" data-value="user">User</div>
                    <div role="option" data-value="admin">Admin</div>
                  </div>
                </div>
                <input type="hidden" name="userType" value="{{ Auth::user()->userType }}"○ />
              </div>

            </div>
            <div class="grid gap-2">
              <label for="demo-card-form-email">Name</label>
              <input type="text" name="name" id="demo-card-form-email" value="{{ Auth::user()->userName }}">
            </div>
            <div class="grid gap-2">
              <label for="demo-card-form-email">Email</label>
              <input type="email" name="email" id="demo-card-form-email" value="{{ Auth::user()->userEmail }}">
            </div>
            <footer>
                <button class="btn-outline" onclick="document.getElementById('profile-dialog').close()">Back</button>
                <button class="btn-primary" type="submit">Edit Profile</button>
            </footer>
          </form>
            </content>

        </article>
    </dialog>
@endsection