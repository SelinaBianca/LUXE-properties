<x-app-layout>
    <div class="container mx-auto py-40">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2 text-center">Pay with PayPal</h2>
                @if (session('error'))
                    <div class="bg-red-500 text-white p-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="bg-green-500 text-white p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('paypal.process_transaction') }}" method="POST">
                    @csrf
                    <button type="submit" class="mt-4 mx-auto bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
                        Pay with PayPal
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

