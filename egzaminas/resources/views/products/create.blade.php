@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('NEW Product') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="post">
                        
                        @csrf
                        Name:
                        <input class="form-control m-1" type="text" name="name">
                
                        Select Menu:
                        <select class="form-control m-1" class="form-control" name="menu_id">
                            @foreach($menus as $menu)
                            <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                            @endforeach
                        </select>
                        Description:
                        <input class="form-control m-1" type="text" name="description">
                        <input class="form-control m-1" type="hidden" name="photo">
                        Price:
                        <input class="form-control m-1" type="text" name="price">
                        
                        <button type="submit" class="btn btn-primary m-2">Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
