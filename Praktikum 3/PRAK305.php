<html>
    <body>
        <form action="" method="POST">
            <input type="text" name="input" id="">
            <button type="submit" name="submit" value="submit" id="">submit</button><br>
            <?php
            if(isset($_POST['submit'])) {
                $input=$_POST['input'];
                $length=strlen($input);
                $split=str_split($input);
                $j=0;
                $k=0;
                while($k<$length){
                    echo strtoupper($split[$j]);
                    for($i=0;$i<($length-1);$i++) {
                        echo strtolower($split[$j]);
                    }
                    $k++;
                    $j++;
                }
            }
            ?>
        </form>
    </body>
</html>