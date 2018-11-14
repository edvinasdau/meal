    @extends("layouts.app")
    @section('content')
    
    <div class="container">
        <p><strong>Meniu</strong></p>
            <form class="form-group" action="{{route('store')}}" method="post">
                {{csrf_field()}}
                @foreach($soups as $soup)
                <ul>
                    <li>{{$soup->title}} - {{$soup->price}} € <input name="soup" type="radio" value="{{$soup->title}}|{{$soup->price}}"></li>
                </ul>
                @endforeach<br> 
                @foreach($mains as $main)
                <ul>
                    <li>{{$main->title}} - {{$main->price}} € <input name="main" type="radio" value="{{$main->title}}|{{$main->price}}"></li>
                </ul>
                @endforeach <br> 
                @foreach($salads as $salad)
                <ul>
                    <li>{{$salad->title}} - {{$salad->price}} € <input name="salad" type="radio" value="{{$salad->title}}|{{$salad->price}}"></li>
                </ul>
                @endforeach <br>
                @foreach($sides as $side)
                <ul>
                    <li>{{$side->title}} ({{$side->type}}) <input name="side" type="radio" value="{{$side->title}}"></li>
                </ul>
                @endforeach
                <button type="submit" class="btn btn-primary">Pirkti</button>
            </form>
    </div>
    @endsection