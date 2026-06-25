<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>情報登録</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div class="container small">
    <h1>情報を登録</h1>
    
    <form id="officeForm" action="{{ route('office.store') }}" method="POST">
      @csrf
      <fieldset>
        <div class="form-group">
          <label for="name">施設名<span class="badge badge-danger ml-2">必須</span></label>
          <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" maxlength="50">
          @if ($errors->has('name'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('name') }}
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="address">ビル名<span class="badge badge-danger ml-2">必須</span></label>
          <input type="text" class="form-control" name="address" id="address">
          @if ($errors->has('address'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('address') }}
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="post_code">郵便番号</label>
          <input type="text" class="form-control" name="post_code" id="post_code"  placeholder="1234567（ハイフンなし）">
          @if ($errors->has('post_code'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('post_code') }}
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="stair">募集階<span class="badge badge-danger ml-2">必須</span></label>
          <input type="number" class="form-control" name="stair" id="stair">
          @if ($errors->has('stair'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('stair') }}
          </span>
          @endif
        </div>

        <div class="form-group">
          <label for="comment">コメント</label>
          <textarea class="form-control" name="comment" id="comment" rows="4">お問合せください</textarea>
          @if ($errors->has('comment'))
          <span class="invalid-feedback" role="alert">
            {{ $errors->first('comment') }}
          </span>
          @endif
        </div>
      </fieldset>

      <button type="submit" class="btn btn-success">
        {{ __('登録') }}
      </button>
    </form>
  </div>

  <script>
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $("[name='csrf-token']").attr("content") },
    })

    $('.btn-success').on('click',function(e){
        e.preventDefault();
        let formData = $('#officeForm').serialize();
        $.ajax({
            url: "{{ route('office.store') }}",
            method: "POST",
            data: formData,
            dataType: "json"
        }).done(function(res){
            console.log(res);
            alert('登録しました');
        }).fail(function(){
            alert('エラーが発生しました');
        })
    });
  </script>
</body>
</html>
