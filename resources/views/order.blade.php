@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div>Uzsakymai</div>
        	<ol>
            @foreach ($orders as $order)
            	<li>{{$order->main}}, {{$order->soup}}, {{$order->salad}}, {{$order->side}}. Kaina - {{$order->price}} €</li>
            	<p>Uzsakymo data: {{$order->date}}</p><br>
            @endforeach
        	</ol>
        </div>
    </div>
</div>


@endsection