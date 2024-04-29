<html>
    <head>
        <style>
            .error {color: red;}
        </style>
    </head>
    <body>
        <?php
        $pesanNama = $pesanNim = $pesanKelamin = "";
        $nama = $nim = $kelamin = "";
        function cek_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if (isset($_POST["submit"])) {
            if (empty($_POST["nama"])) {
                $pesanNama = "Nama tidak boleh kosong";
            } else {
                $nama = cek_input($_POST["nama"]);
            }
            if (empty($_POST["nim"])) {
                $pesanNim = "NIM tidak boleh kosong";
            } else {
                $nim = cek_input($_POST["nim"]);
            }
            if (empty($_POST["kelamin"])) {
                $pesanKelamin = "Jenis Kelamin tidak boleh kosong";
            } else {
                $kelamin = cek_input($_POST["kelamin"]);
            }
        }
        ?>
        <form action=" " method="POST">
            Nama: <input type="text" name="nama" id=" " value="<?=$nama;?>">
            <span class ="error"> * <?=$pesanNama;?></span><br>
            Nim: <input type="text" name="nim" id=" " value="<?=$nim;?>">
            <span class ="error"> * <?=$pesanNim?></span><br>
            Jenis Kelamin: 
            <span class ="error"> * <?=$pesanKelamin?></span><br>
            <input type="radio" name="kelamin" id="lakilaki" value="Laki-laki"<?php if (isset($kelamin) && $kelamin=="Laki-laki") echo "checked";?>>Laki-laki<br>
            <input type="radio" name="kelamin" id="perempuan" value="Perempuan"<?php if (isset($kelamin) && $kelamin=="Perempuan") echo "checked";?>>Perempuan<br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php 
        if (isset($_POST["submit"])){
            if(!empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["kelamin"])){
            echo "<h2><b>Output:</b></h2> $nama<br>$nim<br>$kelamin";
            }}
        ?>
    </body>
</html>