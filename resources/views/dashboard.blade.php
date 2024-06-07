<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="flex h-screen">
        <!-- Side Panel -->
        <div class="w-1/5 bg-gray-800 p-6 text-white flex flex-col ">
            <h3 class="text-4xl text-white font-semibold mt-32">Dashboard</h3>
            <ul class="flex-grow">
                <li class="mb-10 font-bold text-white mt-3"><a href="/apartments" class="text-white hover:text-gray-300">Manage Properties</a></li>
                <li class="mb-10 font-bold text-white mt-3"><a href="/user" class="text-white hover:text-gray-300">Manage Users</a></li>
                <li class="mb-10 font-bold text-white mt-3"><a href="/agents" class="text-white hover:text-gray-300">Manage Agents</a></li>
                <li class="mb-10 font-bold text-white mt-3"><a href="/statistics" class="text-white hover:text-gray-300">View Analytics</a></li>
                <li class="mb-10 font-bold text-white mt-3"><a href="/reports" class="text-white hover:text-gray-300">View Reports</a></li>
                <li class="mb-10 font-bold text-white mt-3"><a href="/settings" class="text-white hover:text-gray-300">Manage Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow bg-gray-100 p-6 overflow-y-auto pt-60">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Properties</h4>
                    <p class="text-gray-600">
                        <a href="/apartments" class="text-blue-500 hover:underline">Manage Properties</a>
                    </p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Users</h4>
                    <p class="text-gray-600">
                        <a href="/user" class="text-blue-500 hover:underline">Manage Users</a>
                    </p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Agents</h4>
                    <p class="text-gray-600">
                        <a href="/agents" class="text-blue-500 hover:underline">Manage Agents</a>
                    </p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Statistics</h4>
                    <p class="text-gray-600">
                        <a href="/statistics" class="text-blue-500 hover:underline">View Statistics</a>
                    </p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Reports</h4>
                    <p class="text-gray-600">
                        <a href="/reports" class="text-blue-500 hover:underline">View Reports</a>
                    </p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Settings</h4>
                    <p class="text-gray-600">
                        <a href="/settings" class="text-blue-500 hover:underline">Manage Settings</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
