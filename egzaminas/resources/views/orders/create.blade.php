<form action="{{ route('orders.store') }}" method="post"> 
    @csrf    
  

       
                        {{-- <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}"> --}}
                       <div class="m-2"> Select product: </div>
                        <select class="form-control m-1" class="form-control" name="product_id">
                        @foreach ($products as $product)
                        @if ($product->menu_id == $menu->id)
                        <option value="{{$product->id}}" required> {{$product->name}}</option>
                        @endif
                        @endforeach
                    </select>
                
                        <input type="hidden" name="status" value="new">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
         <input type="submit" value="Submit">

    

    <button type="submit" class="btn btn-primary m-2">Order</button>
</form>