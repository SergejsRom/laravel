@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-lg" href="{{ route('products.create') }}">ADD NEW Product</a>
                    <table class="table table-striped ">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Name
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                
                                    <td>
                                        {{$product->name}}
                                    </td>
                                    
                                    <td class="flex">
                                        <a class="btn btn-success m-1" href="{{ route('products.show', $product) }}">SHOW</a>
                                        <a class="btn btn-secondary m-1" href="{{ route('products.edit', $product) }}">EDIT</a>
                                        <form action="{{ route('products.destroy', $product) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('Ar tikras???')">DELETE</button>
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
