<x-layout>
    <a href="/products/create" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-white border border-gray-300 leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800">Create New Product</a>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach($products as $product)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{$product->name}}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$product->price}} $</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">{{$product->category->name}}</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">Created At <time datetime="2023-01-23T13:23Z">{{$product->created_at}}</time></p>
            </div>
        </li>
        <a href="/products/{{ $product->id }}" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white bg-white border border-gray-300 leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800">show</a>
        <button form="detete-form-{{ $product->id }}" onclick="return confirm('r u sure?');" class="relative inline-flex items-center px-2 mb-3 py-2 -ml-px text-sm font-medium text-white bg-white border border-gray-300 leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800">delete</button>
        <form id="detete-form-{{ $product->id }}" action="/products/{{$product->id}}" method="POST">
            @csrf
            @method('DELETE')
        </form>
        @endforeach
    </ul>
    {{$products->links()}}
</x-layout>