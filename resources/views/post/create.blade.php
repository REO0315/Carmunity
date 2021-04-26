<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

  <!--Style-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--js-->
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

  <link rel="stylesheet" href="{{ secure_asset('/css/post.css') }}">
  <title>記事投稿画面</title>
</head>
<body>
  
  <div id="wrap">
      
    <h1 id="h1">新規投稿を追加</h1>
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <label class="text-title">記事のタイトル：<input type="text"l name="title" id="title"></label>
      <label class="text-tag">タグを追加する：<input type="text" name="tag" value="" id="tag"></label>
      
      
      <div class="form-group">
        <textarea name="text" class="form-control" placeholder="ここに本文を入力してください"></textarea>
        <div id="word-count">文字数：○○文字</div>
        
        <div id="contain">
          <div id="period">掲載期間</div>
          <div id="time"><a href="">日時を設定する</a></div>
          <div id="none-time"><a href="">日時を設定しない</a></div>
          <div id="comment">※日時を指定した場合、指定した時間になった瞬間投稿が削除されます。</br>日時を指定しなかった場合は投稿から１ヶ月後自動で削除されます。</div>
          <div id="icon">見出し画像の設定</div>
          <div id="config"><a href="">画像を設定・解除</a></div>
        </div>
        
      </div>
      
      <div><input type="submit" value="投　稿" id="post"></div>
        
    </form>
  </div>

<script>
 CKEDITOR.replace('text',{
   extraPlugins:'codesnippet',
   codeSnippet_theme:'dark',
   height:'370px',
   removeButtons:'Unlink,Anchor, NewPage,DocProps,Preview,Print,Templates,Cut,Copy,Paste,PasteText,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Scayt,RemoveFormat,Outdent,Indent,Blockquote,Styles,About'

   });

</script>
</body>
</html>