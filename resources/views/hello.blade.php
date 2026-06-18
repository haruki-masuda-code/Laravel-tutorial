<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>施設名：{{ $first->name }}</p>
    <p>住所：{{ $first->address }}</p>
    <p>郵便番号：{{ $first->post_code }}</p>
    <p>募集階：{{ $first->stair }}階</p>
    <p>コメント：{{ $first->comment }}</p>

</body>
</html>