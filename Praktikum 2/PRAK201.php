<html>
    <body>
        <form action=" " method="POST">
            Nama 1 <input type="text" name="nama1" id=" "><br>
            Nama 2 <input type="text" name="nama2" id=" "><br>
            Nama 3 <input type="text" name="nama3" id=" "><br>
            <button type="submit" name="submit">Urutkan</button>
        </form>
    </body>
</html>

<?php 
if (isset($_POST["submit"])) {
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
$nama = [$nama1, $nama2, $nama3];
sort($nama);
foreach( $nama as $x)
echo "$x <br>";
}
?>