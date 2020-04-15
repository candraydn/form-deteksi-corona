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
        <h1 class="text-center">Deteksi Mandiri Cepat <span class="text-danger">COVID-19</span></h1>
        <h1 class="text-center mt-n2">RS. Orthopaedi Purwokerto</h1>
        <p class="text-center mt-3" style="font-size: 14pt">Deteksi Mandiri Cepat COVID-19 adalah salah satu cara untuk membantu mempercepat tindakan apakah Anda sehat atau memiliki gejala yang memerlukan pemeriksaan dan pengujian lebih lanjut mengenai COVID-19</p>
    </div>
    <div class="container mt-5 mb-5">
        <h4 class="font-weight-bold text-center">Jawab Pertanyaan Berikut Untuk Memulai Deteksi Mandiri</h4>
    </div>
    <div class="container">
        <table class="table">
            <form action="proses.php" method="post">
            <tbody>
                <tr>
                    <td colspan="2" style="background-color:#5e5e5e" class="text-white font-weight-bold">GEJALA YANG DIRASAKAN</td>
                </tr>
                <tr style="background-color:#fff">
                    <td class="font-weight-bold">Saat ini saya sedang merasakan demam</td>
                    <td width="15%">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q1" id="q1-t" value="0" required>
                        <label class="form-check-label" for="q1-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q1" id="q1-y" value="1" required>
                        <label class="form-check-label" for="q1-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td class="font-weight-bold">Saat ini saya sedang merasakan batuk / pilek</td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q2" id="q2-t" value="0" required>
                        <label class="form-check-label" for="q2-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q2" id="q2-y" value="1" required>
                        <label class="form-check-label" for="q2-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td class="font-weight-bold">Saat ini saya merasa kesulitan bernafas atau sesak nafas</td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q3" id="q3-t" value="0" required>
                        <label class="form-check-label" for="q3-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q3" id="q3-y" value="1" required>
                        <label class="form-check-label" for="q3-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td class="font-weight-bold">Saat ini saya sedang mengalami nyeri tenggorokan</td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q4" id="q4-t" value="0" required>
                        <label class="form-check-label" for="q4-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q4" id="q4-y" value="1" required>
                        <label class="form-check-label" for="q4-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td class="font-weight-bold">Lama penyakit kurang dari 14 hari</td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q5" id="q5-t" value="0" required>
                        <label class="form-check-label" for="q5-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q5" id="q5-y" value="1" required>
                        <label class="form-check-label" for="q5-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:#5e5e5e" class="text-white font-weight-bold">RIWAYAT KONTAK</td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span class="font-weight-bold">Memiliki riwayat kontak erat dengan penderita terkonfirmasi COVID-19 atau probabel COVID-19</span>
                    <br>
                    <span>"Melakukan kontak fisik, atau berada dalam satu ruangan, atau berkunjung (berada dalam radius 1 meter dengan kasus pasien dalam pengawasan, probable atau konformasi) dalam 2 hari sebelum kasus timbul gejala dan hingga 14 hari setelah kasus timbul gejala"</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q6" id="q6-t" value="0" required>
                        <label class="form-check-label" for="q6-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q6" id="q6-y" value="1" required>
                        <label class="form-check-label" for="q6-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:#5e5e5e" class="text-white font-weight-bold">RIWAYAT MOBILITAS</td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Memiliki riwayat perjalanan atau tinggal diluar negeri yang melakukan penularan lokal</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q7" id="q7-t" value="0" required>
                        <label class="form-check-label" for="q7-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q7" id="q7-y" value="1" required>
                        <label class="form-check-label" for="q7-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Memiliki riwayat perjalanan atau tinggal diarea penularan lokal di Indonesia</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q8" id="q8-t" value="0" required>
                        <label class="form-check-label" for="q8-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q8" id="q8-y" value="1" required>
                        <label class="form-check-label" for="q8-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color:#5e5e5e" class="text-white font-weight-bold">RIWAYAT DIRI</td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Umur lebih dari 43 tahun</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q9" id="q9-t" value="0" required>
                        <label class="form-check-label" for="q9-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q9" id="q9-y" value="1" required>
                        <label class="form-check-label" for="q9-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Anda adalah seorang laki laki</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q10" id="q10-t" value="0" required>
                        <label class="form-check-label" for="q10-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q10" id="q10-y" value="1" required>
                        <label class="form-check-label" for="q10-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Memiliki riwayat penyakit asma/ DM/ HT/ jantung</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q11" id="q11-t" value="0" required>
                        <label class="form-check-label" for="q11-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q11" id="q11-y" value="1" required>
                        <label class="form-check-label" for="q11-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr style="background-color:#fff">
                    <td><span>Merupakan seorang perokok</span>
                    </td>
                    <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q12" id="q12-t" value="0" required>
                        <label class="form-check-label" for="q12-t">TIDAK</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q12" id="q12-y" value="1" required>
                        <label class="form-check-label" for="q12-y">YA</label>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" style="width: 100%" class="btn btn-danger text-white" value="CEK KESEHATAN SAYA"></td>
                </tr>
            </tbody>
            </form>
        </table>
    </div>
    <div class="container text-center">
        <p style="font-size: 12px">Copyright RSOP <?= date("Y") ?></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>