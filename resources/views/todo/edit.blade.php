<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-7">
                
                {{-- @dd($todo) --}}

                {{-- //design halaman todo --}}
                <a href="{{ route('todo.index') }}" class="px-4 w-full py-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline">
                    Back
                </a>

                <form action="{{ route('todo.update', $todo->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mt-5">
                        <label for="default-input" class="block mb-3 text-sm font-medium text-gray-900 dark:text-gray-300 font-bold">Masukan data Todo</label>
                        <input type="text" name="todos" id="default-input" value="{{ $todo->todos }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6 mt-4 text-center">
                        <button class="px-12 py-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700 focus:outline-none focus:shadow-outline" type="submit">
                            Update
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
