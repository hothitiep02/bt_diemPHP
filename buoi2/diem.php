<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        width: 50%;
        height: 450px;
        background-color: #CC99CC;
        border: 2px solid #CC99FF;
        display: flex;
        justify-content: center;
    }
    .container .content>div{
        display: flex;
        align-items: center;
    }

    .input-field{
        width: 250px;
        height: 25px;
        cursor: pointer;
    }
    .s{
        margin-right: 5px;
    }
    .bt{
        margin-left: 25%;
        
    }
    .bt>input{
        margin:10px;
        background-color: #33CCFF;
        border:none;
        border-radius: 5px;
        padding: 8px;
        cursor: pointer;
    }

    .result {
            margin-top: 10px; 
            font-weight: bold; 
            color: red;
        }
</style>
<body>

<?php 
    error_reporting(0);
    $a = $_POST['se1'];
    $b = $_POST['se2'];
    $c = $_POST['year'];
    $kq="";
    $hocSinh="";
    
    function diem($a, $b, $c) {
        $dtb = 0;
        if ($c == 1) {
            $dtb = ($a + $b)/2;
        }
        else if ($c== 2) {
            $dtb = ($a + ($b*3))/4;
        }
        else {
            $dtb = ($a + ($b*4))/5;
        }
            return $dtb;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kq = diem($a, $b, $c); 

        if ($kq > 8) {
            $hocSinh = "Học sinh giỏi";
        } else if ($kq > 7) {
            $hocSinh = "Học sinh khá";
        } else if ($kq > 5) {
            $hocSinh = "Học sinh trung bình";
        } else {
            $hocSinh = "Học sinh yếu";
        }
    }
?>

    <div class="container">
        <div class="content">
            <h1><b>BẢNG ĐIỂM CỦA EM</b></h1>
            <form action="" method="POST">
                <div class="box">
                    <p class="s">Semester1:</p><input id="se1" type="number" name= "se1" value="<?php echo $a ?>"class="input-field">
                </div>
                <div class="box">
                    <p class="s">Semester2:</p><input id="se2" type="number" name= "se2" value="<?php echo $b ?>" class="input-field">
                </div>
                <div class="box">
                    <p class="s">Year:</p>
                    <select name="year" style=" color:red;">
                        <option value="1"> 1 </option>
                        <option value="2" aria-checked=""> 2 </option>
                        <option value="3"> 3 </option>
                    </select>
                </div>
                <div class="box">
                    <p class="s">Summarise:</p> 
                    <input type="number" class="input-field" value="<?php echo $kq ?>">
                </div>
                 
                <div class="result">
                <?php
                        echo $hocSinh; // Hiển thị loại học sinh
                ?>
            </div>
            
                <div class="bt">
                    <input type="submit" name="ok" id="ok" value="OK">
                    <input type="reset" name="cancel" id="cancel" value="Cancel" onclick="window.location.href='http://localhost/Tiep_PHP/Lesson/diem.php'">
                </div>   
            </form> 
        </div>
    </div>
</body>
</html>