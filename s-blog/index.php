<?php

require_once 'classes/loader.php';

$page = new IndexPage();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>'s blog</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="classes/style.css" type="text/css">
    <style>
        @supports (display: grid) {
            .grid {
                display: grid;
            }
        }
    </style>
</head>
<body>
    <?php $page->render(); ?>
    <script>
        // document.onLoad = alert(screen.height);
        let content = document.getElementById('main');
        content.style.maxHeight = (screen.height-310)+'px';
        content = document.getElementById('footer');
        // content.style.marginTop = (screen.height)+'px';
    </script>
</body>
</html>
