@extends('layouts.app')

@section('content')

@include('partial.sidebar')

<div class="col-md-offset-3">    
    <div class="container">        
        <ul>
            @foreach($result as $r)
            <li>{{ $r['title']}}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection