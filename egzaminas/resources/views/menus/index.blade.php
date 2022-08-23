@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menus') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()?->role > 0)
                    <a class="btn btn-primary btn-lg" href="{{ route('menus.create') }}">ADD NEW Menu</a>
                    @endif
                    <table class="table table-striped ">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Name
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                                {{-- <tr>
                                    <td>
                                        {{$menu->restaurant->restaurant_name}}
                                    </td> --}}
                                    <td>
                                        {{$menu->menu_name}}
                                    </td>
                                    
                                    <td class="flex">
                                        <a class="btn btn-success m-1" href="{{ route('menus.show', $menu) }}">SHOW</a>
                                        @if(Auth::user()?->role > 0)
                                        <a class="btn btn-secondary m-1" href="{{ route('menus.edit', $menu) }}">EDIT</a>
                                        <form action="{{ route('menus.destroy', $menu) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Ar tikras???')">DELETE</button>
                                        @endif
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
</div>
@endsection
