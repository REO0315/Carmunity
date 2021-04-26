<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ secure_asset('/css/profile-edit.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー編集</title>
</head>
<body>
  
  <h1>ユーザー情報の編集</h1>
  <form action="/members/edit" method="POST" enctype='multipart/form-data'>
    {{ csrf_field() }}
    <div id="contnr">
      <div id="icon-name">
        <input type="hidden" name="id" value="{{$member->id}}">
        @if(isset($member->image_path) && !empty($member->image_path))
        <label for="image_path" class="btn">
        <div id="icon"><img src="{{ asset('storage/images/'.$member->image_path) }}" id="img"></div>
        <input id="image_path" type="file"  name="image" onchange="previewImage(this);">
        </label>
        @else
        <label for="image_path" class="btn">
        <div id="icon"><img src="{{ secure_asset('storage/image/noimage.png') }}" id="img"></div>
        <input id="image_path" type="file"  name="image" onchange="previewImage(this);">
        </label>
        @endif
      </div>
  
    </div>

    <table border="1">
      
      <tr>
        <th><label>性別：</label></th>
        <th><span class="required">必須</span></th>
        <td>
          <span class="radio">
            <input type="radio" id="gender1" name="gender" value="男性" @if(old('gender',$member->gender) == "男性")checked @endif><label class="gender_horizon" for="gender1">男性</label >
              <input type="radio" id="gender2" name="gender" value="女性" @if(old('gender',$member->gender) == "女性")checked @endif><label class="gender_horizon" for="gender2">女性</label>
            </span>
          </td>      
          
        </tr>
        
        <tr>
          <th><label for="birthday1">生年月日：</label></th>
          <th><span class="required">必須</span></th>
          <td><p>（例）1990年1月→199001</p><input type="text" name="birthday" id="birthday1" value="{{$member->birthday}}"></td>
        </tr>
        
        <tr>
          <th><label for="prefectures">お住まいの地域：</label></th>
          <th><span class="any">任意</span></th>
          <td><select name="area" id="prefectures">
            @foreach(config('pref') as $key => $score)
              <option value="{{ $score }}" @if(old('area',$member->area) == $score) selected @endif>{{ $score }}</option>
            @endforeach
          </select></td>
        </tr>

        <tr>
          <th><label for="mycar1">愛車：</label></th>
          <th><span class="any">任意</span></th>
          <td><input type="text" name="mycar" id="mycar1" value="{{$member->mycar}}"></td>
        </tr>
        
        <tr>
          <th><label for="spot1">オススメスポット：</label></th>
          <th><span class="any">任意</span></th>
          <td><input type="text" name="spot" id="spot1" value="{{$member->spot}}"></td>
        </tr>
        
      </table>
      <div id="self-introduction">
        <p>自己紹介文</p>
        <textarea name="self" value="{{$member->self}}"></textarea>
      </div>
      <input type="submit" value="更　新" id="btn">
    </form>
    
    <script>
  function previewImage(obj)
  {
    var fileReader = new FileReader();
    fileReader.onload = (function() {
      document.getElementById('img').src = fileReader.result;
    });
    fileReader.readAsDataURL(obj.files[0]);
  }
</script>
</body>
</html>