<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Print Book PDF</title>
</head>
<body>
    <h1 class="text-center">Data Buku</h1>
    <p class="text-center">Laporan Data Buku Tahun 2022</p>
<br/>
<table id="table-data" class="table table-bordered">
    <thead>
        <tr class="text-center">
            <th>NO</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th>Cover</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $no=1; @endphp
        @foreach ($books as $book)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$book->judul}}</td>
                <td>{{$book->penulis}}</td>
                <td>{{$book->tahun}}</td>
                <td>{{$book->penerbit}}</td>
                <td>
                    @if ($book->cover !== null)
                        <img src="{{asset('storage/cover_buku/'.$book->cover)}}" width="100px"/>
                    @else
                    [Gambar tidak tersedia]
                    @endif    
                </td>
            </tr>
        </thead>
    </table>
</body>
</html>