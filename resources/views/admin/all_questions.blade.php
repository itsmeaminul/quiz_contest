@extends('layouts.admin_layout')
@section('content')
<div class="card">
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
		<h2 class="font-weight-bold text-info">All Questions</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>ID</th>
							<th>Questions</th>
							<th>Options</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($questions as $question)
						<tr>
							<td>{{$question->id}}</td>
							<td>{{$question->question}}</td>
							<td>{{$question->option}}</td>
							<td>
								<a href="" id="edit">
									<button class="btn btn-outline-warning">&nbsp Edit &nbsp</button>
								</a>
								<a href="" id="delete">
									<button class="btn btn-outline-danger">Delete</button>
								</a>
							</td>
						</tr>
						@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection