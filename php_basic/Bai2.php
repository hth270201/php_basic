<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tính tiền điện</title>
</head>
<body>
    <?php
    $n = (rand(100,1000));
    echo ("n=".rand(100,1000)."<br>");
    if ($n <= 300){
        echo 'Tiền = '. $tien = $n*2000;
    }
    else if($n <= 500){
        echo 'Tiền = '. $tien = 300*2000 + ($n - 300)*3000;
    }
    else if($n <= 600){
       echo 'Tiền = '. $tien = 300*2000 + 200*3000 + ($n - 500)*4000;
    }
    else if($n <=1000){
        echo 'Tiền = '. $tien = 300*2000 + 200*3000 + 100*4000 + ($n-600)*5000;
    }
    ?>
</body>
</html>