@extends('layouts.app')

@section('content')

@include('partial.sidebar')

<div class="col-md-offset-3">    
	<div class="container">        

		@foreach($result as $r)
		<div class="panel col-md-10"><h3>{{ $r['city']}}</h3><br>{{ $r['api']}}<a href="/environment1/{{ $r['link'] }}" class="btn btn-link">More</a></div>
		@endforeach

	</div>
</div>


@endsection