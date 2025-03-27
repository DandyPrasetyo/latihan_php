<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3p1hXn6lrYk5FS1yLNhoc3PRJYZ5E5gqtk9L2VYD5G1F5L/N4+pKp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Belajar PHP-2</title>
    <script type="text/javascript">
        function myfunction() {
            alert("Halo Mahasiswa Baru! Selamat belajar!");
        }
    </script>
    <style>
        html, body {
            margin: 10px;
            background-image: linear-gradient(to bottom right, rgb(97, 224, 250), rgb(255, 255, 255));

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo "<h1>Hello World !</h1><hr>";

                $nama = "Dandy Prasetyo";
                $prodi = "D3 Teknologi Informasi";
                $kelas = "TI-1B";

                echo "<h4>Identitas Mahasiswa</h4>";
                echo "Nama Mahasiswa: " . $nama . "<br>";
                echo "Prodi: " . $prodi . "<br>";
                echo "Kelas: " . $kelas;
                echo "<hr>";

                echo "<h3>Menghitung Luas Persegi Panjang</h3>";
                $panjang = 10;
                $lebar = 30;
                $luas = $panjang * $lebar;

                echo "Nilai panjang = " . $panjang . " & Nilai lebar = " . $lebar . ".<br>";
                echo "Luas Persegi Panjang (p×l) = " . $luas;
                echo "<hr>";
                ?>
                
                <h3>Contoh Penggunaan Javascript pada PHP</h3>
                <form>
                    <input type="button" onclick="myfunction()" value="Ayo klik ini !!">
                </form>
                <hr>
                <?php
                // Contoh 1: IF-ELSE sederhana
                $angka1 = 10;
                $angka2 = 20;

                if ($angka1 > $angka2) {
                    echo "$angka1 lebih besar daripada $angka2";
                } else {
                    echo "$angka1 lebih kecil atau sama dengan $angka2";
                }

                // Contoh 2: IF-ELSE-IF
                $day = 5;

                if ($day == 1) {
                    echo "Hari ini adalah Senin";
                } elseif ($day == 2) {
                    echo "Hari ini adalah Selasa";
                } elseif ($day == 3) {
                    echo "Hari ini adalah Rabu";
                } elseif ($day == 4) {
                    echo "Hari ini adalah Kamis";
                } elseif ($day == 5) {
                    echo "Hari ini adalah Jumat";
                } elseif ($day == 6) {
                    echo "Hari ini adalah Sabtu";
                } elseif ($day == 7) {
                    echo "Hari ini adalah Minggu";
                } else {
                    echo "Silakan masukkan nomor hari yang valid (1-7)";
                }
                    echo "<hr>";
                    echo "<h3>Contoh Progam <font color='#ee07f2'>Switch Case</font>pada PHP</h3>";
                    $nilai = 81;
                    echo "Nilai anda = $nilai <br>";
                    switch ($nilai) {
                        case ($nilai >= 80 && $nilai <= 100):
                            echo "nilai huruf = A";
                            break;
                        case ($nilai >= 65 && $nilai <= 79):
                            echo "nilai huruf = B";
                            break;
                        case ($nilai >= 55 && $nilai <= 64):
                            echo "nilai huruf = C";
                            break;
                        case ($nilai >= 45 && $nilai <= 54):
                            echo "nilai huruf = D";
                            break;
                        case ($nilai >= 0 && $nilai <= 44):
                            echo "nilai huruf = E";
                            break;
                        default:
                            echo "Masukan nilai dengan benar";
                    }
                ?>
?>

            </div>
        </div>
    </div>
</body>
</html>
