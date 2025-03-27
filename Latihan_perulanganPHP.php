<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Belajar PHP-2</title>
    <style>
        html, body {
            margin: 10%;
            background-image: linear-gradient(to bottom right, rgb(12, 124, 204), rgb(255, 255, 255), rgb(225, 236, 31));
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    echo "<hr>";

                    echo "<h3>Array 1 Dimensi pada PHP</h3>";
                    $barang = ["Buku Tulis", "Penghapus", "Spidol"];
                    echo $barang[0] . "<br>";
                    echo $barang[1] . "<br>";
                    echo $barang[2] . "<br>";

                    echo "<hr>";
                    echo "<h3>Array 2 Dimensi pada PHP</h3><p>";
                    $mahasiswa = [
                        ["Dandi", 243100040047, "D3 TI"],
                        ["Rangga", 243100040048, "D4 TRO"],
                        ["Neysa", 243100040049, "D3 Akuntansi"]
                    ];

                    echo "Nama Mahasiswa = " . $mahasiswa[0][0] . "<br>";
                    echo "NIM = " . $mahasiswa[0][1] . "<br>";
                    echo "Prodi = " . $mahasiswa[0][2] . "<br>";
                    echo "<p>";

                    echo "Nama Mahasiswa = " . $mahasiswa[1][0] . "<br>";
                    echo "NIM = " . $mahasiswa[1][1] . "<br>";
                    echo "Prodi = " . $mahasiswa[1][2] . "<br>";
                    echo "<p>";

                    echo "Nama Mahasiswa = " . $mahasiswa[2][0] . "<br>";
                    echo "NIM = " . $mahasiswa[2][1] . "<br>";
                    echo "Prodi = " . $mahasiswa[2][2] . "<br>";

                    echo "<hr>";
                    $menu = [
                        "menu1"=>["nama"=> "Nasi Jagung", "harga" => 8000],
                        "menu2"=>["nama"=> "Nasi Kuning", "harga" => 10000],
                        "menu3"=>["nama"=> "Nasi Campur", "harga" => 9000]
                    ];
                    
                    echo "<h3>Daftar Menu dan Harga</h3>";
                    echo $menu["menu1"]["nama"]." : Rp.".$menu["menu1"]["harga"]."<br>";
                    echo $menu["menu2"]["nama"]." : Rp.".$menu["menu2"]["harga"]."<br>";
                    echo $menu["menu3"]["nama"]." : Rp.".$menu["menu3"]["harga"]."<p>";
                    
                    echo "<hr>";
                    
                    $menu = [
                        ["nama"=> "Nasi Pecel", "harga" => 6000],
                        ["nama"=> "Nasi Kuning", "harga" => 8000],
                        ["nama"=> "Nasi Campur", "harga" => 10000]
                    ];
                    
                    echo "<h3><font color='blue'>Daftar Menu dan Harga Versi 2</font></h3>";
                    echo $menu[0]["nama"]." : Rp.".$menu[0]["harga"]."<br>";
                    echo $menu[1]["nama"]." : Rp.".$menu[1]["harga"]."<br>";
                    echo $menu[2]["nama"]." : Rp.".$menu[2]["harga"]."<p>";
                    
                    echo "<hr>";
                    echo "<h3><u>Contoh Array dalam Array</u></h3><p>";
                    $mahasiswa = array(
                        array("nama" => "Dandi",
                            "NIM" => "243100040047",
                            "prodi" => "D3 Teknologi Informasi"
                        ),
                        array("nama" => "Rangga",
                            "NIM" => "243100040048",
                            "prodi" => "D3 TRO"
                        ),
                        array("nama" => "Neina",
                            "NIM" => "243100040050",
                            "prodi" => "D3 Teknologi Sipil"
                        )
                    );

                    foreach ($mahasiswa as $key => $value) {
                        echo "Nama Mahasiswa : " . $value['nama'] . "<br>";
                        echo "NIM : " . $value['NIM'] . "<br>";
                        echo "Prodi : " . $value['prodi'] . "<p>";
                    }

                    echo "<hr>";
                    echo "<h4>Contoh Perulangan FOR</h4><p>";

                    for($i = 0; $i < 5; $i++){
                        echo "Ini perulangan ke-$i <br>";
                    }

                    echo "<hr>";

                    echo "<h4>Contoh Perulangan While</h4>";

                    $ulangi = 0;
                    while($ulangi < 5){
                        echo "<p>Ini adalah perulangan ke-$ulangi</p>";
                        $ulangi++;
                    }
                    echo "<hr><h4>Contoh Perulangan Do-While</h4>";

                    $ulangi = 4;
                    do {
                        echo "<p>ini adalah perulangan ke-$ulangi</p>";
                        $ulangi--;
                    } while ($ulangi > 0);

                    echo "<hr>";

                    $star = 5;
                    for ($a = $star; $a > 0; $a--) {
                        for ($i = 1; $i <= $a; $i++) {
                            echo "&nbsp;";
                        }
                        for ($a1 = $star; $a1 >= $a; $a1--) {
                            echo "*";
                        }
                        echo "<br>";
                    }

                    echo "<hr>";
                    $star = 5;
                    for($a = 1; $a <= $star; $a++){
                        for($c = $star; $c >= $a; $c--){
                            echo "$c ";
                        }
                        echo "<br>";
                    }
                    
                    echo "<hr>";
                    
                    $buah = array('Durian', 'Nangka', 'Jeruk', 'Apel');
                    foreach($buah as $value){
                        echo $value."<br>";
                    }
                    
                    echo "<hr>";
                    
                    foreach($buah as $key => $value){
                        echo "Index ke-".$key." adalah ".$value."<br>";
                    }
                    
                    echo "<hr>";
                    $mahasiswa = array(
                        ["Angga", 78, 90],
                        ["Aldi", 100, 90],
                        ["Neina", 60, 100]
                    );
                    
                    $banyak_data = count($mahasiswa);
                    
                    $no = 1;
                    echo "
                    <table class='table table-bordered table-striped table-hover'>
                        <tr class='table-info'>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nilai 1</th>
                            <th>Nilai 2</th>
                        </tr>";
                        for($a = 0; $a < $banyak_data; $a++){
                            for($b = 0; $b < $banyak_data; $b++){
                                echo "<tr class='table-danger'>
                                        <td>$no</td>";
                                for($c = 0; $c < $banyak_data; $c++){
                                    echo "<td>".$mahasiswa[$b][$c]."</td>";
                                }
                                echo "</tr>";
                                $no++;
                            }
                            break;
                        }
                        
                        echo "</table>";
                        
                        echo "<hr>";
                        
                        $menu = array(
                            ["Nasi pecel", 6000],
                            ["Nasi campur", 10000],
                            ["Nasi goreng", 12000]
                        );
                        
                        $banyak_menu = count($menu);
                        
                        echo "<table class='table table-bordered table-striped table-hover'>
                                <tr class='table-info'>
                                    <th>No</th>
                                    <th>Nama menu</th>
                                    <th>Harga</th>
                                </tr>";
                                $no = 1;
                                for ($a = 0; $a < $banyak_menu; $a++) {
                                    echo "<tr><td>" . $no . "</td>";
                                
                                    for ($b = 0; $b < $banyak_menu - 1; $b++) {
                                        echo "<td>" . $menu[$a][$b] . "</td>";
                                    }
                                
                                    echo "</tr>";
                                    $no++;
                                }
                                
                                echo "</table>";
                     ?>  
            </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
        </div>
    </div>
</body>
</html>
