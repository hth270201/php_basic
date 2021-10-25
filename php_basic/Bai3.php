<!DOCTYPE html>
<html lang="en">
<head>device-width
    <title>Tổng các số nguyên</title>
</head>
<body>
    <?php
    $sum = 0;
    for ($i=1; $i <= 50; $i++){
        $sum += $i;
    }
    echo "Tổng dãy số từ 1 đến 50 là $sum"."<br>";
    ?>
</body>
</html>