@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/dishes">Meals</a><br/><br/>
                @foreach ($orders as $order)
                    <div style="border: 2px solid">
                        <ul>
                            <li>{{$order->main}}</li>
                            <li>{{$order->soup}}</li>
                            <li>{{$order->salad}}</li>
                            <li>{{$order->side}}</li><br>
                            <li>Kaina - {{$order->price}} €</li>
                            <p>Uzsakymo data: {{$order->date}}</p>
                        </ul>
                        @if ($user->role =="admin")
                        	<a href="{{ route('edit', ['id' => $order->id])}}" class="btn btn-warning">Edit</a><br>
                            <form action="{{ route('orders.destroy', ['id' => $order->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                        @endif
                        <br>
                    </div>
                @endforeach
        
        </div>
    </div>
</div>
@endsection
