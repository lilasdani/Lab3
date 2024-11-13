<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @vite(['resources/scss/app.scss']) --}}
    <title>@yield('title')</title>
</head>
<body>
    
{{-- <x-aside /> --}}

 <div class="p-8 sm:ml-64">
  <h1 class="text-3xl sm:md:text-4xl font-bold">@yield('title')</h1>
 </div>
    <div class="mt-8">
        @yield('content')
    </div>
 
    </main>

{{-- <x-footer /> --}}

</body>
</html>