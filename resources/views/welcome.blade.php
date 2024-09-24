<!doctype html>
<html>
<head>
    <title>Watch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<x-layout></x-layout>


<section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
    <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
        <div class="content-center justify-self-start md:col-span-7 md:text-start">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">Timeless Elegance, Crafted to Perfection</h1>
            <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">Discover Our Exclusive Collection of Luxury Watches From Top Brands Like Rolex, Michael Kors, Citizen Eco-Drive, and More</p>
            <a href="#" class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Explore Now</a>
        </div>
        <div class="hidden md:col-span-5 md:mt-0 md:flex">


            <div id="gallery" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    @foreach($products as $product)
                        @if ($product->images->isNotEmpty())
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ Storage::url($product->images->first()->image_url) }}" alt="{{ $product->name }}" class="object-cover w-full">
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </div>
    <div class="mx-auto grid max-w-screen-xl grid-cols-4 gap-10 text-gray-500 dark:text-gray-400 sm:grid-cols-4 sm:gap-8 lg:grid-cols-4 px-4">
        <div class="flex items-center justify-center">
            <img src="{{asset('storage/rolex-logo.svg')}}" alt="" class="w-24">
        </div>

        <div class="flex items-center justify-center">
            <img src="{{asset('storage/bulova-1.svg')}}" alt="" class="w-24">
        </div>

        <div class="flex items-center justify-center">
            <img src="{{asset('storage/citizen-logo-1.svg')}}" alt="" class="w-24">
        </div>

        <div class="flex items-center justify-center">
            <img src="{{asset('storage/Michael_Kors_(brand)_logo.svg')}}" alt="" class="w-24">
        </div>
    </div>


</section>

<section id="product-lines" class="py-8 bg-black text-white">
    <h2 class="text-3xl font-bold text-center mb-8">Category Watch</h2>
    <div class="flex justify-center space-x-6 overflow-x-auto">
        @foreach($categories as $category)
            <div class="product-line bg-gray-800 shadow-lg rounded-lg p-6 text-center w-72 transition-transform transform hover:scale-105">
                <h3 class="text-2xl font-semibold text-yellow-500 mb-2">{{ $category->name }}</h3>
                <div class="product-preview mb-4">
                    <p class="mt-2">{{ $category->description }}</p>
                </div>
                <a href="/products?category={{ $category->name }}" class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-400 transition inline-block">Show product</a>
            </div>
        @endforeach
    </div>
</section>

{{--lastest product--}}
<section id="latest-products" class="py-8 bg-black text-white">
    <h2 class="text-3xl font-bold text-center mb-8">New Arrival</h2>
    <div class="flex justify-center flex-wrap gap-4">
        @foreach($latestProducts as $product)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg object-cover w-full h-auto" src="{{@asset('storage/'.$product->images->first()->image_url)}}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->product_name}}</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</section>
<x-footer></x-footer>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
