@extends('layout')

@section('content')

<div class="wrap">
	<div class="row">
		<h1>ログイン</h1>
		@if(count($errors) >0)
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif
		<form action="{{ Request::root()}}/login" method="post">
			<div class="form-group">
				<label for="screenname">Name</label>
				<input type="text" id="screenname" name="screenname" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">ログイン</button>
			{{ csrf_field() }}
		</form>
	</div>
</div>
</div>  

@endsection

