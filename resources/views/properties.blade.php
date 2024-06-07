

<x-app-layout>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img
                        alt=""
                        src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?q=80&w=2792&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">Dive into a variety of properties</h2>

                    <p class="mt-4 text-gray-600">
                        Discover the perfect place that meets all your needs and preferences. Explore a wide range of properties from luxurious apartments to cozy homes, each designed to provide you with comfort and style. Whether you're looking for a vibrant city life or a peaceful suburban retreat, we have something for everyone.</p>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section w-full bg-teal-900 h-5"></div>
        <div class="container mx-auto">
            <div class="flex justify-center items-center mt-10 mb-20">

                <form action="{{ route('properties') }}" method="GET" class="w-full md:w-2/4 mx-auto flex items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                    <input
                        type="text"
                        name="search"
                        class="form-input w-full px-4 py-2 rounded-l-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="City. e.g. Negombo"
                        value="{{ request('search') }}"
                    />
                    <button type="submit" class="btn bg-teal-800 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded-r-md">
                        Search
                    </button>
                </form>

            </div>


            @if ($apartments->isEmpty())
                <div class="text-center mt-8">
                    <p class="text-red-500 font-bold">No properties found.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($apartments as $apartment)
                        <!-- Your property card code here -->
                    @endforeach
                </div>
            @endif
        </div>

        </section>



        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mr-10 ml-10">
               @forelse ($apartments as $apartment)
                            <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                                @if ($apartment->getMedia('gallery')->isNotEmpty())
                                    <img src="{{ $apartment->getMedia('gallery')->first()->getUrl() }}" alt="{{ $apartment->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                                @endif



                        <div class="p-5">
                            <a href="#">
                                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{ $apartment->title }}</h5>
                            </a>
                            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Bedrooms:{{ $apartment->beds }}</p>
                            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Bathrooms:{{ $apartment->baths }}</p>
                            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">Price: Rs.{{ $apartment->price }}</p>
                            <a href="{{ route('apartments.show', $apartment->id)}}" class="text-white bg-teal-900 hover:bg-teal-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                View Details
                                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>

                @empty
                    <p class="col-span-full text-center text-gray-700">No properties found.</p>
                @endforelse
            </div>
        </section>
    <div class="section w-full bg-teal-900 h-5"></div>




</x-app-layout>
