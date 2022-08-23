@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Product Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('products.update', $product) }}" method="post">
                        @method('put')
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="name" value="{{ $product->name }}">
                        Select menu:
                        <select class="form-control m-1" name="restaurant_id">
                            @foreach($menus as $menu)
                            <option value="{{$menu->id}}" @if($menu->id == $product->menu_id) selected @endif>{{$menu->menu_name}}</option>
                            @endforeach
                        </select>
                        Description:
                        <input class="form-control m-1" type="text" name="description" value="{{ $product->description }}">
                        <input class="form-control m-1" type="hidden" name="photo">
                        Price:
                        <input class="form-control m-1" type="text" name="price" value="{{ $product->price }}">
                       
                        <button type="submit" class="btn btn-primary m-2">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
