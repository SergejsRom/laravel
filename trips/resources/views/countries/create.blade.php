@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW DIRECTION') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('countries.store') }}" method="post" class="flex">
                        
                        @csrf
                        <div class="col-8">
                        Name:
                        <input class="form-control m-1" required type="text" name="country_name">
                        Season start:
                        <input class="form-control m-1" required type="date" name="season_time">
                        Season end:
                        <input class="form-control m-1" required type="date" name="season_end">
                        <button type="submit" class="btn btn-primary m-2">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
