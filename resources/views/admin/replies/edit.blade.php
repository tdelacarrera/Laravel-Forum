<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-800">
                ✏️ Edit Reply
            </h2>

            <a href="{{ route('admin.replies.index') }}"
               class="text-sm text-gray-500 hover:text-gray-700 transition">
                ← Back to Replies
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-xl rounded-2xl border border-gray-100 p-8">

                <form method="POST"
                      action="{{ route('admin.replies.update', $reply) }}"
                      class="space-y-6">
                    @csrf
                    @method('PUT')

                    {{-- Content --}}
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Content
                        </label>

                        <textarea name="content"
                                  rows="4"
                                  class="w-full rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm">{{ old('content', $reply->content) }}</textarea>

                    @error('content')
                         <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror 
                    </div>

                    {{-- Buttons --}}
                    <div class="flex justify-between items-center pt-4">

                        <span class="text-sm text-gray-400">
                            ID: #{{ $reply->id }}
                        </span>

                        <div class="flex gap-4">
                            <a href="{{ route('admin.replies.index') }}"
                               class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                                Cancel
                            </a>

                            <button type="submit"
                                    class="px-6 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium shadow transition">
                                Update Reply
                            </button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>