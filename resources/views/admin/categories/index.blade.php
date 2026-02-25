<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800">
                📂 Categories
            </h2>

            <a href="{{ route('admin.categories.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow transition duration-200">
                + Create Category
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Success Message --}}
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Card --}}
            <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-gray-100">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach($categories as $category)
                                <tr class="hover:bg-gray-50 transition duration-150">
                                    
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        #{{ $category->id }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $category->name }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ Str::limit($category->description, 255) }}
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-3">

                                            <a href="{{ route('admin.categories.edit', $category) }}"
                                               class="px-3 py-1.5 text-sm rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100 transition">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.categories.destroy', $category) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this category?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="px-3 py-1.5 text-sm rounded-md bg-red-50 text-red-600 hover:bg-red-100 transition">
                                                    Delete
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                            @if($categories->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-gray-400">
                                        No categories found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $categories->links() }}
            </div>

        </div>
    </div>
</x-app-layout>