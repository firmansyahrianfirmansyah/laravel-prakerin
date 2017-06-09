<DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
	<h1>Daftar Kendaraan :</h1>
	@foreach ($yoyo as $sss)
	<li>{{($sss)}}</li>
	@endforeach
</body>
</html>