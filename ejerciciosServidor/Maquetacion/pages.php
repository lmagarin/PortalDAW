<?php
    include("includes/inner_top_page.php");
    include("includes/inner_header.php");

    if (!isset($_GET['page'])) {
        include("index.php");
    } else {
        include("pages/".$_GET['page'].".php");
    }

    include("includes/inner_aside.php");
    include("includes/inner_footer.php");
?>