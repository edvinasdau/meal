    @extends("layouts.app")
    @section('content')
    {{ csrf_field() }}
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>Pavadinimas</th>
                <th>Kaina</th>
            </thead>
            <tbody>
                <form action="" method="post">
                   @foreach($soups as $soup)
                   <tr>
                    <td>{{$soup->title}}</td>
                    <td>{{$soup->price}} € <input type="checkbox" value="{{$soup->title}}"></td>
                </tr>
                @endforeach 
                @foreach($mains as $main)
                <tr>
                    <td>{{$main->title}}</td>
                    <td>{{$main->price}} € <input type="checkbox" value="{{$main->title}}"></button></td>
                </tr>
                @endforeach 
                @foreach($salads as $salad)
                <tr>
                    <td>{{$salad->title}}</td>
                    <td>{{$salad->price}} € <input type="checkbox" value="{{$salad->title}}"></td>
                </tr>
                @endforeach 
                @foreach($sides as $side)
                <tr>
                    <td>{{$side->title}} ({{$side->type}})</td> <td><input type="checkbox" value="{{$side->title}}"></td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Pirkti">
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>
@endsection