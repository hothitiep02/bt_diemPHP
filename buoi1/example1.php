<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        display: grid;
        grid-template-columns: repeat(6, 100px); /* 6 cột, mỗi cột 100px */
        grid-gap: 5px; /* Khoảng cách giữa các khối */
    }

    .squal {
        background-color: blue;
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <div class="container">
        <?php
            // Vòng lặp ngoài để tạo hàng
            for ($i=0;$i<6;$i++) {
                // Vòng lặp trong để tạo cột
                for ($j=0;$j<3;$j++){
                    echo "<div class='squal'></div>";
                }
            }
        ?>
    </div>
</body>
</html>
