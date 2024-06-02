<x-app-layout>
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                    <img
                        alt=""
                        src="https://images.unsplash.com/photo-1523217582562-09d0def993a6?q=80&w=2960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl font-bold sm:text-4xl">About Us</h2>

                    <p class="mt-4 text-gray-600">
                        Welcome to Luxe properties, your trusted partner in finding the perfect property that meets your needs and aspirations. With a commitment to excellence and a passion for real estate, we aim to provide a seamless and personalized experience for buyers, sellers, and renters alike.
                    </p>

                    <a
                        href="{{ route('register') }}"
                        class="mt-8 inline-block rounded bg-black px-12 py-3 text-sm font-medium text-white transition hover:bg-gray-400 focus:outline-none focus:ring focus:ring-yellow-400"
                    >
                       Join Us
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="section w-full bg-teal-900 h-5"></div>

    <section class="relative py-32 lg:py-36 bg-white">
        <div class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
            <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8 lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">
                <h1 class="text-justify text-teal-900 font-bold">
                    Further Information
                </h1>
                <p class="mr-20 text-justify text-gray-500">
                    Contact us: +9476-2616332<br>
                    Visit Us: No.232/7 Colombo road, Negombo
                </p>
            </div>
            <div class="flex flex-1 lg:w-1/2 h-96 relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
                <div id="map" class="w-full h-full rounded-3xl"></div>
                <script>
                    // Initialize and add the map
                    function initMap() {
                        // The location of the property
                        const propertyLocation = { lat:178000294158514, lng:  79.86739083181399 }; // Replace with your property's latitude and longitude
                        // The map, centered at the property
                        const map = new google.maps.Map(document.getElementById("map"), {
                            zoom: 4,
                            center: propertyLocation,
                        });
                        // The marker, positioned at the property
                        const marker = new google.maps.Marker({
                            position: propertyLocation,
                            map: map,
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_7K12QacGfuWLfNaeUtnmbHvVjY5C4u4&callback=initMap" async defer></script>
            </div>
        </div>
    </section>




</x-app-layout>
