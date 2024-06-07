<x-app-layout>
    <body class="bg-gray-100">

    <!-- Navbar -->
    <div class="image-gallery-wrapper mt-36">
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
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

    <!-- Main content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex justify-between items-center">
                <div>
                    <div class="text-3xl text-black font-bold">{{ $apartment->price }} Onwards</div>
                    <div class="text-2xl text-black">{{ $apartment->title }}</div>
                    <div class="text-gray-600 text-xl">{{ $apartment->location }}</div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="#"
                       class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                        {{ $apartment->agent}}
                    </a>
                    <a href="mailto:{{ $apartment->contact_email }}"
                       class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                        E-mail Agent
                    </a>
                    <a href="tel:{{ $apartment->contact_phone }}"
                       class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-gray-50">
                        Contact Agent
                    </a>
                </div>
            </div>

            <div class="mt-4">
                <div class="flex items-center justify-between bg-gray-50 p-4 rounded-md">
                    <div>
                        <div class="text-gray-600">View similar properties</div>
                        <a href="{{ route('properties') }}" class="text-blue-600 underline">Other properties in {{ $apartment->location }}</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 grid grid-cols-3 gap-4">
                <div>
                    <div class="text-gray-950 font-bold text-xl">No. of bedrooms:{{ $apartment->beds }}</div>

                </div>
                <div>
                    <div class="text-gray-950 font-bold text-xl">No. of bathrooms:{{ $apartment->baths }}</div>

                </div>
            </div>

            <div class="mt-6">
                <h2 class="text-3xl font-bold">Welcome to {{ $apartment->title }}</h2>
                <p class="text-gray-600 mt-2 ">{{ $apartment->description }}</p>
                <h2 class="text-lg font-semibold text-gray-900">For further support</h2>
                <p class="text-gray-600">Please contact the agent through e-mail or telephone.</p>

            </div>
        </div>
    </div>


    <div class="section w-full bg-teal-900 h-5"></div>


    </body>
</x-app-layout>
