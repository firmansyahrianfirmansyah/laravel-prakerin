<DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
	<table border="10" bgcolor="skyblue" align="center">
	<tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Jenis Kelamin</th>
	</tr>
	@foreach ($tampilan as $data)
		<tr>
			<td>{{ $data->id }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->kelas }}</td>
			<td>{{ $data->jurusan }}</td>
			<td>{{ $data->jenis_kelamin }}</td>
		</tr>
	@endforeach
	</table>
</body>
</html>