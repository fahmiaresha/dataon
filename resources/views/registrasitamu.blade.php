<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registrasi Tamu</title>
</head>

<body>
    <div class="card" style="width: 30%; margin: auto;">
        <div class="card-header">
            <h3>Registrasi Tamu</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/store') }}">
                @csrf
                <div class="form-group">
                    <label for="inputIDCard">ID Card</label>
                    <input type="text" class="form-control" name="idcard" placeholder="Masukkan ID Card" required>
                </div>
                <div class="form-group mt-2">
                    <label for="inputNama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group mt-2">
                    <label for="inputNama">Keperluan</label>
                    <input type="text" class="form-control" name="keperluan" placeholder="Masukkan Keperluan" required>
                </div>
                <div class="form-group mt-2">
                    <label for="inputNama">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-2">Submit</button>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
