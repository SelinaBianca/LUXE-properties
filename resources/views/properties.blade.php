
    <!-- resources/views/properties.blade.php -->
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
              <div class="container mx-auto">
                  <div class="flex justify-center items-center">

                          <form action="{{ route('properties') }}" class="w-full md:w-2/4 mx-auto flex items-stretch mb-3 mr" data-aos="fade-up" data-aos-delay="200">
                              <input
                                  type="text"
                                  class="form-input w-full px-4 py-2 rounded-l-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                  placeholder="Your ZIP code or City. e.g. Negombo"
                                  value="{{ request('search') }}
                              />

                              <button type="submit" class="btn btn-primary bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-r-md">
                                  Search
                              </button>
                          </form>
                      </div>
                  </div>



          </section>

        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($apartments as $apartment)
                    <x-apartments.apartment-card :apartment="$apartment" />
                @empty
                    <p class="col-span-full text-center text-gray-700">No properties found.</p>
                @endforelse
            </div>
        </section>


</x-app-layout>
