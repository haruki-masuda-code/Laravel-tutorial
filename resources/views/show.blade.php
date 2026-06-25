<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>オフィス一覧</title>
  <!-- 💡 デザインを綺麗にするためにBootstrapのURLを入れています -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">登録オフィス一覧</h1>
    
    <a href="{{ route('office.create') }}" class="btn btn-primary mb-3">新規登録画面へ</a>

    <!-- 💡 データベースの中身を表示するテーブル（表） -->
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>施設名</th>
          <th>ビル名</th>
          <th>郵便番号</th>
          <th>募集階</th>
          <th>コメント</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $office)
        <tr>
          <td>{{ $office->id }}</td>
          <td>{{ $office->name }}</td>
          <td>{{ $office->address }}</td>
          <td>{{ $office->post_code ?? '未登録' }}</td>
          <td>{{ $office->stair }} 階</td>
          <td>{{ $office->comment }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
