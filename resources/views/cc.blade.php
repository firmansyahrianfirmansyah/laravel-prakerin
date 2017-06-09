<DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
	<h1>Daftar Laptop :</h1>
	@foreach ($datu as $modern)
	<li>{{($modern)}}</li>
	@endforeach
</body>
</html>