<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>お問い合わせフォーム-送信完了画面</title>
    </head>
</html>
<body>
    <h2>お問い合わせフォーム-送信完了画面</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 確認画面の情報を受け取る
        if (isset($_POST['send'])) {
            // 送信完了画面のHTMLを表示する
            echo "<p>お問い合わせが送信されました。ありがとうございます！</p>";
        }
    }
    ?>
<footer>
    <p><a href="#" onClick="history.go(-2); return false;">お問い合わせフォームに戻る</a></p>
</footer>
</body>