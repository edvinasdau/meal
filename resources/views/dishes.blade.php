    @extends("layouts.app")
    @section('content')
    {{ csrf_field() }}
    <div class="container">
    	<div class="table-responsive">
    		<table class="table table-striped table-hover table-condensed">
    			<thead>
    				<tr>
    					<th><strong>Date</strong></th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td>
    						 <a href="{{route('single_day1', $days->monday->date)}}">Monday ({{$days->monday->date}})</a>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<a href="{{route('single_day2', $days->tuesday->date)}}">Tuesday ({{$days->tuesday->date}})</a>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<a href="{{route('single_day3', $days->wednesday->date)}}">Wednesday ({{$days->wednesday->date}})</a>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<a href="{{route('single_day4', $days->thursday->date)}}">Thursday ({{$days->thursday->date}})</a>
    					</td>
    				</tr>
    				<tr>
    					<td>
    						<a href="{{route('single_day5', $days->friday->date)}}">Friday ({{$days->friday->date}})</a>
    					</td>
    				</tr>
            </tbody>
        </table>
    </div>
</div>

@endsection