@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Menu Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('menus.update', $menu) }}" method="post">
                        @method('put')
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="menu_name" value="{{ $menu->menu_name }}">
                        Select restaurant:
                        <select class="form-control m-1" name="restaurant_id">
                            @foreach($restaurants as $restaurant)
                            <option value="{{$restaurant->id}}" @if($restaurant->id == $menu->restaurant_id) selected @endif>{{$restaurant->restaurant_name}}</option>
                            @endforeach
                        </select>
                       
                        <button type="submit" class="btn btn-primary m-2">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
