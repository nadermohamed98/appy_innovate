<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <x-nav-link href="/" aria-current="{{ request()->is('/') ? 'page' : 'false' ; }}" active="{{ request()->is('/') ? 'true' : 'false' ; }}">Home</x-nav-link>
                                <x-nav-link href="/products" aria-current="{{ request()->is('products') ? 'page' : 'false' ; }}" active="{{ request()->is('products') ? 'true' : 'false' ; }}">All Products</x-nav-link>
                                <x-nav-link href="/categories" aria-current="{{ request()->is('categories') ? 'page' : 'false' ; }}" active="{{ request()->is('categories') ? 'true' : 'false' ; }}">All Categories</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>