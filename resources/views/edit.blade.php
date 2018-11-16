@extends('layouts.app')

@section('content')

<div class="container">
    <form class="form-group" action="{{route('orders.update', ['update' => $order->id])}}" method="POST">
        {{csrf_field()}}
        {{ method_field('PATCH') }}
        <div class="form-group">
            <label class="col control-label">Main dish</label>
            <div class="form-group">
                <input name="main" placeholder="Main dish" value="{{ old('main' , $order->main) }}" class="form-control"  type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col control-label">Soup</label>
            <div class="form-group">
                <input name="soup" placeholder="Soup" value="{{ old('soup' , $order->soup) }}" class="form-control"  type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col control-label">Salads</label>
            <div class="form-group">
                <input name="salad" placeholder="Salads" value="{{ old('salad' , $order->salad) }}" class="form-control"  type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col control-label">Side meal</label>
            <div class="form-group">
                <input name="side" placeholder="Side meal" value="{{ old('side' , $order->side) }}" class="form-control"  type="text">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection