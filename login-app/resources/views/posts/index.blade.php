<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('posts.create') }} " class="btn btn-success ml-4">ADD NEW POST</a>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Category</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td><a href="{{ route('posts.edit', $post) }}" class="btn btn-info m-2">EDIT</a>
                                    <form action=" {{route('posts.destroy', $post)}} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Ar tikras???')" >DELETE</button>
                                    <td><a href="{{ route('posts.show', $post) }}" class="btn btn-info m-2">show</a>

                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
