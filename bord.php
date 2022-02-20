<?php
$name = "";
$message = "";

if(isset($_POST['send']) === true){
    $name = $_POST["name"];
    $message = $_POST["message"];
    #テキストファイルに$name,$messageを書き込む処理
}

$fp = fopen("bord.txt", "a");
fwrite($fp,"名前:" . $name . "\t" . "メッセージ:" . $message . "\n");
fclose($fp);

echo $name;
echo "<br>";
echo $message;

?>