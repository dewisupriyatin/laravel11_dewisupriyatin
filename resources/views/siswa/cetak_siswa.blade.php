<body onload="window.print()">

<h1>Data Siswa</h1>
<table border="1" width="75%">
    <tr>
        <td>No</td>
        <td>ID Siswa</td>
        <td>Nama Siswa</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>No Hp</td>
    </tr>

    @foreach($siswa as $rows)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $rows->id_siswa }}</td>
        <td>{{ $rows->nama_siswa }}</td>
        <td>{{ $rows->gender }}</td>
        <td>{{ $rows->alamat }}</td>
        <td>{{ $rows->phone }}</td>
    </tr>
    @endforeach
</table>
    
</body>