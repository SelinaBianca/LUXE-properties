<x-app-layout>
    <div class="container mx-auto mt-24">
        <div class="px-4 sm:px-6 lg:px-8 bg-white pt-4">

            <!-- Success message if applicable -->
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4 mb-5" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 5.652a.5.5 0 010 .707L9.707 10l4.641 4.641a.5.5 0 11-.707.707L9 10.707l-4.641 4.641a.5.5 0 11-.707-.707L8.293 10 3.652 5.359a.5.5 0 01.707-.707L9 9.293l4.641-4.641a.5.5 0 01.707 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </span>
                </div>
            @endif

            <!-- Title and Create button -->
            <div class="sm:flex sm:items-center  mb-4">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Properties</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all properties with edit and delete options.</p>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <a href="{{ route('apartments.create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Create New Property
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Agent</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Email</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Phone</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published At</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Featured</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Beds</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Baths</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>

                        <th scope="col" class="relative px-6 py-3">

                            <span class="sr-only">Edit</span>
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($apartments as $apartment)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->category }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->location }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->agent }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->contact_email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->contact_phone }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->published_at }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->slug }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->featured ? 'Yes' : 'No' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->beds }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $apartment->baths }}</td>
                            <td class="">
                                @foreach ($apartment->getMedia('gallery') as $media)
                                    <img src="{{ $media->getUrl() }}" alt="{{ $apartment->title }}" class="w-16 h-16 object-cover">

                                @endforeach
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('apartments.edit', $apartment) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form action="{{ route('apartments.destroy', $apartment) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
