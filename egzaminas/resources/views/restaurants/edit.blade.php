@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Restaurant Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <form action="{{ route('restaurants.update', $restaurant) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="col-8">
                            <span>Name:</span>
                            <input class="form-control m-1" required type="text" name="restaurant_name" value="{{ $restaurant->restaurant_name }}">
                            <input class="form-control m-1" required type="text" name="code" value="{{ $restaurant->code }}">
                            <input class="form-control m-1" required type="text" name="address" value="{{ $restaurant->address }}">
                            <button type="submit" class="btn btn-primary m-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
