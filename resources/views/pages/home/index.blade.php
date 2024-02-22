<x-app-layout>
    @section('title', 'Home')

    <h1
        class="mb-16 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Page Home</h1>

    <div class="mx-auto max-w-2xl lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-x-3 gap-y-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-9">
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-1.png') }}"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Purple  Pink</h3>
            </a>
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-2.png') }}"
                        alt="Olive drab green insulated bottle with flared screw lid and flat top."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Choco Avocado</h3>
            </a>
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-3.png') }}"
                        alt="Person using a pen to cross a task off a productivity paper card."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Choco Redvelvet</h3>
            </a>
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-4.png') }}"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Choco Taro</h3>
            </a>
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-5.png') }}"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Choco Bubblegum</h3>
            </a>
            <a href="#" class="group">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/produk-6.png') }}"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                </div>
                <h3 class="mt-4 text-sm text-gray-700">Choco Durian</h3>
            </a>
        </div>
    </div>

</x-app-layout>
