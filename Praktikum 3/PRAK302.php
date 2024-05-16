<html>
    <body>
        <?php
            $tinggi = $alamat = "";
                if(isset($_POST['submit'])) {
                $tinggi = $_POST["tinggi"];
                $alamat = $_POST["alamat"];
                $i = 0;
            }
        ?>
        <form action="" method="POST">
            Tinggi: <input type="number" name="tinggi" id="" value="<?= $tinggi ?>" ><br>
            Alamat Gambar: <input type="text" name="alamat" id="" value="<?= $alamat ?>"><br>
            <button type="submit" name="submit" value="submit" id="">Cetak</button>
        </form>
        <?php
            if(isset($_POST['submit'])) {
                while ($i < $tinggi) {
                    $j = 0;
                    while($j < $i) {
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        $j++;
                    }
                    $j = 0;
                    while ($j < $tinggi-$i) {
                        echo "<img src='$alamat' width='20px' height='20px'>" ;
                        $j++; 
                    }
                    $i++;
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>