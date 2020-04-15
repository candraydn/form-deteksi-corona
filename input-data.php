<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" href="config/favicon.ico" type="image/x-icon">
    <link rel="icon" href="config/favicon.ico" type="image/x-icon">
    <title>TEST COVID-19 RSOP</title>
</head>

<body style="background-color:#f0f0f0">
    <div class="container mt-5">
        <h1 class="text-center">RS. Orthopaedi Purwokerto</h1>
        <p class="text-center mt-3" style="font-size: 19pt"><span class="font-weight-bold">Masukkan biodata Anda untuk
                membantu Kami</span></p>
    </div>
    <div class="container mt-5 shadow p-5 mb-5 bg-white rounded" style="background-color:#fff">
        <form>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputUmur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputUmur" name="umur" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputTelp" class="col-sm-2 col-form-label">No HP/WA</label>
                <div class="col-sm-10 input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                    </div>
                    <input type="text" class="form-control" name="telp" id="inputTelp" placeholder="" aria-label="inputTelp"
                        aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAlamat" name="alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputProvinsi" class="col-sm-2 col-form-label">Provinsi</label>
                <div class="col-sm-10">
                <select name="prov" id="prov" class="custom-select">
                    <option selected>--Select--</option>
                    <?php
                        $con = new PDO('mysql:host=localhost;dbname=test','root','');
                        $prov = $con->prepare("SELECT * FROM provinces order by name");
                        $prov->execute();
                        $provinsi = $prov->fetchAll();

                        foreach($provinsi as $item){
                    ?>
                    <option value="<?= $item['id']; ?>" selected><?= $item['name']; ?></option>
                    <?php
                        }
                    ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputKabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                <div class="col-sm-10">
                <select name="kab" id="kab" class="custom-select">
                    <option value="">Pilih</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputKecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                <div class="col-sm-10">
                    <select name="kec" id="kec" class="custom-select">
                        <option value="">Pilih</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputKelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                <div class="col-sm-10">
                    <select name="kel" id="kel" class="custom-select">
                        <option value="">Pilih</option>
                    </select>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-10">
                    <button style="width:100%" type="submit" class="btn btn-primary text-center">Kirim Biodata</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container text-center">
        <p style="font-size: 12px">Copyright RSOP <?= date("Y") ?></p>
    </div>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Load librari/plugin jquery nya -->
	<script src="config/jquery.min.js" type="text/javascript"></script>
    	<!-- Load File javascript config.js -->
	<script src="config/app.js" type="text/javascript"></script>
</body>

</html>