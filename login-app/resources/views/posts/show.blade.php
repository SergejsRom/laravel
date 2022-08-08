<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NEW POST') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div >
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Category</th>
                        </thead>
                        <tbody>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->post_text }}</td>
                                    <td><a href="{{ route('posts.edit', $post) }}" class="btn btn-info m-2">EDIT</a>
                                    <form action=" {{route('posts.destroy', $post)}} " method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Ar tikras???')" >DELETE</button>
                                    </form>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
