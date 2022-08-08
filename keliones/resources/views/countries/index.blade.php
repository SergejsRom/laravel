@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Countries') }}</div>
                @if(session()->has('success_message'))
                <p class="alert alert-success"> {{ session()->get('success_message') }}</p>
                @endif

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
                                    Season start
                                </th>
                                <th>
                                    Season end
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                                <tr>
                                    <td>
                                        {{$country->country_name}}
                                    </td>
                                    <td>
                                        {{$country->season_time}}
                                    </td>
                                    <td>
                                        {{$country->season_end}}
                                    </td>
                                    <td class="flex">
                                        <a class="btn btn-success m-1" href="{{ route('countries.show', $country) }}">SHOW</a>
                                        <a class="btn btn-secondary m-1" href="{{ route('countries.edit', $country) }}">EDIT</a>
                                        <form action="{{ route('countries.destroy', $country) }}" method="post">
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
