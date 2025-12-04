<?php
session_start();

$fullName = "";
$companyName = "";
$email = "";
$age = "";
$message = "";
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["form_data"] = $_POST;
    header("Location: confirm.php");
    exit;
}

$fullName = $_SESSION["form_data"]["fullName"] ?? "";
$companyName = $_SESSION["form_data"]["companyName"] ?? "";
$email = $_SESSION["form_data"]["email"] ?? "";
$age = $_SESSION["form_data"]["age"] ?? "";
$message = $_SESSION["form_data"]["message"] ?? "";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>お問い合わせフォーム</title>
    </head>

    <body>
        <h2>お問い合わせフォーム</h2>
        <form action="contact.php" method="POST">
            <div>
                <ul>
                    <li><a href="https://tng-cytech.com/">トップページ</a></li>
                    <li><a href="https://tng-cytech.com/">人気投稿</a></li>
                    <li><a href="https://tng-cytech.com/">エンジニアおすすめ商品</a></li>
                    <li><a href="https://tng-cytech.com/">エンジニアおすすめ記事</a></li>
                    <li><a href="https://tng-cytech.com/">投稿ページ</a></li>
                </ul>
            </div>
        <table border="3">
            <tr>
                <td>お名前</td>
                <td><input type="text" name="fullName" id="fullName" value="<?php echo $fullName; ?>" required></td>
            </tr>
            <tr>
                <td>会社名</td>
                <td><input type="text" name="companyName" id="companyName" value="<?php echo $companyName; ?>" required></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" required></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><input type="number" name="age" id="age" value="<?php echo $age; ?>" required></td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td><textarea rows="8" cols="40" name="message" id="message" placeholder="お問い合わせ内容" required><?php echo $message; ?></textarea></td>
            </tr>
        </table>
        <input type="submit" value="送信">
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <input type="button" value="押してみてね！" id="changeBackgroundColor" name="changeColor">
    </form>
    <footer id="mainFooter">
        
    </footer>
    <script src="style.js"></script>
    </body>
</html>
