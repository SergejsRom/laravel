@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW Restaurant') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('restaurants.store') }}" method="post" class="flex">
                        
                        @csrf
                        <div class="col-8">
                        Name:
                        <input class="form-control m-1" required type="text" name="restaurant_name">
                        Code:
                        <input class="form-control m-1" required type="test" name="code">
                        Address:
                        <input class="form-control m-1" required type="text" name="address">
                        <button type="submit" class="btn btn-primary m-2">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
