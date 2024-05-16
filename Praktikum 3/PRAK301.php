<html>
    <body>
        <?php
            $peserta = "";
            if(isset($_POST['submit'])) {
                $peserta = $_POST['peserta'];
                $i = 1;
            } 
        ?>
        <form action="" method="POST" >
            Jumlah Peserta: <input type="number" name="peserta" id="" value="<?= $peserta ?>"><br>
            <button type="submit" name="submit" value="submit" id="">Cetak</button>
        </form>
        <?php 
            if(isset($_POST['submit'])) {
                while($i<=$peserta) {
                    if($i%2 == 0) {
                        echo "<h2><font color ='green'>Peserta Ke-$i</font></h2>";
                    } else {
                        echo "<h2><font color ='red'>Peserta Ke-$i</font></h2>";
                    }
                    $i++;
                }
            }
        ?>
    </body>
</html>