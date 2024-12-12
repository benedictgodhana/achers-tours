<x-app-layout>
    <x-slot name="header">
        Testimonial Details
    </x-slot>

    <div class="max-w-8xl mx-auto p-6">
        <div class="bg-white shadow-lg rounded-lg">
            <div class="bg-blue-50 p-6 rounded-t-lg">
                <h2 class="text-2xl font-semibold text-gray-800">Testimonial Details</h2>
            </div>

            <div class="p-6">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" value="{{ $testimonial->name }}" readonly
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" value="{{ $testimonial->email }}" readonly
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                    <textarea rows="5" readonly
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $testimonial->message }}</textarea>
                </div>
            </div>

            <div class="p-6 bg-gray-100 rounded-b-lg flex space-x-4">
                <a href="/testimonials"
                    class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition ease-in-out duration-150">
                    Back to Testimonials
                </a>
                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                    class="px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition ease-in-out duration-150">
                    Edit
                </a>
                <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 transition ease-in-out duration-150">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
