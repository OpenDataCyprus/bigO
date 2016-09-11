@extends('layouts.app')

@section('content')

@include('partial.sidebar')

<div class="col-md-offset-3">    
	<div class="container">        

		@foreach($result as $r)
		<div class="panel col-md-10"><h3>{{ $r['name']}}</h3><br>{{ $r['text']}}<a href="environment" class="btn btn-sq-lg btn-primary btn-block"></a></div>
		@endforeach

	</div>
</div>


@endsection