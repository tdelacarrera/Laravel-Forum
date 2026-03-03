<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-gray-800">
                📂 Users
            </h2>
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
                                    Email
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-100">
                            @foreach($users as $user)
                                <tr class="hover:bg-gray-50 transition duration-150">
                                    
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        #{{ $user->id }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $user->name }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-3">

                                            <a href="{{ route('admin.users.edit', $user) }}"
                                               class="px-3 py-1.5 text-sm rounded-md bg-blue-50 text-blue-600 hover:bg-blue-100 transition">
                                                Edit
                                            </a>

                                            <form action="{{ route('admin.users.destroy', $user) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this user?')">
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

                            @if($users->isEmpty())
                                <tr>
                                    <td colspan="4" class="px-6 py-8 text-center text-gray-400">
                                        No user found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

            {{-- Pagination --}}
            <div class="mt-6">
                {{ $users->links() }}
            </div>

        </div>
    </div>
</x-app-layout>