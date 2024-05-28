

<x-app-layout>

    <h1 class="text-2xl font-bold mb-4">Edit Apartment</h1>
    <form action="{{ route('categories.update', $categories->id) }}" method="POST" class="max-w-md mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold mb-1">Title</label>
            <input type="text" id="title" name="title" value="{{ $categories->name }}" required
                   class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>


        <div class="mb-4">
            <button type="submit"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
        </div>
    </form>
</x-app-layout>
