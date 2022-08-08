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
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Hotels
                                </th> 
                                <th>
                                    start
                                </th> 
                                <th>
                                    end
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                
                                <tr>
                                    <td>
                                        {{$country->country_name}}
                                    </td>
                                    <td>
                                        <ul>
                                        @foreach ($hotels as $hotel)
                                        @if ($country->id == $hotel->country_id)
                                        <li>{{$hotel->hotel_name}}</li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    </td>
                                    <td>
                                        {{$country->season_time}}
                                    </td>
                                    <td>
                                        {{$country->season_end}}
                                    </td>
                                    <td>
                                        
                                        <a class="btn btn-secondary m-1" href="{{ route('countries.edit', $country) }}">EDIT</a>
                                        <form action="{{ route('countries.destroy', $country) }}" method="post">
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
