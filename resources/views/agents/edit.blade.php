<x-app-layout>

    <h1 class="text-2xl font-bold mb-4">Edit Agent</h1>
    <form action="{{ route('agents.update', $agent->id) }}" method="POST" class="max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-semibold mb-1">Name</label>
            <input type="text" id="name" name="name" value="{{ $agent->name }}" required
                   class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="contact_email" class="block text-sm font-semibold mb-1">Contact Email</label>
            <input type="email" id="contact_email" name="contact_email" value="{{ $agent->contact_email }}" required
                   class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="contact_phone" class="block text-sm font-semibold mb-1">Contact Phone</label>
            <input type="text" id="contact_phone" name="contact_phone" value="{{ $agent->contact_phone }}" required
                   class="form-input w-full rounded border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <button type="submit"
                    class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
            </button>
        </div>
    </form>
</x-app-layout>

