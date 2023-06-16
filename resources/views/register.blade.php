<?php

//エラーメッセージの表示
$err = [];

$password_conf = filter_input(INPUT_POST, 'password_conf');
if($password !== $password_conf){
    $err[] = '確認用パスワードと異なっています。';
} 

if(count($err) === 0){
    //ユーザーを登録しする処理

    //【php初級】ゆーざー登録機能作成とログイン機能＃３
    UserLogic::createUser();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザログイン画面</title>
</head>
<body>
<h2></h2>
<!-- エラーがある場合に該当エラーを表示させる　-->
    <?php if(count($err) > 0) :?>
        <?php foreach($err as $e) :?>
            <p><?php echo $e ?></p>
<?php endforeach ?>

<!--　エラーがない場合戻るボタンのみの表示　-->
<?php else: ?>
    <?php endif ?>
    <a href="./login.blade.php">戻る</a>
</body>
</html>