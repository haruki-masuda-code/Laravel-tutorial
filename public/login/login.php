<?php
session_start();

// ログイン済みなら一覧へ
if (isset($_SESSION['user_id'])) {
    header('Location: /offices');
    exit;
}

// エラーメッセージを取り出して消す(フラッシュ的な使い方)
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
</head>
<body>
  <h1>ログイン</h1>

  <?php if ($error): ?>
    <p style="color: red;"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
  <?php endif; ?>

  <form action="login_action.php" method="post">
    <div>
      <label>メールアドレス:
        <input type="email" name="email" required>
      </label>
    </div>
    <div>
      <label>パスワード:
        <input type="password" name="password" required>
      </label>
    </div>
    <button type="submit">ログイン</button>
  </form>
</body>
</html>