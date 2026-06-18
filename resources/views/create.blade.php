<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>情報登録</title>
</head>
<body>
  <div class="container small">
    <h1>情報を登録</h1>
    
    <form action="{{ route('office.store') }}" method="POST">
      @csrf
      <fieldset>
        <div class="form-group">
          <label for="name">施設名<span class="badge badge-danger ml-2">必須</span></label>
          <input type="text" class="form-control" name="name" id="name" maxlength="50" required>
        </div>

        <div class="form-group">
          <label for="address">ビル名<span class="badge badge-danger ml-2">必須</span></label>
          <input type="text" class="form-control" name="address" id="address" required>
        </div>

        <div class="form-group">
          <label for="post_code">郵便番号</label>
          <input type="text" class="form-control" name="post_code" id="post_code" minlength="7" maxlength="7" pattern="\d{7}" placeholder="1234567（ハイフンなし）">
        </div>

        <div class="form-group">
          <label for="stair">募集階<span class="badge badge-danger ml-2">必須</span></label>
          <input type="number" class="form-control" name="stair" id="stair" required>
        </div>

        <div class="form-group">
          <label for="comment">コメント</label>
          <textarea class="form-control" name="comment" id="comment" rows="4">お問合せください</textarea>
        </div>
      </fieldset>

      <button type="submit" class="btn btn-success">
        {{ __('登録') }}
      </button>
    </form>
  </div>
</body>
</html>
