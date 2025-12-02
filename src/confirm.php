<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>お問い合わせフォーム-確認画面</title>
</head>
<body>

<h2>お問い合わせフォーム-確認画面</h2>

<?php
if (!isset($_SESSION["form_data"])){
        //contact.phpに強制的に戻す
        header("Location: contact.php?error=1");
        exit;
}

$formData = $_SESSION["form_data"];

$fullName = isset($formData["fullName"]) ? htmlspecialchars($formData["fullName"]) : '';
$companyName = isset($formData["companyName"]) ? htmlspecialchars($formData["companyName"]) : '';
$email = isset($formData["email"]) ? htmlspecialchars($formData["email"]) : '';
$age = isset($formData["age"]) ? htmlspecialchars($formData["age"]) : '';
$message = isset($formData["message"]) ? htmlspecialchars($formData["message"]) : '';

?>

<div class="container">
    <ul>
        <li><a href="https://tng-cytech.com/">トップページ</a></li>
        <li><a href="https://tng-cytech.com/">人気投稿</a></li>
        <li><a href="https://tng-cytech.com/">エンジニアおすすめ商品</a></li>
        <li><a href="https://tng-cytech.com/">エンジニアおすすめ記事</a></li>
        <li><a href="https://tng-cytech.com/">投稿ページ</a></li>
    </ul>
    <form action="send.php" method="POST">
        <table border=3>
            <tr>
                <td>お名前</td>
                <td><input class="confirm-input" type="text" name="fullName" value="<?php echo $_POST["fullName"];?>"></td>
            </tr>
            <tr>
                <td>会社名</td>
                <td><input class="confirm-input" type="text" name="companyName" value="<?php echo $_POST["companyName"]; ?>"></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input class="confirm-input" type="email" name="email" value="<?php echo $_POST["email"];?>"></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><input class="confirm-input" type="age" name="age" value="<?php echo $_POST["age"];?>"></td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td><textarea name="message" readonly="readonly" class="confirm-message"><?php echo htmlspecialchars($_POST["message"]);?></textarea></td>
            </tr>
        </table>
        <input type="submit" name="send" value="送信"/>
        <br> 
        <input type="submit" value="戻る">
    </form>
</body>
</html>