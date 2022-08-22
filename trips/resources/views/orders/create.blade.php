                                    <form action="{{ route('orders.store') }}" method="post"> 
                                        @csrf    
                                      
                                    
                                           
                                                            <input type="hidden" name="country_id" value="{{$country->id}}">

                                                            <select class="form-control m-1" class="form-control" name="hotel_id">
                                                            @foreach ($hotels as $hotel)
                                                            @if ($country->id == $hotel->country_id)
                                                            <option value="{{$hotel->id}}" required>    {{$hotel->hotel_name}}</option>
                                                            @endif
                                                            @endforeach
                                                        </select>
                                                        
                                                       
                                                            <input class="form-control m-1" required type="date" name="check_in">
                                                            <input type="hidden" name="status" value="1">
                                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                                        
                                                            <input class="form-control m-1" required type="date" name="check_out">
                                                            
                                                       
                                                            <input type="submit" value="Submit">

                                        

                                        <button type="submit" class="btn btn-primary m-2">Order</button>
                                    </form>