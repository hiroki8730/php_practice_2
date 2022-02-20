<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>testbord</title>
</head>
<body>
    <form action="bord.php" method="post">
        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name" autocomplete="off">
        </div>
        <div>
            <label for="message">内容</label>
            <input type="text" id="message" name="message" autocomplete="off">
        </div>
        <input type="submit" name="send" value="送信する">
    </form>
    <h2>表示欄</h2>
    <div></div>
</body>
</html>