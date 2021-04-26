<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ secure_asset('/css/profile.css') }}"
</head>
<body>
  <div id="wrap">
    	@component('components.header')
			@endcomponent
    
    <div id="contnr">
@foreach($members as $member)
      <div id="icon-name">
        @if(isset($member->image_path) && !empty($member->image_path))

        <div id="icon"><img src="{{ secure_asset('storage/images/'.$member->image_path) }}"></div>
        @else
        <img src="{{ secure_asset('storage/image/noimage.png') }}" id="noimage">
        @endif
        <p>{{ Auth::user()['name']}}</p>
      </div>

    </div>
    
  <div id="intr">
    
    <ul id="intr-ul">

        <li class="intr-li"><div class="intr-li1">性別：</div>
            <div class="intr-li2">{{$member->gender}}</div></li>
  
        <li class="intr-li"><div class="intr-li1">地域：</div>
            <div class="intr-li2">{{$member->area}}</div></li>
      
        <li class="intr-li"><div class="intr-li1">生年月日：</div>
            <div class="intr-li2">{{$member->birthday}}</div></li>
      
        <li class="intr-li"><div class="intr-li1">愛車：</div>
            <div class="intr-li2">{{$member->mycar}}</div></li>
            
        <li class="intr-li"><div class="intr-li1">オススメスポット：</div>
            <div class="intr-li2">{{$member->spot}}</div></li>
  
        <li class="intr-li3"><div class="intr-li4">自己紹介文</div>
        <p id="self-introduction">{{$member->self}}</p></li>
        <a href="{{ route('profile.edit',$member->id)}}" id="profile-edit">プロフィールを編集する</a>
    </ul>
  </div>
@endforeach
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">投稿した記事</a>
      <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">いいねした記事</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    <div class="main-content">
      <div class="card">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
  
        <div class="card-body">
          <h5 class="card-title">タイトル</h5>
          <p class="card-text">本文</p>
          <a href="#" class="btn btn-primary">詳細</a>
          <p class="postingTime">投稿日時</p>
        </div>
      </div>
      <div class="card">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
  
        <div class="card-body">
          <h5 class="card-title">タイトル</h5>
          <p class="card-text">本文</p>
          <a href="#" class="btn btn-primary">詳細</a>
          <p class="postingTime">投稿日時</p>
        </div>
      </div>
      <div class="card">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
  
        <div class="card-body">
          <h5 class="card-title">タイトル</h5>
          <p class="card-text">本文</p>
          <a href="#" class="btn btn-primary">詳細</a>
          <p class="postingTime">投稿日時</p>
        </div>
      </div>
      <div class="card">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
  
        <div class="card-body">
          <h5 class="card-title">タイトル</h5>
          <p class="card-text">本文</p>
          <a href="#" class="btn btn-primary">詳細</a>
          <p class="postingTime">投稿日時</p>
        </div>
      </div>
    </div>
    
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="main-content">
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>

      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <p class="card-text">本文</p>
        <a href="#" class="btn btn-primary">詳細</a>
        <a href="#" class="btn btn-primary">いいね</a>
        <p class="postingTime">投稿日時</p>
      </div>
    </div>
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>

      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <p class="card-text">本文</p>
        <a href="#" class="btn btn-primary">詳細</a>
        <a href="#" class="btn btn-primary">いいね</a>
        <p class="postingTime">投稿日時</p>
      </div>
    </div>
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>

      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <p class="card-text">本文</p>
        <a href="#" class="btn btn-primary">詳細</a>
        <a href="#" class="btn btn-primary">いいね</a>
        <p class="postingTime">投稿日時</p>
      </div>
    </div>
    <div class="card">
      <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>

      <div class="card-body">
        <h5 class="card-title">タイトル</h5>
        <p class="card-text">本文</p>
        <a href="#" class="btn btn-primary">詳細</a>
        <a href="#" class="btn btn-primary">いいね</a>
        <p class="postingTime">投稿日時</p>
      </div>
    </div>
  </div></div>

  
    
</div>
</div>
      
</div>

@component('components.footer')
@endcomponent
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

