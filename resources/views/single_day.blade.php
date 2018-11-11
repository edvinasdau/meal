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

             @foreach($soups as $soup)
             <tr>
                <td>{{$soup->title}}</td>
                <td>{{$soup->price}} € <button type="button" class="btn btn-primary">Pirkti</button></td>
            </tr>
            @endforeach 
            @foreach($mains as $main)
            <tr>
                <td>{{$main->title}}</td>
                <td>{{$main->price}} € <button type="button" class="btn btn-primary">Pirkti</button></td>
            </tr>
            @endforeach 
            @foreach($salads as $salad)
            <tr>
                <td>{{$salad->title}}</td>
                <td>{{$salad->price}} € <button type="button" class="btn btn-primary">Pirkti</button></td>
            </tr>
            @endforeach 
            @foreach($sides as $side)
            <tr>
                <td>{{$side->title}} ({{$side->type}}) <button type="button" class="btn btn-primary">Pirkti</button></td>
            </tr>
            @endforeach   
        </tbody>
    </table>
</div>
@endsection