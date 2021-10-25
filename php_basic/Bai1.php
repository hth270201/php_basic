<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lấy ngẫu nhiên n</title>
</head>
<body>
    <?php
    $n = rand(2,8);
    echo ("n=". rand(2,8)."<br>");
    if ($n % 2 == 0){
        echo "n là số chẵn";
    }
    else{
        echo "n là số lẻ";
    }
    ?>
</body>
</html>