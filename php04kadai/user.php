<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>User登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="index.php">トップへ</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="user_act.php">
        <div class="jumbotron">
            <fieldset>
                <legend>会員登録</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>ID：<input type="text" name="lid"></label><br>
                <label>パス：<input type="text" name="lpw"></label><br>
                <input type="hidden" name="kanri_flg" value=0>
                <input type="hidden" name="life_flg" value=0>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
