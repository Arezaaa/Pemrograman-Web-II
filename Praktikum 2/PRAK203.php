<html>
    <body>
        <?php
            $nilai = $suhuAwal = $suhuAkhir = "";
            if(isset($_POST["nilai"])) $nilai = $_POST["nilai"];
            if(isset($_POST["suhuAwal"])) $suhuAwal = $_POST["suhuAwal"];
            if(isset($_POST["suhuAkhir"])) $suhuAkhir = $_POST["suhuAkhir"];
            $hasil = 0;
        ?>
        <form action=" " method="POST">
            Nilai : <input type="text" name="nilai" value="<?php echo $nilai;?>"><br>
            Dari :<br>
            <input type="radio" name="suhuAwal" id="celcius" value="celcius" <?php if (isset($suhuAwal) && $suhuAwal=="celcius") echo "checked";?>>Celcius<br>
            <input type="radio" name="suhuAwal" id="fahrenheit" value="fahrenheit" <?php if (isset($suhuAwal) && $suhuAwal=="fahrenheit") echo "checked";?>>Fahrenheit<br>
            <input type="radio" name="suhuAwal" id="rheamur" value="rheamur" <?php if (isset($suhuAwal) && $suhuAwal=="rheamur") echo "checked";?>>Rheamur<br>
            <input type="radio" name="suhuAwal" id="kelvin" value="kelvin" <?php if (isset($suhuAwal) && $suhuAwal=="kelvin") echo "checked";?>>Kelvin<br>
            Ke :<br>
            <input type="radio" name="suhuAkhir" id="celcius" value="celcius" <?php if (isset($suhuAkhir) && $suhuAkhir=="celcius") echo "checked";?>>Celcius<br>
            <input type="radio" name="suhuAkhir" id="fahrenheit" value="fahrenheit" <?php if (isset($suhuAkhir) && $suhuAkhir=="fahrenheit") echo "checked";?>>Fahrenheit<br>
            <input type="radio" name="suhuAkhir" id="rheamur" value="rheamur" <?php if (isset($suhuAkhir) && $suhuAkhir=="rheamur") echo "checked";?>>Rheamur<br>
            <input type="radio" name="suhuAkhir" id="kelvin" value="kelvin" <?php if (isset($suhuAkhir) && $suhuAkhir=="kelvin") echo "checked";?>>Kelvin<br>
            <button type="submit" name="konversi">Konversi</button>
        </form>
        <?php 
            if($suhuAwal == "celcius") {
                if($suhuAkhir == "kelvin") {
                    $hasil = $nilai + 273.15 . "&#176K";
                } elseif($suhuAkhir == "fahrenheit") {
                    $hasil = $nilai * (9/5) + 32 . "&#176F";
                } elseif($suhuAkhir ==  "rheamur") {
                    $hasil = $nilai * (4/5) . "&#176R";
                } else {
                    $hasil = $nilai . "&#176C";
                }
            }
            if($suhuAwal == "fahrenheit") {
                if($suhuAkhir == "kelvin") {
                    $hasil = ($nilai + 459.67) * 5/9 . "&#176K";
                } elseif($suhuAkhir == "celcius") {
                    $hasil = ($nilai -32) * 5/9 . "&#176C";
                } elseif($suhuAkhir ==  "rheamur") {
                    $hasil = ($nilai - 32) * 4/9 . "&#176R";
                } else {
                    $hasil = $nilai . "&#176F";
                }
            }
            if($suhuAwal == "rheamur") {
                if($suhuAkhir == "kelvin") {
                    $hasil = ($nilai / 0.8) + 273.15 . "&#176K";
                } elseif($suhuAkhir == "celcius") {
                    $hasil = $nilai / 0.8 . "&#176C";
                } elseif($suhuAkhir ==  "fahrenheit") {
                    $hasil = ($nilai * 2.25) + 32 . "&#176F";
                } else {
                    $hasil = $nilai . "&#176R";
                }
            }
            if($suhuAwal == "kelvin") {
                if($suhuAkhir == "rheamur") {
                    $hasil = 4/5 * ($nilai -273) . "&#176R";
                } elseif($suhuAkhir == "celcius") {
                    $hasil = $nilai - 273.15 . "&#176C";
                } elseif($suhuAkhir ==  "fahrenheit") {
                    $hasil = ($nilai * 9/5) - 459.67 . "&#176F";
                } else {
                    $hasil = $nilai . "&#176K";
                }
            }
            if(!empty($_POST["nilai"]) && !empty($_POST["suhuAwal"]) && !empty($_POST["suhuAkhir"])){
                echo "<b>Hasil Konversi: $hasil</b>";
            }
        ?>
    </body>
</html>