<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-800">
                ➕ Create Category
            </h2>

            <a href="{{ route('admin.categories.index') }}"
               class="text-sm text-gray-500 hover:text-gray-700 transition">
                ← Back to Categories
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 p-8">

                <form method="POST" action="{{ route('admin.categories.store') }}" class="space-y-6">
                    @csrf

                    {{-- Name --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Category Name
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name') }}"
                               placeholder="Enter category name"
                               class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm @error('name') border-red-500 @enderror">

                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Description
                        </label>

                        <textarea name="description"
                                  rows="4"
                                  placeholder="Write a short description..."
                                  class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm">{{ old('description') }}</textarea>
                    </div>

                    {{-- Buttons --}}
                    <div class="flex justify-end gap-4 pt-4">
                        <a href="{{ route('admin.categories.index') }}"
                           class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                            Cancel
                        </a>

                        <button type="submit"
                                class="px-6 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow transition">
                            Save Category
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>