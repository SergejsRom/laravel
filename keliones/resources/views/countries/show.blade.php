@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Countries') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary btn-lg" href="{{ route('countries.create') }}">ADD NEW DIRECTION</a>
                    <h2 class="m-2 green fw-bolder">Choose your hotel in <span class="red">{{$country->country_name}}</span></h2>

                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Season start
                                </th> 
                                <th>
                                    Season end
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>
                                        {{$country->season_time}}
                                    </td>
                                    <td>
                                        {{$country->season_end}}
                                    </td>
                                    <td class="flex">
                                        
                                        <a class="btn btn-secondary m-1" href="{{ route('countries.edit', $country) }}">EDIT</a>
                                        <form action="{{ route('countries.destroy', $country) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('NETIKRAS???')">DELETE</button>
                                        </form>
                                        
                                    </td>
                                    <form action="{{route('orders.store')}}" method="post"> 
                                        @csrf    
                                        @method('POST')          
                                        <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>
                                                        Hotels
                                                    </th> 
                                                    <th>
                                                        Choose check in
                                                    </th> 
                                                    <th>
                                                        Choose check out
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    
                                                    <tr>
                                                        <td class="grid">
                                                            
                                                            @foreach ($hotels as $hotel)
                                                            @if ($country->id == $hotel->country_id)
                                                            <label><input type="radio" name="hotel_id" value="{{$hotel->hotel_id}}">    {{$hotel->hotel_name}}</label>
                                                            @endif
                                                            @endforeach
                                                        
                                                        </td>
                                                        <td>
                                                            <input class="form-control m-1" required type="date" name="check_in">
                                                        </td>
                                                        <td>
                                                            <input class="form-control m-1" required type="date" name="check_out">
                                                            <button type="submit" class="btn btn-primary m-2">Order</button>
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
