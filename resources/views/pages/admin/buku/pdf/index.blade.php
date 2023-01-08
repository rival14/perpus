
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
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">kategori No</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Stock</th>
                  <th scope="col">lokasi Rak</th>
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
    </div>

</body>
</html>











