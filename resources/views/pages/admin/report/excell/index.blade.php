<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Peminjam</th>
            <th>Order No</th>
            <th>Judul</th>
            <th>Alamat Rak</th>
            <th>Dari</th>
            <th>Sampai</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $i => $item)
            <tr>
                <th>{{$i + 1}}</th>
                <td>{{$item->user->name}}</td>
                <td>{{$item->order_number}}</td>
                <td>{{$item->buku->judul}}</td>
                <td>{{$item->buku->alamat}}</td>
                <td>{{$item->from}}</td>
                <td>{{$item->to}}</td>
                <td>{{$item->status}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
