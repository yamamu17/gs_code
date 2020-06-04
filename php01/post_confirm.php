<?php
function h($value){
    return htmlspecialchars(value,ENT_QUOTES);

}

$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];
$date = implode(',',);

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $date."\r\n");
fclose($file);


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<form method = "post" action="post_confirm.php">
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>