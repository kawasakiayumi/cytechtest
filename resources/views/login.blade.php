<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
</head>
<body>
<h2>ログインフォーム</h2>
<p>
            <label for="password">メールアドレス：</label>
            <input type="password" name="password">
        </p>
        <p>
            <label for="password_conf">パスワード：</label>
            <input type="password" name="password_conf">
        </p>
        <form action="product.php" method="POST">
        <p>
            <input type="submit" value="ログイン">
        </p>
        <form action="list.blade.php" method="POST">
        <p>
            <input type="submit" value="新規登録">
        </p>
