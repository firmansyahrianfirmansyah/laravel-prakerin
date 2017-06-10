<DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
	<h1>Daftar Barang :</h1>
	@foreach ($data as $buah)
	<li>{{($buah)}}</li>
	@endforeach
</body>
</html>