@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW HOTEL') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('hotels.store') }}" method="post">
                        
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="hotel_name">
                        Price:
                        <input class="form-control m-1" type="text" name="price">
                        Country:
                        <select class="form-control m-1" class="form-control" name="country_id">
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                        </select>
                        Duration:
                        <input class="form-control m-1" type="text" name="duration">
                        <button type="submit" class="btn btn-primary m-2">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
