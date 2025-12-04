<?php
session_start();

// データがない場合は入力画面に戻す
if (!isset($_SESSION["form_data"])) {
    header("Location: contact.php"); 
    exit;
}
//データを取得
$formData = $_SESSION["form_data"];
$fullName = isset($formData["fullName"]) ? htmlspecialchars($formData["fullName"], ENT_QUOTES, 'UTF-8'): '';
$companyName = isset($formData["companyName"]) ? htmlspecialchars($formData["companyName"], ENT_QUOTES, 'UTF-8') : '';
$email = isset($formData["email"]) ? htmlspecialchars($formData["email"], ENT_QUOTES, 'UTF-8') : '';
$age = isset($formData["age"]) ? htmlspecialchars($formData["age"], ENT_QUOTES, 'UTF-8') : '';
$message = isset($formData["message"]) ? htmlspecialchars($formData["message"], ENT_QUOTES, 'UTF-8') : '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>お問い合わせフォーム-確認画面</title>
</head>
<body>


<h2>お問い合わせフォーム-確認画面</h2>
    <div>
        <ul>
            <li><a href="https://tng-cytech.com/">トップページ</a></li>
            <li><a href="https://tng-cytech.com/">人気投稿</a></li>
            <li><a href="https://tng-cytech.com/">エンジニアおすすめ商品</a></li>
            <li><a href="https://tng-cytech.com/">エンジニアおすすめ記事</a></li>
            <li><a href="https://tng-cytech.com/">投稿ページ</a></li>
        </ul>
    </div>
<form action="send.php" method="POST">
    <table class="confirm-table" border="3">
        <tr>
            <td>お名前</td>
            <td>
                <input class="confirm-input" type="text" name="fullName" value="<?php echo $fullName;?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>会社名</td>
            <td>
                <input class="confirm-input" type="text" name="companyName" value="<?php echo $companyName;?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <input class="confirm-input" type="email" name="email" value="<?php echo $email;?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>年齢</td>
            <td>
                <input class="confirm-input" type="number" name="age" value="<?php echo $age;?>" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td>お問い合わせ内容</td>
            <td>
                <textarea class="confirm-input" name="message" readonly="readonly"><?php echo $message;?></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" name="send" value="送信">
    <br>

</form>

<form action="contact.php" method="get">
    <button type="button" onclick="history.back()">戻る</button>
</form>
</body>
</html>