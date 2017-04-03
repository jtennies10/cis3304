<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>w8n2 Text Printer</title>
<style type="text/css">
body {
    background: #eeeeee;
    color: green;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: large;
    padding: 10px;
}
h1 {
    font-size: 24pt;
    font-style: normal;
    font-weight: bolder;
    font-variant: small-caps;
}
</style>
</head>
<body>
 <h1>Josh's Simple Text Printer</h1>
<?php
    $output = $_GET['output'];
    $times = $_GET['times'];
    for($i = 1; $i <= $times; $i++) {
        echo "<p>$i.) $output</p>";
    }
?>
</body>
</html>
 
