<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo List</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h1>ToDo List</h1>
<ul>
	@foreach($todo as $td)
	<li>
		<form action="{{ url('todo/' .$td->id_todo) }}" method="POST">
			{{ $td->item }}
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
		
		<button type="submit" class="btn-danger">x</button>
		</form>
	</li>
	@endforeach
</ul>
<form action="todo" method="POST">
	{{ csrf_field() }}
<div class="row">
<div class="col-lg-3">
<div class="form-group">
<input type="text" class="form-control" name="todo_item" placeholder="item baru...">
</div>
<div>
	<div class="col-lg-1">
<button type="submit" class="btn-success">Add</button>
</div>
<div>
	<div class="col-lg-8">
</div>
</form>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>