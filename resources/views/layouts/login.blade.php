<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="{{ secure_asset('/css/login.css') }}"
</head>
<body>
  <div id="wrap">
    <h1>Carmunity</h1>

     <form method="POST" action="{{ route('login') }}">
        @csrf
      <input type="email" id="mail1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocusplaceholder="メールアドレス">
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      
      <input type="password" name="password" id="password1" placeholder="パスワード" required autocomplete="current-password">
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      
      
      <div class="form-group">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label samazon-check-label w-100" for="remember">
                次回から自動的にログインする
              </label>
          </div>
      </div>
      
      <input type="submit" value="ログイン" id="login">
      @if (Route::has('password.request'))
      <a class="btn btn-link mt-3 d-flex justify-content-center samazon-login-text" href="{{ route('password.request') }}">
          パスワードをお忘れの場合
      </a>
      @endif
      
    </form>
    
      <div id="sign">
        <h3>会員未登録の方はこちら</h3>
        <a href="{{ route('register') }}" id="new">新規会員登録</a>
      </div>
      
  </div>
</body>
</html>