{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'about')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
  
     
     <!-- ======= 初めての方へ Section ======= -->
     <section id="about" class="about">
          <div class="container">
      <div class="menu-title">
          <h2>ABOUT US</h2>
        </div>
     <div class="row">
          
          <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>エステサロンでも、接骨院でもない
健康と美が叶う、笑顔になれるサロンへ</h3>
           
             <ul>
              <li><i class="bi bi-check-circled"></i> 「地元に笑顔の波紋(ripples)を広げたい」</li> 
               <li><i class="bi bi-check-circled"></i> そんな想いの元、2013年にオープンしたエステサロン。</li> 
              <li><i class="bi bi-check-circled"></i> お客様が心身共に健康で、自分を好きでいること</li>
              <li><i class="bi bi-check-circled"></i> そして、心から笑うこと</li>
              <li><i class="bi bi-check-circled"></i> そのお手伝いをすることが私たちの使命です。</li>
            </ul>
            
         
          
        </div>
        
        <div class="col-lg-5 order-1 order-lg-1">
            <img src="{{secure_asset('assets/img/about/hazimemasite.jpg')}}" class="img-fluid" alt="">
          </div>

      </div>
     
    </div>
    </section>
    
     <!-- ======= END 実績紹介 Section ======= -->
     
     <!-- ======= 実績紹介 Section ======= -->
     <section id="about" class="about">
          <div class="container">
     　<div class="section-title">
          <h2>特徴</h2>
        
        </div>
        
     <div class="container">
  <div class="row">
      
    <div class="col-sm">
      <div class="card " style="width: 25rem;">
   <img src="{{secure_asset('assets/img/about/tokucho1.jpg')}}"  alt="" width="100%" height="100%" style =" text-align: center; ">
  <div class="card-body">
      <h3 class ="head-line ">アットホームな空間</h3>
    <p class="card-text">創立9年目、リピート率９２％。個人サロンならではのお客様との距離の近さ。<br>お客様が心身ともに、ホッとできる居心地の良い環境を心がけております。</p>
  </div>
</div>
    </div>
    
    <div class="col-sm">
      <div class="card" style="width: 25rem;">
  <img src="{{secure_asset('assets/img/about/tokucho2.jpg')}}"  alt="" width="100%" height="100%" style =" text-align: center; ">
  <div class="card-body">
      <h3>健康と美の融合メニュー</h3>
    <p class="card-text">オーナー自らが体験して良いと思った選りすぐりの体の外側から内側までケアできるメニューを多数取り揃えております。お客様一人一人に合わせたご提案が可能です。
   </p>
  </div>
</div>
    </div>
    
    <div class="col-sm">
      <div class="card" style="width: 25rem;">
  <img src="{{secure_asset('assets/img/about/tokucho3.jpg')}}"  alt="" width="100%" height="100%" style =" text-align: center; ">
  <div class="card-body">
      <h3>幅広い層のお客様</h3>
    <p class="card-text">年齢や障害の垣根も越え、世界で活躍するアスリートや芸能関係者など多種多様な業種の方もご来店。ここでしかできないケアをご体感いただいております。</p>
  </div>
</div>
    </div>
  </div>
</div>
     
    </div>
    </section>
    
     <!-- ======= END 実績紹介 Section ======= -->
     
      <!-- ======= オーナーからの挨拶 Section ======= -->
  <section id="about" class="about">
   <div class="container">

       
        
        <div class="row">
          <div class="col-lg-3 order-1 order-lg-1">
            <img src="{{secure_asset('assets/img/about/owner.jpg')}}" class="owner" height="400"  alt="" 　>
           
            
            
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>初めまして「ぐり〜んりぷる」オーナーの布施みどりです</h3>
            
           
            
              <p class="card-text content"> 2013年11月28日。
美容や経営の事などほとんど知らなかった私が「地元に笑顔の波紋(ripples)を広げたい」と<br>千葉県白井市にオープンしたサロン、ぐり～んりぷる(green ripples)。<br>
</p>
<p class="card-text content">
2018年春に東京（浅草）に拠点を移し、治療家の夫、そして娘も加わりパワーアップし<br>開業当初には想像もできなかったほど、たくさんの皆様に愛されるサロンにまで成長することができました。<br>
</p>

<p class="card-text content">
これからもお客様が「ただいま」とご来店し、元気とキレイをチャージして「じゃあまた(^-^)v」と笑顔で帰って行かれる、<br>そんな「第二の家」のような存在である為に、お客様お一人お一人の心や身体の悩みや目的に真剣に向き合い、<br>お客様の為の努力は決して怠らず、変化を恐れず進化し続けたいと思っております。</p>
<p class="card-text content">「ぐり～んりぷるファミリー」への仲間入り、大歓迎です！お会いできるのを楽しみにお待ちしています。</p>

             </p>
           
          </div>
        </div>
        
       
        
      </div>
      
      <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">Instagramで情報を見る</a>
     </div>
     
    </section>
     <!-- ======= END OF オーナーからの挨拶 Section ======= -->
     
     
@endsection