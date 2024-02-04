<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="mt-1 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-3xl p-6 bg-white rounded-md shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4"> Dashboard</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1: House Categories -->
                <div class="bg-blue-200 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Property </h4>
                    <p class="text-gray-600">
                        <a href="/housecategories" class="text-blue-500 hover:underline">Manage Properties</a>
                </div>

                <div class="bg-blue-200 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2"></h4>
                    <p class="text-gray-600">
                        <a href="/housecategories" class="text-blue-500 hover:underline"></a>
                </div>

                <div class="bg-blue-200 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2"></h4>
                    <p class="text-gray-600">
                        <a href="/housecategories" class="text-blue-500 hover:underline"></a>
                </div>

                <div class="bg-blue-200 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2"></h4>
                    <p class="text-gray-600">
                        <a href="/housecategories" class="text-blue-500 hover:underline"></a>
                </div>

                

                <!-- Add more cards for different sections as needed -->

            </div>
        </div>
    </div>
</x-app-layout>

