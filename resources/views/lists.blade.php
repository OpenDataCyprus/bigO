@extends('layouts.app')

@section('content')

@include('partial.sidebar')

<div class="col-md-offset-3">    
	<div class="container">        

		@foreach($result as $r)
		<div class="panel col-md-10"><h3>{{ $r['name']}}</h3><br>{{ $r['text']}}</div>
		@endforeach

	</div>
</div>


@endsection