@extends('layouts.app')

@section('content')

@include('partial.sidebar')

<div class="col-md-offset-3">    
	<div class="container">        

		@foreach($result as $key => $r)
		
		<div class="panel col-md-10" style="padding-bottom:10px"><h3>{{ $r['name']}}</h3><br>{{ $r['text']}}<a href="/environment/{{$key}}" class="btn btn-sq-lg btn-primary ">περισσότερα</a></div>
		
		@endforeach

	</div>
</div>


@endsection