<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    error_reporting(0);
    function sum() {
        $a = $_POST['hesoA'];
        $b = $_POST['hesoB'];
        $tong = $a + $b;
        return $tong;
    }
    $kq=sum();
    ?>

    <form action="function.php" method="POST">
        Hệ số A: <input type="text" name="hesoA"><br>
        Hệ số B: <input type="text" name="hesoB">
        <br>
        <input type="hidden" name="form_submitted" value="1"/>
        <input type="submit" value="submit">
    </form>
    <?php
         echo "<h3>Kết quả:$kq</h3>";
    ?>
</body>
</html>