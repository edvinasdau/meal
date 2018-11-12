    @extends("layouts.app")
    @section('content')
    
    <div class="container">
        Pavadinimas
        Kaina
        <form class="form-group" action="{{route('store')}}" method="post">
            {{csrf_field()}}
            @foreach($soups as $soup)
            <ul>
                <li>{{$soup->title}}</li>
                <li>{{$soup->price}} € <input name="soup" type="checkbox" value="{{$soup->title}}"></li>
            </ul>
            @endforeach 
            @foreach($mains as $main)
            <ul>
                <li>{{$main->title}}</li>
                <li>{{$main->price}} € <input name="main" type="checkbox" value="{{$main->title}}"></button></li>
            </ul>
            @endforeach 
            @foreach($salads as $salad)
            <ul>
                <li>{{$salad->title}}</li>
                <li>{{$salad->price}} € <input name="salad" type="checkbox" value="{{$salad->title}}"></li>
            </ul>
            @endforeach 
            @foreach($sides as $side)
            <ul>
                <li>{{$side->title}} ({{$side->type}})</li>
                <li><input name="side" type="checkbox" value="{{$side->title}}"></li>
            </ul>
            @endforeach
            <button type="submit" class="btn btn-primary">Pirkti</button>
        </form>
    </div>
    @endsection