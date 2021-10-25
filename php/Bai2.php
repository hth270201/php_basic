<?php
    function getSum($x,$y){
        $sum = $x + $y;
        return $sum;
    }
    function getSub($x,$y){
        $sub = $x -$y;
        return $sub;
    }   
    function getMul($x,$y){
        $mul = $x * $y;
        return $mul;
    }  
    function getDiv($x, $y){
        $div = $x / $y;
        return $div;
    }  
    function getDivTR($x, $y){
        $dtr = $x % $y;
        return  $dtr;
    }     
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực hành toán tử</title>
    <style>
    table,
    th,
    input {
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        <table>
            <thead>
                <tr>
                    <th colspan="2">
                        Thực hành toán tử
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Nhập số thứ 1</th>
                    <th>
                        <input type="text" name="input1" id="input1" value="<?php if(isset($_POST["input1"])){ echo $_POST["input1"] ;}?>">
                    </th>
                </tr>
                <tr>
                    <th>Nhập số thứ 2</th>
                    <th>
                        <input type="text" name="input2" id="input2" value="<?php if(isset($_POST['input2'])){ echo $_POST['input2'];}?>">
                    </th>
                </tr>
                <tr>
                    <th>Chọn phép tính</th>
                    <th>
                        <input type="radio" name="calculate" value="+" <?php if(isset($_POST['calculate']) && $_POST["calculate"] == "+") {echo "checked";} ?>>+
                        <input type="radio" name="calculate" value="-" <?php if(isset($_POST['calculate']) && $_POST["calculate"] == "-") {echo "checked";} ?>>-
                        <input type="radio" name="calculate" value="*" <?php if(isset($_POST['calculate']) && $_POST["calculate"] == "*") {echo "checked";} ?>>*
                        <input type="radio" name="calculate" value="/" id="div" <?php if(isset($_POST['calculate']) && $_POST["calculate"] == "/") {echo "checked";} ?>>/
                        <input type="radio" name="calculate" value="%" id="dtr" <?php if(isset($_POST['calculate']) && $_POST["calculate"] == "%") {echo "checked";} ?>>%
                    </th>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="submit" id="submit">Kết quả</button>
                    </th>
                    <th>
                        <?php
                        if(isset($_POST['submit'])){
                            if($_POST['calculate'] == '+'){
                                echo    getSum($_POST['input1'], $_POST['input2']);
                            }
                            if($_POST['calculate'] == '-'){
                                echo    getSub($_POST['input1'], $_POST['input2']);
                            }
                            if($_POST['calculate'] == '*'){
                                echo    getMul($_POST['input1'], $_POST['input2']);
                            }
                            if($_POST['calculate'] == '/'){
                                echo    getDiv($_POST['input1'], $_POST['input2']);
                            }
                            if($_POST['calculate'] == '%'){
                                echo    getDivTR($_POST['input1'], $_POST['input2']);
                            }
                        }
                        ?>
                    </th>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
        echo    "<pre>";
        print_r($_POST);
        echo    "</pre>";
    ?>
    <script src="jquery-3.6.0.min.js"></script>
    <script>
    $("#submit").click(function() {
        if ($("#input1").val() == "" || $("#input2").val() == "") {
            alert("Không được để trống input");
            return false;
        }
        if (isNaN($("#input1").val()) || isNaN($("#input2").val())) {
            alert("Input phải là số");
            return false;
        }
        var arr = $("input[type='radio']");
        if (arr[3].checked || arr[4].checked) {
            if ($("#input2").val() == 0) {
                alert("Đối với phép chia input 2 phải khác 0");
                return false;
            }
        }
    });
    </script>
</body>

</html>