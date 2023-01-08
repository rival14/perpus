<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Genre</th>
            <th>Stock</th>
            <th>Lokasi Rak</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $i => $item)
            <tr>
                <th>{{$i + 1}}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->kategori->name}}</td>
                <td>{{ $item->genre }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->alamat }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
