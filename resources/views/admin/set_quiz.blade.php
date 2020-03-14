@extends('layouts.admin_layout')
@section('content')
<div class="container mt-2">
	<div class="container text-center">
		<div class="row ">
			<div class="col-md-10 mb-2">
				<div class="card border-info">
					<div class="card-header h3 font-weight-bold">SET A QUIZ</div>
					<div class="card-body">
						<p class="alert-success text-center">
							<?php
							$exception = Session::get('exception');
							if($exception){
							echo $exception;
							Session::put('exception',null);
							}
							?>
						</p>
						<form name="add-notice-form" onsubmit="return validform()" method="post" action="{{URL::to('admin/quizes')}}">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="d-flex justify-content-start h5 font-weight-bold">Quiz Name</label>
								<input type="text" class="form-control col-md-3 mb-3" name="name" placeholder="Quiz Name" required="">
								<label for="start_time" class="d-flex justify-content-start h5 font-weight-bold">Start Time</label>
								<input type="date" id="start_time" class="form-control col-md-3 mb-3" name="start_time"
								min="2020-1-1" max="2022-1-1">
								<label for="end_time" class="d-flex justify-content-start h5 font-weight-bold">End Time</label>
								<input type="date" id="end_time" class="form-control col-md-3 mb-3" name="end_time"
								min="2020-1-1" max="2022-1-1">
								
							</div><br>
							
							<div class="offset-md-5 rounded mx-auto d-block d-flex justify-content-center">
								<button type="submit" class="col-md-4 btn btn-info font-weight-bold">ADD</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection