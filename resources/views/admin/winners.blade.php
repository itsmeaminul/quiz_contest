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
		<h2 class="font-weight-bold text-info">Winners</h2>
		<div class="row">
			<div class="col-12">
				<table id="order-listing" class="table table-striped" style="width:100%;">
					<thead>
						<tr>
							<th>SRL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Contact</th>
							<th>Answer</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($winners as $i=>$row)
						<tr>
							<td>{{++$i}}</td>
							<td>{{$row->name}}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->contact}}</td>
							<td>{{$row->answer}}</td>
							<td>
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
