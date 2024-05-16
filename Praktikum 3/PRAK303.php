<html>
    <body>
        <?php
        $bawah = $atas = "";
        if(isset($_POST['submit'])) {
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
        }
        ?>
        <form action="" method="POST">
            Batas Bawah: <input type="number" name="bawah" id="" value="<?= $bawah ?>"><br>
            Batas Atas: <input type="number" name="atas" id="" value="<?= $atas ?>"><br>
            <button type="submit" name="submit" value="submit" id="">Cetak</button>
        </form>
        <?php 
        if(isset($_POST['submit'])) {
            do{
                if(($bawah+7)%5==0) {
                    echo "<img src='bintang.png' width='15px' height='15px'>";
                } else {
                    echo $bawah;
                }
                echo "&nbsp";
                $bawah++;
            } while ($bawah <= $atas);
        }
        ?>
    </body>
</html>