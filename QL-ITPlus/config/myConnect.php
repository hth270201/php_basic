
<?php
$conn = mysqli_connect('127.0.0.1','root','','php0121e_manager') or die("can't connect dtb");


if ($conn)
{
    mysqli_set_charset($conn,'utf8');
}
else 
{
    echo "Can't connect dtb";
    exit();
}