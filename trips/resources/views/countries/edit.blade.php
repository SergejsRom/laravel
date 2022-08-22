@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Country Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <form action="{{ route('countries.update', $country) }}" method="post">
                        @method('put')
                        @csrf
                        <div class="col-8">
                            <span>Name:</span>
                            <input class="form-control m-1" required type="text" name="country_name" value="{{ $country->country_name }}">
                            <input class="form-control m-1" required type="date" name="season_time" value="{{ $country->season_time }}">
                            <input class="form-control m-1" required type="date" name="season_end" value="{{ $country->season_end }}">
                            <button type="submit" class="btn btn-primary m-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
