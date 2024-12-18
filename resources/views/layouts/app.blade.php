<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="true" data-theme-mode="light">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Style --}}
  @vite('resources/css/app.css')
</head>

<body
  class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#fefefe] [--tw-page-bg-dark:var(--tw-coal-500)] demo1 sidebar-fixed header-fixed bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
  style="">

  <!-- Main -->
  <div class="flex grow">
    <!-- Sidebar -->
    @include('layouts.partials.sidebar')
    <!-- End of Sidebar -->
    <!-- Wrapper -->
    <div class="wrapper flex grow flex-col">
      <!-- Header -->
      @include('layouts.partials.header')
      <!-- End of Header -->
      <!-- Content -->
      <main class="grow content pt-5" id="content" role="content">
        <!-- Container -->
        <div class="container-fixed" id="content_container">
        </div>
        <!-- End of Container -->
        <!-- Container -->
        <div class="container-fixed">
         @yield('content') 
        </div>
        <!-- End of Container -->
        <!-- Container -->

      </main>
      <!-- End of Content -->
      <!-- Footer -->
    @include('layouts.partials.footer')
      <!-- End of Footer -->
    </div>
    <!-- End of Wrapper -->
  </div>

  @vite('resources/js/app.js')
</body>

</html>