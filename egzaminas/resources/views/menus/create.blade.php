@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('menus.store') }}" method="post">
                        
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="menu_name">
                
                        Restaurant:
                        <select class="form-control m-1" class="form-control" name="restaurant_id">
                            @foreach($restaurants as $restaurant)
                            <option value="{{$restaurant->id}}">{{$restaurant->restaurant_name}}</option>
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
