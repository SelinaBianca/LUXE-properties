<x-app-layout>

<h1 class="text-2xl font-bold mb-4">Create Apartment</h1>
<form action="{{ route('apartments.store') }}" method="POST" class="max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-semibold mb-1">Title</label>
        <input type="text" id="title" name="title" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="description" class="block text-sm font-semibold mb-1">Description</label>
        <textarea id="description" name="description" required
                  class="form-textarea w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"></textarea>
    </div>
    <div class="mb-4">
        <label for="price" class="block text-sm font-semibold mb-1">Price</label>
        <input type="number" id="price" name="price" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="category" class="block text-sm font-semibold mb-1">Category</label>
        <input type="text" id="category" name="category"
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="location" class="block text-sm font-semibold mb-1">Location</label>
        <input type="text" id="location" name="location" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="agent" class="block text-sm font-semibold mb-1">Agent</label>
        <input type="text" id="agent" name="agent" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="contact_email" class="block text-sm font-semibold mb-1">Contact Email</label>
        <input type="email" id="contact_email" name="contact_email" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="contact_phone" class="block text-sm font-semibold mb-1">Contact Phone</label>
        <input type="text" id="contact_phone" name="contact_phone" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="published_at" class="block text-sm font-semibold mb-1">Published At</label>
        <input type="date" id="published_at" name="published_at"
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="slug" class="block text-sm font-semibold mb-1">Slug</label>
        <input type="text" id="slug" name="slug" required
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="featured" class="block text-sm font-semibold mb-1">Featured</label>
        <input type="checkbox" id="featured" name="featured"
               class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded">
    </div>
    <div class="mb-4">
        <label for="beds" class="block text-sm font-semibold mb-1">Beds</label>
        <input type="number" id="beds" name="beds"
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>
    <div class="mb-4">
        <label for="baths" class="block text-sm font-semibold mb-1">Baths</label>
        <input type="number" id="baths" name="baths"
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">

    </div>

    <div class="mb-4">
        <label for="images" class="block text-sm font-semibold mb-1">Images</label>
        <input type="file" id="images" name="images[]" multiple
               class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <button type="submit"
                class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create</button>
    </div>
</form>

</x-app-layout>
