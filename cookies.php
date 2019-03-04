<?php
    if($_GET['pass'] != 'teste'){
        die("<strong>Get out of Here!</strong>");
    }else{
        echo "<strong>Sessions Hijacked</strong>";
    }
?>

<head>
    <style>
        table, tr, th, td { 
            border: 1px solid black;
            border-collapse:collapse;
            padding: 3px;
        }
        th, td {
            padding: 1px 15px;
        }
        table {
            width: 100%;
            margin: 10px 0;
        }
    </style>
</head>

