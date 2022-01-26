{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '布施治療（完全紹介制）')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>布施施術（完全紹介制）</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/fuse.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">知る人ぞ知る、布施代表の施術<br>一人一人と丁寧に向き合い、一緒にカラダを整えます</h3>

         <p style="text-align:center">鍼灸の国家資格を持ち、複数のスポーツチームのトレーナーを務めた後、治療院を開業。<br>これまで数多くのトップアスリートを怪我からの復帰へと導き、<br>千葉県白井市にある治療院では1日に100人施術を行うほどの敏腕トレーナー。<br>「治るまでとことん」をモットーとする布施代表があなたの身体を根本からサポートします。</p>

      </div>
    </section><!-- End menu紹介 -->
    
   
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>布施治療について</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D">各個人に合わせた治療</span>：数多くのアスリートをみてきた布施代表ならではの、あなたの身体に対して適切な治療を致します。</li> 
           <li><span style="color: #00A99D">徹底的な分析</span>：身体の構造から原因を紐解いて、それをわかりやすく伝えます。自分の身体への理解が深まることで、治りが早くなるのです。</li> 
           <li><span style="color: #00A99D">全治3ヶ月を1ヶ月で。</span>：全治3ヶ月を1ヶ月で怪我から復帰させた実績があります。諦めずにできることから、とことん治療致します。</li> 
        
           
        </ul>
        
        <p style="text-align:left">完全紹介制：<u>当メニューは完全紹介制となるため、ご予約の際は紹介者のお名前をお伝えください。</u></p>
           
    </div>
    </section>
    
     <!-- ======= END 効果 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>ここに料金表が入ります。</h2>
        
        </div>
     
     
    </div>
    </section>
    <!-- ======= END 料金 Section ======= -->
    
     <!-- 布施さん紹介 -->
    
     <section id="about" class="about">
   <div class="container">

       
        
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-1">
            <img src="{{secure_asset('assets/img/fuse2.jpeg')}}"  height="350"  alt="" 　>
           
            
            
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>初めまして、治療家の布施勝仁です</h3>
            
           
            
              <p class="card-text content">大学在学中に鍼灸の方にお世話になり、それがきっかけとなり鍼灸師の道を歩み始めてから早○○年。<br>これまで沢山のご縁があり、サウナのマッサージ師から始まり、現在の治療家としてやってこれました。<br>
</p>
<p class="card-text content">
今こうやって僕が治療家としていられるのも、「出会い」があってこそ。<br>お客様との出会いを大切なご縁とし、一人一人に向き合わせていただきます。<br>
</p>

<p class="card-text content">
身体を良くするということに対して、とにかくとことん。<br>少しでもお客様の身体のサポートをできるよう尽力致します。<br></p>


             </p>
           
           
           
          </div>
        </div>
        
       
        
      </div>
      
       <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">ご予約はこちらから</a>
     </div>
      
      </section>
      
       <!-- end 布施さん紹介 -->
     
     
     
    
    
@endsection