<html>
    <head>
        <style>
            .table, td{
                border: solid 1px black;
                border-collapse: collapse;
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
            $panjang = $lebar = $nilai = "";
            if (isset($_POST['submit'])) {
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $nilai = $_POST['nilai'];
            }
        ?>
        <form action="" method="POST">
            Panjang : <input type="text" name="panjang" value="<?php echo $panjang;?>" id=""><br>
            Lebar : <input type="text" name="lebar" value="<?php echo $lebar;?>" id=""><br>
            Nilai : <input type="text" name="nilai" value="<?php echo $nilai;?>" id=""><br>
            <button type="submit" name="submit">Cetak</button>
        </form>
        <?php
            if (isset($_POST['submit'])) {
                $nilaiArr = explode(" ", $nilai);
                if ($panjang * $lebar == count($nilaiArr)) {
                    $k=0;
                    for ($i = 0; $i < $panjang; $i++) {
                        for ($j = 0; $j < $lebar; $j++) {
                            $result[$i][$j] = $nilaiArr[$k];
                            $k++;
                        }
                    }
                    echo '<table>';
                    for ($i = 0; $i < $panjang; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < $lebar; $j++) {
                            echo '<td>'.$result[$i][$j].'</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                } else {
                    echo 'Panjang nilai tidak sesuai dengan ukuran matriks';
                }
            }
        ?>
    </body>
</html>