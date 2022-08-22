@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hotels') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-lg" href="{{ route('hotels.create') }}">ADD NEW HOTEL</a>
                    <table class="table table-striped ">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Hotel
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Duration
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td>
                                        {{$hotel->country->country_name}}
                                    </td>
                                    <td>
                                        {{$hotel->hotel_name}}
                                    </td>
                                    <td>
                                        {{$hotel->price}}
                                    </td>
                                    <td>
                                        {{$hotel->duration}}
                                    </td>
                                    <td class="flex">
                                        <a class="btn btn-success m-1" href="{{ route('hotels.show', $hotel) }}">SHOW</a>
                                        <a class="btn btn-secondary m-1" href="{{ route('hotels.edit', $hotel) }}">EDIT</a>
                                        <form action="{{ route('hotels.destroy', $hotel) }}" method="post">
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
