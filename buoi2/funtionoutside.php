<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- function sum($hsa,$hsb) {
        $tong = $hsa +$hsb;
    }
    $a =$_POST["hsa"];
    $b =$_POST["hsb"];
    $kq=sum($a,$b); -->
    <?php 
        function check ($hs) {
            if ($hs%2==0){
                echo "so chan: ";
            } else {
                echo "so le: ";
            }
        }
        $a= $_POST["hs"];
        $kq = check ($a);
    ?>

    <form action="function.php" method="POST">
        Nhập số: <input type="text" name="hs"><br>
        <br>
        <input type="hidden" name="form_submitted" value="1"/>
        <input type="submit" value="submit">
    </form>
    <?php
         echo "<h3>Kết quả:$kq</h3>";
    ?>
</body>
</html>