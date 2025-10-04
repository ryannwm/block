<div class="flex h-14 max-w-full w-full items-center gap-2 px-4">
    <button type="button" data-tooltip="Toggle sidebar" data-side="bottom" data-align="start" class="btn-ghost" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar'))"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panel-left-icon lucide-panel-left"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 3v18"/></svg></button>
    @auth
    <div class="mr-auto flex items-center gap-1">
        <p class="text">Welcome,</p> 
        <p class="font-bold flex gap-1 items-center">{{ Auth::user()->userName }}<span class="font-normal text-xs">({{ ucfirst(Auth::user()->userType) }})</span></p>
    </div>
    @endauth
    <button
    type="button"
    aria-label="Toggle dark mode"
    data-tooltip="Toggle dark mode"
    data-side="bottom"
    onclick="document.dispatchEvent(new CustomEvent('basecoat:theme'))"
    class="btn-icon-outline size-8">
    <span class="hidden dark:block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4" /><path d="M12 2v2" /><path d="M12 20v2" /><path d="m4.93 4.93 1.41 1.41" /><path d="m17.66 17.66 1.41 1.41" /><path d="M2 12h2" /><path d="M20 12h2" /><path d="m6.34 17.66-1.41 1.41" /><path d="m19.07 4.93-1.41 1.41" /></svg></span>
    <span class="block dark:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" /></svg></span>
    </button>
    @auth
    <div id="demo-dropdown-menu" class="dropdown-menu">
        <button type="button" data-tooltip="Profile"
    data-side="bottom" data-align="end" id="demo-dropdown-menu-trigger" aria-haspopup="menu" aria-controls="demo-dropdown-menu-menu" aria-expanded="false" class="btn-icon-primary size-8"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></button>
        <div id="demo-dropdown-menu-popover" data-popover data-side="bottom" data-align="end" aria-hidden="true" class="min-w-56">
          <div role="menu" id="demo-dropdown-menu-menu" aria-labelledby="demo-dropdown-menu-trigger">
            <div role="group" aria-labelledby="account-options">
              <div role="heading" id="account-options">Account</div>
              <div role="menuitem" onclick="document.getElementById('profile-dialog').showModal()">
                Profile
                <span class="text-muted-foreground ml-auto text-xs tracking-widest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-cog-icon lucide-user-round-cog"><path d="m14.305 19.53.923-.382"/><path d="m15.228 16.852-.923-.383"/><path d="m16.852 15.228-.383-.923"/><path d="m16.852 20.772-.383.924"/><path d="m19.148 15.228.383-.923"/><path d="m19.53 21.696-.382-.924"/><path d="M2 21a8 8 0 0 1 10.434-7.62"/><path d="m20.772 16.852.924-.383"/><path d="m20.772 19.148.924.383"/><circle cx="10" cy="8" r="5"/><circle cx="18" cy="18" r="3"/></svg></span>
              </div>
            </div>
            <hr role="separator" />
            <div role="menuitem" onclick="document.getElementById('logout-dialog').showModal()">
              Logout
              <span class="text-muted-foreground ml-auto text-xs tracking-widest"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg></span>
            </div>
          </div>
        </div>
    </div>


    @endauth
</div>