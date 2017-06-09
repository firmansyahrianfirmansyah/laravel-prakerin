<DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
	<h1>Daftar Kendaraan :</h1>
	@foreach ($dati as $taekeun)
	<li>{{($taekeun)}}</li>
	@endforeach
</body>
</html>