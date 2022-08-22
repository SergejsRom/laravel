@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Order Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('orders.update', $order) }}" method="post"> 
                        @csrf   
                        @method('PUT') 
                      
                    
                           
                                            {{-- <input type="hidden" name="country_id" value="{{$country->id}}">

                                            <select class="form-control m-1" class="form-control" name="hotel_id">
                                            @foreach ($hotels as $hotel)
                                            @if ($country->id == $hotel->country_id)
                                            <option value="{{$hotel->id}}" required>    {{$hotel->hotel_name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        
                                       
                                            <input class="form-control m-1" required type="date" name="check_in"> --}}
                                           Status <input type="text" name="status" value="1">
                                        {{-- <input type="hidden" name="user_id" value="{{Auth::user()->id}}"> 
                                        
                                            <input class="form-control m-1" required type="date" name="check_out"> --}}
                                            
                                       
                                            <input type="submit" value="Submit">

                        

                        <button type="submit" class="btn btn-primary m-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
