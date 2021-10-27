<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Good Work Ritesh!</h1>
	{{ Session::get('success') }}
	@if ($message = Session::get('success'))
	<div class="alert alert-info alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>    
	    <strong>{{ $message }}</strong>
	</div>
	@endif

	<form action="{{ route('form-store') }}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Enter user name" value="" >
		<input type="text" name="email" placeholder="Enter user email" value="" >
		<input type="text" name="age" placeholder="Enter user age" value="" >
		<button type="submit" class="btn btn-info">Submit</button>

	</form>
</body>
</html>