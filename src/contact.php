<?php
session_start();
//フォームから送信されたデータを保持するための場所
$fullName = "";
$companyName = "";
$email = "";
$age = "";
$message = "";


//エラーコードを格納する場所
$error = [];

//必須項目の設定とエラーが出た時の表示名
$required_fields = [
    "fullName" => "お名前",
    "email" => "メールアドレス",
    "message" => "お問い合わせ内容"
];

//ページアクセス時にエラーチェックをスキップ
if($_SERVER["REQUEST_METHOD"]== "POST"){

//再入力防止で値を保持
    $fullName = isset($_POST["fullName"])?htmlspecialchars($_POST["fullName"]) : "";
    $companyName = isset($_POST["companyName"])? htmlspecialchars($_POST["companyName"]) : "";
    $email = isset($_POST["email"])?htmlspecialchars($_POST["email"]) : ""; 
    $age = isset($_POST["age"])?htmlspecialchars($_POST["age"]) : "";
    $message = isset($_POST["message"])?htmlspecialchars($_POST["message"]) : "";


    foreach($required_fields as $field_name => $field_label){
        if(!isset($_POST[$field_name]) || empty(trim($_POST[$field_name]))){
            $error[$field_name]= "「". $field_label . "」が入力されていません。";
        }
    }


//エラーがなかったらconfirmに移動
    if(empty($error)){
        $_SESSION["form_data"]=$_POST;
        header("Location: confirm.php");
        exit;
    }
}

?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <div class="container">
        <h2>お問い合わせフォーム</h2>

        <ul>
            <li><a href="https://tng-cytech.com/">トップページ</a></li>
            <li><a href="https://tng-cytech.com/">人気投稿</a></li>
            <li><a href="https://tng-cytech.com/">エンジニアおすすめ商品</a></li>
            <li><a href="https://tng-cytech.com/">エンジニアおすすめ記事</a></li>
            <li><a href="https://tng-cytech.com/">投稿ページ</a></li>
        </ul>

        <form action="contact.php" method="post">
            <table border="3">
                <tr>
                    <td>お名前</td>
                    <td>
                        <?php if (isset($error["fullName"])) echo "<p style='color: red;'>" . $error["fullName"] . "</p>";?>
                        <input type="text" name="fullName" value="<?php echo $fullName;?>">
                    </td>
                </tr>
                <tr>
                    <td>会社名</td>
                    <td><input type="text" name="companyName" value="<?php echo $companyName;?>"></td>
                </tr>
                <tr>
                    <td>メールアドレス</td>
                    <td>
                        <?php if (isset($error["email"])) echo "<p style='color: red;'>" . $error["email"] . "</p>";?>
                        <input type="email" name="email" value="<?php echo $email;?>">
                    </td>
                </tr>
                <tr>
                    <td>年齢</td>
                    <td><input type="text" name="age" value="<?php echo $age;?>"></td>
                </tr>
                <tr>
                    <td>お問い合わせ内容</td>
                    <td>
                        <?php if (isset($error["message"])) echo "<p style='color: red;'>" . $error["message"] . "</p>";?>
                        <textarea cols="40" rows="8" name="message" placeholder="お問い合わせ内容"><?php echo $message;?></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" name="confirm" value="送信"/>
            <p>横のボタンを押すとfooterの背景色が変わります。</p>
            <input id="cc" type="button" name="changeColor" value="押してみてね！">
        </form>
        </div>
        <footer id="main-footer">
        
        </footer>
        <script src="style.js"></script>
    </body>
</html>