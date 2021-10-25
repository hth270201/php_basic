<?php
include_once "layout/head.php";
?>
<body>
    <!-- Header Section Begin -->
    <?php
    include_once "layout/header.php";
    ?>
    <!-- Header End -->
    <?php
    $pages="home";
    if(isset($_GET["pages"])){
        $pages = $_GET["pages"];
    }
    include_once "pages/".$pages.".php";
    ?>
    <!-- Footer Section Begin -->
    <?php
    include_once "layout/footer.php";
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php 
    include_once "layout/script.php";
    ?>
</body>

</html>