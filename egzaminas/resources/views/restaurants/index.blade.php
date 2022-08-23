@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Restaurants') }}</div>
                @if(session()->has('success_message'))
                <p class="alert alert-success"> {{ session()->get('success_message') }}</p>
                @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-lg" href="{{ route('restaurants.create') }}">ADD NEW Restaurant</a>
                    <h2 class="m-2 green fw-bolder">Choose your restaurant</h2>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Restaurant
                                </th>
                                <th>
                                    Code
                                </th>
                                <th>
                                    Address
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($restaurants as $restaurant)
                                <tr>
                                    <td>
                                        {{$restaurant->restaurant_name}}
                                    </td>
                                    <td>
                                        {{$restaurant->code}}
                                    </td>
                                    <td>
                                        {{$restaurant->address}}
                                    </td>
                                    <td class="flex">
                                        <a class="btn btn-success m-1" href="{{ route('restaurants.show', $restaurant) }}">CHOOSE</a>
                                        <a class="btn btn-secondary m-1" href="{{ route('restaurants.edit', $restaurant) }}">EDIT</a>
                                        <form action="{{ route('restaurants.destroy', $restaurant) }}" method="post">
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
