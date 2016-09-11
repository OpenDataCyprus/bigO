@extends('layouts.app')

@section('content')

	
    <div class="container" style="margin-top:50px">
        @include('partial.search')

        <div class="row">
        	<div class="col-md-offset-3 col-md-2" style="margin-top:50px">
        		<a href="environment" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Περιβάλλον <br>
            	</a>
        	</div>
        	<div class="col-md-2" style="margin-top:50px">
        		<a href="#" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Δικαιοσύνη/Δημόσια <br>
            	</a>
        	</div>
        	<div class="col-md-2" style="margin-top:50px">
        		<a href="#" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Demo Primary <br>
            	</a>
        	</div>
        </div>
        <div class="row">

        	<div class="col-md-offset-3 col-md-2" style="margin-top:50px">
        		<a href="#" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Demo Primary <br>Button
            	</a>
        	</div>
        	<div class="col-md-2" style="margin-top:50px">
        		<a href="#" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Demo Primary <br>Button
            	</a>
        	</div>
        	<div class="col-md-2" style="margin-top:50px">
        		<a href="#" class="btn btn-sq-lg btn-primary btn-block">
                	<i class="fa fa-database fa-3x"></i><br/>
                	Demo Primary <br>Button
            	</a>
        	</div>
        </div>
    </div>

@endsection