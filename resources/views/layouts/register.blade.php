<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign Up</title>
  <style>
  	html{
  margin: 0;
  height: 100%;
  width: 100%;
}

body{
  width:100%;
  height: 100%;
  margin: 0;
  padding: 0;
}


h1{
  margin: 0;
  margin-bottom:40px ;
  padding:14px ;
  border-left:16px solid gray ;
  background-color: silver;
}

h2{
  border-bottom: 1px solid orange;
  border-left:16px solid orange ;
  padding-left:14px ;
}

table{
  width: 70%;
  border-radius: 5px;
}

table tr th:nth-of-type(1){
  text-align: right;
  border-right: dotted 1px black;
  width: 30%;
  font-size: 20px;
  background-color: wheat;
}

table tr th:nth-of-type(2){
  text-align: center;
  border-left: 1px dotted black;
  width: 10%;
  background-color: wheat;

}

th,td{
  padding: 20px 3px;
}

#mail1, #password1,#name1,#birthday1{
  width: 95%;
  line-height: 24px;
  border:solid 1px black;
}

p{
  margin: 0;
  margin-top: 4px;
  font-size: 14px;
}

.required{
  color: white;
  background-color: red;
  padding: 4px;
}


select{
  width: 40%;
  font-size: 16px;
  padding: 4px 0;
}

.radio{
  font-size: 18px;
}

#btn{
  background-color: orange;
  margin-top: 12px;
  width: 10%;
  padding: 6px;
  font-size: 18px;
  box-shadow: 0 3px 3px black;
  cursor: pointer;
  color: white;
  outline: none;
  border: none;
}

#btn:hover{
  opacity: 0.8;
}

#btn:active{
  margin-top: 16px;
  box-shadow: 0 2px 2px black;
}

#footer{
  width: 100%;
  text-align: center;
  padding: 14px 0;
}



  </style>
</head>
<body>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <h1>新規会員登録</h1>
    <h2>メールアドレス・パスワードの入力</h2>
      <table border="1">
        <tr>
          <th><label for="name1">ニックネーム：</label></th>
          <th><span class="required">必須</span></th>
          <td><input type="text" name="name" id="name1" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></td>
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </tr>
        
        <tr>
          <th><label for="mail1">メールアドレス：</label></th>
          <th><span class="required">必須</span></th>
          <td><input type="email" name="email" id="mail1" value="{{ old('email') }}" required autocomplete="email"></td>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </tr>

        <tr>
          <th><label for="password1">パスワード：</label></th>
          <th><span class="required">必須</span></th>
          <td><p>8文字以上16文字以下の半角英数字で入力してください</p><input type="password" name="password" id="password1" required autocomplete="new-password"></br><p>パスワードの再入力（確認用）</p><input type="password" name="password_confirmation" id="password1" required autocomplete="new-password"></td>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </tr> 
      </table>

    
      <div id="footer"><input type="submit" value="次へ" id="btn"><a href="{{ route('login') }}"></a></div>
  </form>
</body>
</html>