<x-app-layout>
    <body class="bg-gray-100">

    <!-- Navbar -->
    <div class="image-gallery-wrapper mt-36 ml-80">
        <div class="image-gallery">
            @foreach($apartment->getMedia('gallery') as $image)
                <img src="{{ $image->getUrl() }}" alt="{{ $image->name }}" class="rounded-md shadow-sm">
            @endforeach
        </div>
    </div>
    <style>
        .image-gallery-wrapper {
            width: 100%;
            max-width: 800px; /* Adjust this width as needed */
            overflow-x: scroll;
            overflow-y: hidden;
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
        <div class="bg-gray-200 p-6 rounded-lg shadow-md">
            <!-- Apartment Title and Agent Info -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-3xl font-bold">Welcome to {{ $apartment->title }}</h2>
                    <div class="text-2xl text-black">Rs.{{ $apartment->price }} Onwards</div>
                    <div class="text-gray-600 text-xl">{{ $apartment->location }}</div>
                </div>
                <div class="flex flex-col space-y-2">
                    <a href="#"
                       class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                        {{ $apartment->agent }}
                    </a>
                    <a href="mailto:{{ $apartment->contact_email }}"
                       class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                        E-mail Agent
                    </a>
                    <a href="tel:{{ $apartment->contact_phone }}"
                       class="inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-teal-900 hover:bg-blue-700">
                        Contact Agent
                    </a>
                </div>
            </div>

            <!-- Similar Properties Link -->
            <div class="bg-gray-50 p-4 rounded-md mb-6">



            <!-- Apartment Details -->
            <div class="grid grid-cols-1 sm:grid-cols-2  m">
                <div>
                    <div class="text-gray-950 font-bold ">No. of bedrooms: {{ $apartment->beds }}</div>
                </div>
                <div>
                    <div class="text-gray-950 font-bold ">No. of bathrooms: {{ $apartment->baths }}</div>
                </div>
            </div>

            </div>

            <!-- Apartment Description -->
            <div class="mb-6">

                <p class="text-gray-600 mt-2">{{ $apartment->description }}</p>
                <h2 class="text-lg font-semibold text-gray-900 mt-4">For further support</h2>
                <p class="text-gray-600">Please contact the agent through e-mail or telephone.</p>
            </div>
        </div>

        <div class="bg-gray-50 p-4 rounded-md mb-6">
            <div class="text-gray-600">Back to properties</div>
            <a href="{{ route('properties') }}" class="text-blue-600 underline">property listings</a>
        </div>

    </div>



    <!-- Divider -->
    <div class="w-full bg-teal-900 h-6 mt-12"></div>
    </body>
</x-app-layout>
