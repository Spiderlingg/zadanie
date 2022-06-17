<?php
session_start();



$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"User-Agent: foo\r\n"
  )
);

$context = stream_context_create($opts);

$file = file_get_contents('http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico='.$_SESSION["url"], false, $context);

var_dump($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ICO data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out </a>
    </p>
</body>
</html>