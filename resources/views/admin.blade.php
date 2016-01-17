@extends('app')
@section('content')
	<h1>Enter Zone Details</h1>
	<div class="col-md-8 row">
		{!! Form::open(['url' => 'store']) !!}

			<div class="form-group">
				{!! Form::label('id','ID :') !!}
				{!! Form::text('id',null,['class' => 'form-control' , 'placeholder' => 'Enter Zone ID']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('name','Name :') !!}
				{!! Form::text('name',null,['class' => 'form-control' , 'placeholder' => 'Enter Zone Name']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('address','Address :') !!}
				{!! Form::textarea('address',null,['class' => 'form-control' , 'placeholder' => 'Enter Zone Address']) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('t_spots','Total Spots :') !!}
				{!! Form::input('number', 't_spots', 0, ['class' => 'form-control' , 'placeholder' => 'Enter Total Spots in Zone']) !!}
			</div>
				
			<div class="form-group">
				{!! Form::label('w_hours','Working Hours :') !!}
				{!! Form::text('w_hours',null,['class' => 'form-control timepicker' , 'placeholder' => 'Enter Working Hours of Zone']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Add Zone',['class' => 'btn btn-primary form-control']) !!}
			</div>

		{!! Form::close() !!}
	</div>

@endsection