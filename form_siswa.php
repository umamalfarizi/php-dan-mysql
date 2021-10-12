<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" />


    <title>Input Form</title>
  </head>
  <body>
  <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">
                <img src="image/jong_koding_logo.png" />
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link" aria-current="page">Daftar Siswa</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>

    <div id="form" class="pt-5">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col col-8 p-4 bg-light">

                    <form action="action.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="name">NIS</label>
                            <input name="nis" id="nis" class="form-control" type="text" placeholder="Nomor Induk Siswa" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Nama Lengkap</label>
                            <input name="name" id="name" class="form-control" type="text" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender"  id="male" value="L" required />
                                <label class="form-check-label" for="male" >Laki-laki</label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gender"  id="female" value="P" required />
                                <label class="form-check-label" for="female" >Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Tempat Lahir</label>
                            <input name="placeOfBirth" id="tmp_lahir" class="form-control" type="text" placeholder="Tempat Lahir" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Tanggal Lahir</label>
                            <input name="dateOfBirth" id="tgl_lahir" class="form-control" type="date" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Telepon</label>
                            <input name="phone" id="phone" class="form-control" type="text" placeholder="Nomor Telepon" required>
                        </div>

                        <input name="submit" type="submit" value="Kirim" class="btn btn-primary ">

                    </form>

                </div>

            </div>

        </div>

    </div>

  </body>
  <script>
    $( function() {
    var date = $('#tmp_lahir').datepicker({ dateFormat: 'dd-mm-yy' }).val();
    } );
  </script>
</html>