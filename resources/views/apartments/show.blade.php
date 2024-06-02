{{--<x-app-layout>--}}
{{--    <section class="py-12 sm:py-16">--}}
{{--        <div class="container mx-auto px-4">--}}
{{--            <nav class="flex mb-4">--}}
{{--                <ol role="list" class="flex items-center">--}}
{{--                    <li class="text-left">--}}
{{--                        <div class="-m-1">--}}
{{--                            <a href="{{ route('apartments.index') }}" class="rounded-md p-1 text-sm font-medium text-gray-600 hover:text-gray-800 focus:text-gray-900 focus:shadow">Back to Listings</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ol>--}}
{{--            </nav>--}}

{{--            <div class="grid grid-cols-1 gap-12 lg:grid-cols-5 lg:gap-16">--}}
{{--                <div class="lg:col-span-3 lg:row-end-1">--}}
{{--                    <div class="lg:flex lg:items-start">--}}
{{--                        <div class="lg:order-2 lg:ml-5">--}}
{{--                            <div class="max-w-xl overflow-hidden rounded-lg shadow-md">--}}
{{--                                <div class="image-gallery">--}}
{{--                                    @foreach($apartment->getMedia('gallery') as $image)--}}
{{--                                        <img src="{{ $image->getUrl() }}" alt="{{ $image->name }}" class="rounded-md shadow-sm">--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                                <style>--}}
{{--                                    .image-gallery {--}}
{{--                                        display: flex;--}}
{{--                                        flex-wrap: nowrap;--}}
{{--                                        overflow-x: auto;--}}
{{--                                        gap: 10px;--}}
{{--                                    }--}}
{{--                                    .image-gallery img {--}}
{{--                                        max-width: 100%;--}}
{{--                                        height: 450px;--}}
{{--                                    }--}}
{{--                                </style>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="lg:col-span-2 lg:row-span-2 lg:row-end-2">--}}
{{--                    <div class="bg-gray-100 mt-24 p-6 rounded-lg shadow-md">--}}
{{--                        <p class="text-lg mt-10 font-medium text-gray-700">Agent: {{ $apartment->agent }}</p>--}}
{{--                        <p class="text-lg mt-10 font-medium text-gray-700">Email: {{ $apartment->contact_email }}</p>--}}
{{--                        <p class="text-lg mt-10 font-medium text-gray-700">Phone: {{ $apartment->contact_phone }}</p>--}}
{{--                        <div class="mt-10">--}}
{{--                            <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-900 px-12 py-4 text-center text-lg font-bold text-white transition duration-200 ease-in-out focus:shadow hover:bg-gray-800">--}}
{{--                                Contact Agent--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="lg:col-span-3">--}}
{{--                    <div class="border-b border-gray-300 pb-4">--}}
{{--                        <h1 class="text-3xl font-bold text-gray-900">{{ $apartment->title }}</h1>--}}
{{--                        <nav class="flex gap-4 mt-4">--}}
{{--                            <a href="#" title="Description" class="border-b-2 border-gray-900 py-2 text-sm font-medium text-gray-900 hover:border-gray-400 hover:text-gray-800">Description</a>--}}
{{--                        </nav>--}}

{{--                        <div class="mt-3">--}}
{{--                            <span class="text-3xl font-bold text-gray-900">${{ $apartment->price }}</span>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="mt-6 space-y-4">--}}
{{--                        <p class="text-sm text-gray-600">{{ $apartment->description }}</p>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</x-app-layout>--}}


<x-app-layout>
<body class="bg-gray-100">

<!-- Navbar --><div class="image-gallery-wrapper  mt-28">
    <div class="image-gallery w-full">
        @foreach($apartment->getMedia('gallery') as $image)
            <img src="{{ $image->getUrl() }}" alt="{{ $image->name }}" class="rounded-md shadow-sm">
        @endforeach
    </div>
</div>
<style>
    .image-gallery-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .image-gallery {
        display: flex;
        flex-wrap: nowrap;
        gap: 10px;
    }
    .image-gallery img {
        max-width: 100%;
        height: 450px;
        object-fit: cover;
    }
</style>



<!-- Main content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center">
            <div>

                <div class="text-3xl text-black font-bold">{{ $apartment->price }} Onwards</div>
                <div class="text-xl text-black">{{ $apartment->title }}</div>
                <div class="text-gray-600">{{ $apartment->location }}</div>


            </div>
            <div class="flex flex-col space-y-2">
                <a href="{{ $apartment->contact_email }}"
                   class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                    E-mail Developer
                </a>
                <a href="{{ $apartment->contact_phone }}"
                   class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-gray-50">
                    Contact Developer
                </a>
            </div>
        </div>

        <div class="mt-4">
            <div class="flex items-center justify-between bg-gray-50 p-4 rounded-md">
                <div>

                    <div class="text-gray-600">View similar properties</div>
                    <a href="{{ route('properties') }}" class="text-blue-600 underline">Other properties in  {{ $apartment->location }}</a>

                </div>

            </div>
        </div>

        <div class="mt-4 grid grid-cols-3 gap-4">

            <div>
                <div class="text-gray-600">No. of bedrooms</div>
                <div class="font-semibold">{{ $apartment->beds }}</div>
            </div>
            <div>
                <div class="text-gray-600">No. of bathrooms</div>
                <div class="font-semibold">{{ $apartment->baths }}</div>
            </div>
        </div>



        <div class="mt-6">
            <h2 class="text-xl font-bold">Welcome to {{ $apartment->title }}</h2>
            <p class="text-gray-600 mt-2">{{ $apartment->description }}</p>
        </div>
    </div>
</div>




<div class="section w-full bg-teal-900 h-5"></div>

</body>

</x-app-layout>
