<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(View::hasSection('title'))
            @yield('title') | BLOCK v1.0.2
        @else
            @yield('title', 'BLOCK v1.0.2')
        @endif
    </title>
    <link rel="icon" type="image/png" href="{{ asset('svg/favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden">
    <main>
        <content>
            <div class="p-4">
                @yield('content')
            </div>
        </content>
    </main>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
  (() => {
    try {
      const stored = localStorage.getItem('themeMode');
      if (stored ? stored === 'dark'
                  : matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
      }
    } catch (_) {}

    const apply = dark => {
      document.documentElement.classList.toggle('dark', dark);
      try { localStorage.setItem('themeMode', dark ? 'dark' : 'light'); } catch (_) {}
    };

    document.addEventListener('basecoat:theme', (event) => {
      const mode = event.detail?.mode;
      apply(mode === 'dark' ? true
            : mode === 'light' ? false
            : !document.documentElement.classList.contains('dark'));
    });
  })();
</script>

</body>
</html>