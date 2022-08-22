@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All orders') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Order ID: 
                                </th>
                                <th>
                                    Hotel name:
                                </th>
                                <th>
                                    Country:
                                </th>
                                <th>
                                    Check in:
                                </th>
                                <th>
                                    Check out:
                                </th>
                                <th>
                                    Status:
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        
                                
                            
                            @foreach ($orders as $order)
                            
                                <tr>
                                    
                                    <td>
                                        {{$order->id}} 
                                    </td>
                                    <td>
                                        @foreach ($hotels as $hotel)
                                        @if ($order->hotel_id == $hotel->id)
                                        {{ $hotel->hotel_name }}
                                        @endif
                                        @endforeach
                                    </td> 
                                    <td>
                                        @foreach ($countries as $country)
                                        @if ($order->country_id == $country->id)
                                        {{ $country->country_name }}
                                        @endif
                                        @endforeach
                                    </td> 
                                   
                                    <td>
                                        {{$order->check_in}} 
                                    </td>
                                    <td>
                                        {{$order->check_out}}
                                    </td>
                                    <td>
                                        {{$order->status}}
                                    </td>
                                    <td class="flex">
                                        
                                        <a class="btn btn-secondary m-1" href="{{ route('orders.edit', $order) }}">EDIT</a>
                                        <form action="{{ route('orders.destroy', $order) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1" onclick="return confirm('NETIKRAS???')">DELETE</button>
                                        </form>
                                    </td>
                            @endforeach

                        
                                    
                                </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
