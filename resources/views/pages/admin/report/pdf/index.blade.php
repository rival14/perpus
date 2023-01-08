
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <h3>History Report</h3>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <table class="table table-bordered">
          <thead class="thead-dark">
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Peminjam</th>
                  <th scope="col">Order No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Alamat Rak</th>
                  <th scope="col">Dari</th>
                  <th scope="col">Sampai</th>
                  <th scope="col">Status</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($items as $i => $item)
                  <tr>
                      <th scope="row">{{$i + 1}}</th>
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
    </div>

</body>
</html>











