<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-7">
                
                {{-- //design halaman todo --}}
                <a href="{{ route('todo.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mb-4">
                    Create Todo
                </a>

                @if (session()->has('success'))
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 mt-5 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <div>
                            <span class="font-medium">Success alert !</span> {{ session('success') }}
                        </div>
                    </div>
                @endif

                <table class="table-auto my-5 w-full">
                    <tr  class="bg-orange-300">
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Todo</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>

                    @forelse ($todos as $todo)                            
                        <tr>
                            <td class="border px-4 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $todo->todos }}</td>
                            <td class="border px-4 py-2 text-center">
                                <a href="{{ route('todo.edit', $todo->id) }}">
                                    <span class="inline-flex items-center justify-center px-4 py-1 text-xs font-bold leading-none text-white bg-yellow-400 rounded-full">Edit</span>
                                </a>
                                <form action="{{ route('todo.destroy', $todo->id) }}" method="post" class="inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="tombol-hapus">
                                        <span class="inline-flex items-center justify-center px-4 py-1 text-xs font-bold leading-none text-white bg-red-600 rounded-full">Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="border px-4 py-2 text-center">Tidak ada data</td>    
                        </tr>                        
                    @endforelse

                </table>

            </div>
        </div>
    </div>
</x-app-layout>
