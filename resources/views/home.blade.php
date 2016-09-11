@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h3 class="text-center">Welcome to big O Administration</h3>
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>


        </div>
    </div>
</div>
@endsection
