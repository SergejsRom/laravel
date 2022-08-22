@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Hotel Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('hotels.update', $hotel) }}" method="post">
                        @method('put')
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="hotel_name" value="{{ $hotel->hotel_name }}">
                        Country:
                        <select class="form-control m-1" name="country_id">
                            @foreach($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $hotel->country_id) selected @endif>{{$country->country_name}}</option>
                            @endforeach
                        </select>
                        Duration:
                        <input class="form-control m-1" type="text" name="duration" value="{{$hotel->duration}}">
                        Price:
                        <input class="form-control m-1" type="text" name="price" value="{{ $hotel->price }}">
                        <button type="submit" class="btn btn-primary m-2">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
