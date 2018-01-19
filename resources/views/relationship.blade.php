<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Relaciones</title>
</head>
<body>

	@foreach($categories as $category)
		<p>
			{{ $category->name }}
			{{$category->num_books}}
		</p>

	@endforeach
		
</body>
</html>