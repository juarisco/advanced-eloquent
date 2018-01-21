<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>N + 1</title>
</head>
<body>
	<h1>Libros</h1>
	@foreach ($books as $book)
		<li>
			<strong>{{ $book->title }}</strong> - 
			<em>{{ $book->category->name }}</em> author ({{ $book->user->name }})
		</li>
	@endforeach
</body>
</html>