<html>
    <body>
        <?php
            $star = $i = 0;
            if(isset($_POST['star'])) {
                $star = $_POST['star'];
            }
            
            if(isset($_POST['tambah'])) {
                $star++;
            }
            if(isset($_POST['kurang'])) {
                $star--;
            }

            if($star == 0) {
                echo "<form action='' method='POST'>
                        Jumlah bintang <input type='number' name='star' id=''><br>
                        <button type='submit'>Submit</button>
                     </form>";
            }
            if($star != 0) {
                echo "Jumlah bintang $star<br><br>";
                for(;$i < $star; $i++) {
                    echo "<img src='bintang.png' width=100 height=100>";
                }
                echo "<form action='' method='POST'>
                        <input type='hidden' name='star' value='$star'>
                        <button name = 'tambah'>Tambah</button>
                        <button name = 'kurang'>Kurang</button>
                     </form>";
            }
        ?>
    </body>
</html>