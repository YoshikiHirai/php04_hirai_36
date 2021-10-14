<?php
require_once('funcs.php');
session_start();
// 管理フラグがある人のみユーザー登録、ユーザー表示がある場合

if($_SESSION['kanri_flg']==1){
    $view_userConf .= "会員一覧※管理者限定";
}else{$view_userConf .= "";
};

e();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ブックマーク登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="index.php">トップ</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="select.php">一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="user.php">新規会員登録</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">Login</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">Logout</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="user_select.php"><?= $view_userConf ?></a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] --
    <!-- Main[Start] -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ブックレビュー投稿</legend>
                <label>本のタイトル：<input type="text" name="book"></label><br>
                <label>書籍URL：<input type="text" name="url"></label><br>
                <label>コメント：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
