<?php
session_start();
require __DIR__ . '/db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// 空チェック
if ($email === '' || $password === '') {
    $_SESSION['error'] = 'メールアドレスとパスワードを入力してください';
    header('Location: login.php');
    exit;
}

// ユーザーテーブルを検索
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
$stmt->execute(['email' => $email]);
$user = $stmt->fetch();

// いない、またはパスワード不一致ならエラー(文言は同じにする)
if (!$user || !password_verify($password, $user['password'])) {
    $_SESSION['error'] = 'メールアドレスまたはパスワードが間違っています';
    header('Location: login.php');
    exit;
}

// ログイン成功
session_regenerate_id(true);           // セッション固定攻撃対策
$_SESSION['user_id'] = $user['id'];    // セッションにユーザーIDを保存

header('Location: /offices');          // 登録オフィス一覧へ
exit;