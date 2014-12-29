<?php

$birthday = $_POST["birthday"];

$youbi = date("l", strtotime($birthday));

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charaset="UTF-8" />
    <title>PHPの練習</title>
</head>
<body>
    <h1>PHPのレンシュウ</h1>
    <p><?php echo htmlspecialchars($youbi); ?></p>
</body>
</html>



