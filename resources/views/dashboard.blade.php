<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="flex min-h-screen">
        <div class="w-1/5 bg-gray-400 p-6 text-white">
            <h3 class="text-4xl font-semibold mt-32">Dashboard</h3>
            <ul>
{{--                <li class="mb-2"><a href="{{ route('properties') }}" class="text-white hover:text-gray-200">Manage Properties</a></li>--}}
                <li class="mb-2"><a href="/user" class="text-white hover:text-gray-200">Manage Users</a></li>
            </ul>
        </div>

        <div class="flex-1 p-6 bg-gray-100 rounded-md shadow-lg mt-48">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-gray-400 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Property</h4>
{{--                    <p class="text-gray-600">--}}
{{--                        <a href="/apartments" class="text-blue-500 hover:underline">Manage Properties</a>--}}
{{--                    </p>--}}
                </div>
                <div class="bg-gray-400 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Users</h4>
                    <p class="text-gray-600">
                        <a href="/user" class="text-blue-500 hover:underline">Manage Users</a>
                    </p>
                </div>
                <div class="bg-gray-400 p-4 rounded-md shadow-md">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Agents</h4>
                    <p class="text-gray-600">
                        <a href="/agents" class="text-blue-500 hover:underline">Link</a>
                    </p>
                </div>
            </div>

            <!-- Google Analytics Data Table -->
            <!-- dashboard.blade.php -->
            <h1>Google Analytics Dashboard</h1>
            <div>
                <ul>
                    @foreach ($analyticsData as $data)
                        <li>{{ $data['date']->toDateString() }}: {{ $data['pageViews'] }} page views</li>
                    @endforeach
                </ul>
            </div>

            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
