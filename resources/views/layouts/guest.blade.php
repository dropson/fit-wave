<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="true" data-theme-mode="light">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Style --}}
  @vite('resources/css/app.css')
</head>

<body class="antialiased flex flex-col h-full text-base text-gray-700 dark:bg-coal-500">


    <div class="menu menu-default bg-light flex flex-wrap justify-center gap-2.5 border rounded-lg py-2"
      data-sticky="true" data-sticky-activate="#release" data-sticky-class="fixed z-10 shadow-lg"
      data-sticky-name="basic" data-sticky-offset="100" data-sticky-release="#variants" data-sticky-start="auto"
      data-sticky-top="100">
      <div class="menu-item @if( request()->route()->named('home')) active @endif ">
        <a class="menu-link" href="{{ route('home') }}">
          <span class="menu-title">
            Головна
          </span>
        </a>
      </div>
      <div class="menu-item @if( request()->route()->named('register')) active @endif ">
        <a class="menu-link" href="{{ route('register') }}">
          <span class="menu-title">
            Регистрація
          </span>
        </a>
      </div>
    </div>


  <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
    <div class="card max-w-[370px] w-full">
      @yield('content')
    </div>
  </div>

  @vite('resources/js/app.js')

</body>

</html>