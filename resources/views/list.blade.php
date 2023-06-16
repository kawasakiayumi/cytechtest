<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザ新規登録画面</title>

<!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer>
    </script>
<!-- assetとはlaravelではpublicの配下という意味になる -->

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/signin.css') }}" rel="stylesheet">

</head>
<body>
    <h2>ユーザ新規登録フォーム</h2>
    <form action="login.blade.php" method="POST">
        <p>
            <label for="username">ユーザ名：</label>
            <input type="text" name="username">
        </p>
        <p>
            <label for="email">メールアドレス：</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="password">パスワード：</label>
            <input type="password" name="password">
        </p>
        <p>
            <label for="password_conf">パスワード（確認用）：</label>
            <input type="password" name="password_conf">
        </p>
        <p>
            <input type="submit" value="登録">
        </p>
        <form action="register.blade.php" method="POST">
        <p>
            <input type="submit" value="戻る">
        </p>
    </form>
</body>
</html>
