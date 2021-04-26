@extends('layouts.app')
@section('content')
      <div class="contain">
        <!-- カルーセルで画像を時間ごとに表示 -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div id="carousel-image"><img src="{{ asset('image/noimage.png') }}" class="d-block w-100" alt="..."></div>
          </div>
          <div class="carousel-item">
            <div id="carousel-image"><img src="{{ asset('image/noimage.png') }}" class="d-block w-100" alt="..."></div>
          </div>
          <div class="carousel-item">
            <div id="carousel-image"><img src="{{ asset('image/noimage.png') }}" class="d-block w-100" alt="..."></div>
          </div>
        </div>
        <a class="carousel-control-prev" href="{{url('#carouselExampleFade')}}" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="{{url('#carouselExampleFade')}}" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>

        <!-- containの中にmainの作成 -->
        <main>
        
          <!-- 左側のメニューの作成 -->
          <div class="left-side-menu">
            <ul><p>エリアから探す</p>
              <!-- 都道府県ごとの記事の検索画面の設定 -->
              <!-- 下線を繋げないためにboxを作成 -->
              <div class="left-side-menu-ul-box">
                <li><a href="#">北海道</a></li>
                <li><a href="#">青森県</a></li>
                <li><a href="#">岩手県</a></li>
                <li><a href="#">宮城県</a></li>
                <li><a href="#">秋田県</a></li>
                <li><a href="#">山形県</a></li>
                <li><a href="#">福島県</a></li>
                <li><a href="#">茨城県</a></li>
                <li><a href="#">栃木県</a></li>
                <li><a href="#">群馬県</a></li>
                <li><a href="#">埼玉県</a></li>
                <li><a href="#">千葉県</a></li>
                <li><a href="#">東京都</a></li>
                <li><a href="#">神奈川県</a></li>
                <li><a href="#">新潟県</a></li>
                <li><a href="#">富山県</a></li>
                <li><a href="#">石川県</a></li>
                <li><a href="#">福井県</a></li>
                <li><a href="#">山梨県</a></li>
                <li><a href="#">長野県</a></li>
                <li><a href="#">岐阜県</a></li>
                <li><a href="#">静岡県</a></li>
                <li><a href="#">愛知県</a></li>
                <li><a href="#">三重県</a></li>
                <li><a href="#">滋賀県</a></li>
                <li><a href="#">京都府</a></li>
                <li><a href="#">大阪府</a></li>
                <li><a href="#">兵庫県</a></li>
                <li><a href="#">奈良県</a></li>
                <li><a href="#">和歌山県</a></li>
                <li><a href="#">鳥取県</a></li>
                <li><a href="#">島根県</a></li>
                <li><a href="#">岡山県</a></li>
                <li><a href="#">広島県</a></li>
                <li><a href="#">山口県</a></li>
                <li><a href="#">徳島県</a></li>
                <li><a href="#">香川県</a></li>
                <li><a href="#">愛媛県</a></li>
                <li><a href="#">高知県</a></li>
                <li><a href="#">福岡県</a></li>
                <li><a href="#">佐賀県</a></li>
                <li><a href="#">長崎県</a></li>
                <li><a href="#">熊本県</a></li>
                <li><a href="#">大分県</a></li>
                <li><a href="#">宮崎県</a></li>
                <li><a href="#">鹿児島県</a></li>
                <li><a href="#">沖縄県</a></li>
              </div>
            </ul>
          </div>
          <!-- 一番のメインをなる記事の一覧画面の設定 -->
          <div class="main-content">
          @foreach($posts as $post)
            <!-- カードにて記事の内容やサムネイルを見ることができるように設定 -->
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>

              <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->text}}</p>
                <a href="#" class="btn btn-primary">詳細</a>
                <a href="#" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>
          @endforeach
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
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>

            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
              
              <div class="card-body">
                <h5 class="card-title">タイトル</h5>
                <p class="card-text">本文</p>
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>

            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
              
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>

            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
              
              <div class="card-body">
                <h5 class="card-title">タイトル</h5>
                <p class="card-text">本文</p>
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>

            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
              
              <div class="card-body">
                <h5 class="card-title">タイトル</h5>
                <p class="card-text">本文</p>
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>

            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="150" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="35%" y="50%" fill="#dee2e6" dy=".3em">サムネイル画像</text></svg>
              
              <div class="card-body">
                <h5 class="card-title">タイトル</h5>
                <p class="card-text">本文</p>
                <a href="" class="btn btn-primary">詳細</a>
                <a href="" class="btn btn-primary">いいね</a>
                <p class="postingTime">投稿日時</p>
              </div>
            </div>


          </div>
          <!-- 右側のメニューの一覧設定   -->
          <!-- チェックボックスを応用してアコーディオン型のメニューにした -->
          <div class="light-side-menu">
            <label for="menu-bar01">マイページ</label>
            <input type="checkbox" id="menu-bar01" class="accordion">
            <ul id="link01">
              <li><a href="{{route('profile.index')}}">プロフィール</a></li>
              <li><a href="">投稿した記事</a></li>
              <li><a href="">いいねした記事</a></li>
            </ul>
            

            <label for="menu-bar03">記事</label>
            <input type="checkbox" id="menu-bar03" class="accordion">
            <ul id="link03">
              <li><a href="">全ての記事</a></li>
              <li><a href="">人気の高い記事</a></li>
              <li><a href="">募集期間終了間近の記事</a></li>
            </ul>

            <label for="menu-bar04">ヘルプ</label>
            <input type="checkbox" id="menu-bar04" class="accordion">
            <ul id="link04">
              <li><a href="">よくある質問</a></li>
            </ul>
            <a href="{{ route('post.create') }}"><button>投稿する</button></a>
          </div>
      
        </main>
      </div>
 @endsection
    