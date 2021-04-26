<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ secure_asset('/css/profile-register.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー編集</title>
</head>
<body>
  
  <h1>ユーザー情報の入力</h1>
  <form method="POST" action="/members">
    {{ csrf_field() }}
    
    <table border="1">
      
      <tr>
        <th><label>性別：</label></th>
        <th><span class="required">必須</span></th>
        <td>
          <span class="radio">
            <input type="radio" name="gender" value="男性"><label class="gender_horizon">男性</label >
              <input type="radio" name="gender" value="女性"><label class="gender_horizon">女性</label>
            </span>
          </td>      
          
        </tr>
        
        <tr>
          <th><label for="birthday1">生年月日：</label></th>
          <th><span class="required">必須</span></th>
          <td><p>（例）1990年1月1日→19900101</p><input type="text" name="birthday" id="birthday1"></td>
        </tr>
        
        <tr>
          <th><label for="prefectures">お住まいの地域：</label></th>
          <th><span class="any">任意</span></th>
          <td><select name="area" id="prefectures">
            @foreach(config('pref') as $key => $score)
              <option value="{{ $score }}">{{ $score }}</option>
            @endforeach
          </select></td>
        </tr>

        <tr>
          <th><label for="mycar1">愛車：</label></th>
          <th><span class="any">任意</span></th>
          <td><input type="text" name="mycar" id="mycar1"></td>
        </tr>
        
        <tr>
          <th><label for="spot1">オススメスポット：</label></th>
          <th><span class="any">任意</span></th>
          <td><input type="text" name="spot" id="spot1"></td>
        </tr>
        
      </table>
      <div id="self-introduction">
        <p>自己紹介文</p>
        <textarea name="self"></textarea>
      </div>
      <div><input type="submit" value="登  録" id="btn"></div>
    </form>
</body>
</html>