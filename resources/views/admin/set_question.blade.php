@extends('layouts.admin_layout')
@section('content')
<div class="container mt-2">
	<div class="container text-center">
		<div class="row ">
			<div class="col-md-10 mb-2">
				<div class="card border-info">
					<div class="card-header h3 font-weight-bold">SET QUESTION</div>
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
						<form name="add-notice-form" onsubmit="return validform()" method="post" action="{{URL::to('admin/questions')}}"">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="d-flex justify-content-start h5 font-weight-bold">Quiz Name</label>
								<select class="form-control col-md-4 mb-2" id="quiz_name" required="">
									@foreach($quiz_name as $row)
									<option value="Day 1" name="" selected>{{$row->name}}</option>
									@endforeach
								</select>
								
								<label class="d-flex justify-content-start h5 font-weight-bold">Question</label>
								<input type="text" class="form-control col-md-10 mb-3" name="question" placeholder="write Question 1 here" required="">
								<input type="text" class="form-control col-md-4 mb-2" name="option[]" placeholder="write option A here" required="">
								<input type="text" class="form-control col-md-4 mb-2" name="option[]" placeholder="write option B here" required="">
								<input type="text" class="form-control col-md-4 mb-2" name="option[]" placeholder="write option C here" required="">
								<input type="text" class="form-control col-md-4 mb-2" name="option[]" placeholder="write option D here" required="">
								<label class="d-flex justify-content-start h5 font-weight-bold ">Correct Answer</label>
								<input type="text" class="form-control col-md-4 mb-2" name="correct_answer" placeholder="Correct Answer" required="">
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