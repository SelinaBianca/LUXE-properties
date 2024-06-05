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

       <!-- Client Review Form -->
    <form id="review-form" class="bg-white shadow-lg rounded-lg p-6 mb-12">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-1/2 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-teal-900 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="position" class="block text-sm font-medium text-gray-700">Position</label>
                <input type="text" id="position" name="position" class="mt-1 block w-1/2 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-teal-900 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="review" class="block text-sm font-medium text-gray-700">Review</label>
                <textarea id="review" name="review" rows="4" class="mt-1 block w-1/2 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-teal-900 sm:text-sm" required></textarea>
            </div>
            <button type="submit" class="bg-teal-900 text-white px-4 py-2 rounded-md">Submit Review</button>
        </form>

        <!-- Display Client Reviews -->
        <div id="reviews" class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

        </div>

        <!-- Script to handle form submission and display reviews -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load reviews from localStorage
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.forEach(review => displayReview(review));

            // Handle form submission
            document.getElementById('review-form').addEventListener('submit', function(event) {
                event.preventDefault();

                // Get form values
                const name = document.getElementById('Name').value;
                const position = document.getElementById('Position').value;
                const review = document.getElementById('Review').value;

                // Create a new review object
                const newReview = { name, position, review };

                // Save the review to localStorage
                reviews.push(newReview);
                localStorage.setItem('reviews', JSON.stringify(reviews));

                // Display the new review
                displayReview(newReview);

                // Clear the form
                document.getElementById('review-form').reset();
            });

            // Function to display a review
            function displayReview({ name, position, review }) {
                const reviewBlock = document.createElement('div');
                reviewBlock.classList.add('bg-white', 'shadow-lg', 'rounded-lg', 'overflow-hidden', 'p-6');

                const reviewText = document.createElement('p');
                reviewText.classList.add('text-gray-700', 'mb-4');
                reviewText.textContent = "${review}";

                const reviewAuthor = document.createElement('p');
                reviewAuthor.classList.add('font-semibold', 'text-orange-600');
                reviewAuthor.textContent = - ${name},${position};

                reviewBlock.appendChild(reviewText);
                reviewBlock.appendChild(reviewAuthor);

                document.getElementById('reviews').appendChild(reviewBlock);
            }
        });
    </script>









</x-app-layout>
