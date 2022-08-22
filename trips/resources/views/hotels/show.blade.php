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
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Hotel name: 
                                </th>
                                <th>
                                    Country:
                                </th>
                                <th>
                                    Duration:
                                </th>
                                <th>
                                    Price:
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                
                                <tr>
                                    <td>
                                        {{$hotel->hotel_name}}
                                    </td> 
                                    <td>
                                        {{$hotel->country->country_name}} 
                                    </td>
                                    <td>
                                        {{$hotel->duration}} 
                                    </td>
                                    <td>
                                        {{$hotel->price}}
                                    </td>
                                    
                                   
                                    <td class="flex">
                                        
                                        <a class="btn btn-secondary m-1" href="{{ route('hotels.edit', $hotel) }}">EDIT</a>
                                        <form action="{{ route('hotels.destroy', $hotel) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('NETIKRAS???')">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
