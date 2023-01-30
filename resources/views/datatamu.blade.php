<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <title>Registrasi Tamu</title>
</head>

<body>
    <div class="container mt-5">
         <div class="row">
              <div class="col-12">
                <table id="mytable" class="table table-bordered">
                     <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Card</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Kedatangan</th>
                          </tr>
                     </thead>
                     <tbody>
                          @foreach ($tamu as $t)
                          <tr>
                            <th scope="row">{{ $loop->iteration }}.</th>
                            <td>{{ $t->id_card }}</td>
                            <td>{{ $t->nama }}</td>
                            <td>{{ $t->keperluan }}</td>
                            <td>{{ $t->alamat }}</td>
                            <td>{{ $t->tanggal_kedatangan }}</td>
                          </tr>
                          @endforeach
                     </tbody>
                </table>
              </div>
         </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

   
    <script >
        $(document).ready(function () {
            $('#mytable').DataTable();
        });
    </script>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
