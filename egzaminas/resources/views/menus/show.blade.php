@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-lg" href="{{ route('menus.create') }}">ADD NEW Menu</a>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Menu name: 
                                </th>
                                

                                
                            </tr>
                        </thead>
                        <tbody>
                
                                <tr>
                                    <td>
                                        {{$menu->menu_name}}
                                    </td> 
                                    {{-- @foreach ($products as $product)
                                    @if ($menu->id == $product->menu_id)
                                    <ul>
                                   <li> <a class="btn btn-primary btn-lg" href="{{ route('orders.create', $product)}}">Go to see: {{$product->name}}</a></li>
                                </ul>   
                                    @endif
                                    @endforeach --}}
                                    
                                   
                                    <td class="flex">
                                        
                                        <a class="btn btn-secondary m-1" href="{{ route('menus.edit', $menu) }}">EDIT</a>
                                        <form action="{{ route('menus.destroy', $menu) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('NETIKRAS???')">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                           
                        </tbody>
                    </table>

                </div>
                @include('orders.create')
            </div>
        </div>
    </div>
</div>
@endsection
