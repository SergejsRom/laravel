@extends('countries.show')


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
