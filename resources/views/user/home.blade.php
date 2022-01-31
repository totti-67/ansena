{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'home')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
     <!-- ======= Hero Section ======= -->
  
    
      <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{secure_asset('assets/img/slide/slide-1.png')}})">
          <div class="carousel-container">
            <div class="container">
            
              
             
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{secure_asset('assets/img/slide/slide-2.png')}})">
          <div class="carousel-container">
            <div class="container">
              
             
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{secure_asset('assets/img/slide/slide-3.png')}})">
          <div class="carousel-container">
            <div class="container">
             
             
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  
  
  
 
   <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      
      <div class="container">

       

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{secure_asset('assets/img/menu/kinpaku.JPG')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>「カラダをつくる」</h3>
            <h3>行き着くところは、心身の健康。</h3>
            <h3>外から、内から、様々なアプローチをしていき</h3>
            <h3>自分に合ったカラダを目指しましょう。</h3>
            
          
           <div class="kuwasikubotan" style="text-align: left" >
     <a href="{{ action('Admin\AnsenaController@about') }}" class="btn btn--yellow btn--cubic">ぐり〜んりぷるをもっと詳しく</a>
     </div> 
      
          
        </div>

      </div>
      
       
    </section><!-- End About Us Section -->
    
    
    
    
    
    
      <!-- ======= MENU/フェイシャル　Section ======= -->
    <section id="menu-box1" class="menu-box">
      <div class="container">

        <div class="section-title">
          <h2>MENU/フェイシャル</h2>
        
        </div>
        
        
        <div class="row">

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-teal">
               <img src="{{secure_asset('assets/img/menu/kinpaku2.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu1') }}">金箔エステ</a></h4>
              <p>最高級のフェイシャルケア、金箔エステ<br>美肌へ導くだけでなく、免疫力をも高めます。</p>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/facial.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu2') }}">フォースカッターfacial</a></h4>
              <p>お顔の脂肪をケアしながら表情筋を。<br>引き締める、独自のフェイシャル技術。</p>
            </div>
          </div>


         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/photo.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu3') }}">クイック光フェイシャル</a></h4>
              <p>細胞を元気に生まれ変わらせ、透明感ある素肌へ。<br>小じわ・たるみ・ニキビあと・肌質改善のフェイシャルケア。</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End MENU/フェイシャル Section -->
    
     <!-- ======= MENU/BODY　Section ======= -->
    <section id="menu-box2" class="menu-box">
      <div class="container">

        <div class="section-title">
          <h2>MENU/ボディー</h2>
        
        </div>
        
        
        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/forscutter.JPG')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu4') }}">フォースカッターbody</a></h4>
              <p>”温めて、柔らかくして、ほぐす”<br>を叶える、最強進化型マシン。</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/datumou.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu5') }}">脱毛</a></h4>
              <p>毛質、肌質に応じた施術が可能<br>期間に縛られない、あなたに合った脱毛を。</p>
            </div>
          </div>
          
           

　　　　　
        
        

        </div>
      </div>
    </section><!-- End MENU/BODY Section -->
    
     <!-- ======= MENU/マシンメンテ　Section ======= -->
    <section id="menu-box3" class="menu-box">
      <div class="container">

        <div class="section-title">
          <h2>MENU/マシンメンテナンス</h2>
        
        </div>
        
        
        <div class="row">
          
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/sanso.JPG')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu6') }}">酸素カプセル</a></h4>
              <p>効率よくカラダを元気に。<br>酸素を取り入れて循環力を高めましょう！</p>
            </div>
          </div>
          

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-teal ">
              <img src="{{secure_asset('assets/img/menu/koragen.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu7') }}">コラーゲンマシン</a></h4>
              <p>カラダの芯からあったまる<br>30分間　寝ているだけで全身のトリートメントを。</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/suiso.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu8') }}">高濃度水素吸入（suisonia)</a></h4>
              <p>たった60分の吸入で、水素水約42本分を体内へ。<br>活性酸素を除去し、細胞レベルのエイジングケア</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End MENU/マシンメンテSection -->
    
    
    
    
    
   
    
     <!-- ======= MENU/その他　Section ======= -->
    <section id="menu-box4" class="menu-box">
      <div class="container">

        <div class="section-title">
          <h2>MENU/その他</h2>
        
        </div>
        
        
        <div class="row">
          
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/fuse.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu9') }}">布施治療</a></h4>
              <p>知る人ぞ知る、布施代表の施術<br>一人一人と丁寧に向き合い、一緒にカラダを整えます</p>
            </div>
          </div>

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/fuse.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu10') }}">ファスティング</a></h4>
              <p>美しく体質改善<br>本物の最新ファスティングをご体験ください。</p>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-teal">
              <img src="{{secure_asset('assets/img/menu/bridal.jpg')}}" class="img-fluid" alt="">
              <h4><a href="{{ action('Admin\AnsenaController@menu11') }}">ブライダル</a></h4>
              <p>素敵なお式になりますように。<br>完全オーダーメイドのアナタに合ったプランを。</p>
            </div>
          </div>
          
          

        </div>

      </div>
    </section><!-- End MENU/その他 Section -->
    
    
    
    
     <!-- ======= TOPICS Section ======= -->
     <section id="topics" class="topics">
     <div class="container">

        
        <div class="news_group">
         <h3 class="headline">NEWS</h3>
           
         
           
         <a href="#" class="list-group-item list-group-item-action">NEWS1</a>
         <a href="#" class="list-group-item list-group-item-action">NEWS2</a>
         <a href="#" class="list-group-item list-group-item-action">NEWS3</a>
         <a href="#" class="list-group-item list-group-item-action disabled">NEWS4</a>
        </div>
        
      
    </div> 
    
    <div class="container">

        
        <div class="koe_group ">
         <h3 class="headline">お客様の声</h3>
           
         
           
         <a href="#" class="list-group-item list-group-item-action">声1</a>
         <a href="#" class="list-group-item list-group-item-action">声2</a>
         <a href="#" class="list-group-item list-group-item-action">声３</a>
         <a href="#" class="list-group-item list-group-item-action disabled">声4</a>
        </div>
        
      
    </div> 
    
    
    </section>
    
     <!-- =======END TOPICS Section ======= -->
     
     
     
     
    
     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>ACCESS</h2>
          <p>東京メトロ銀座線「田原町駅」1番出口 から徒歩5分/  東京メトロ銀座線「田原町駅」3番出口 から徒歩6分</p>
         
        </div>

       
         
          
            
            <div class="info row">
            <div class="col-md-6">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>台東区元浅草４丁目１−６</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>03-5811-1818</p>
              </div>
              
              </div>
              
             
             <div class="col-md-6">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d809.9222650660173!2d139.78721392922083!3d35.709268587724296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ebc1bc66f35%3A0x69ef1cd83a31b79d!2z44GQ44KK772e44KT44KK44G344KL!5e0!3m2!1sja!2sjp!4v1637569958402!5m2!1sja!2sjp"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
            

          

        </div>
       </div>
       
       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/line.png')}}" class="line" alt="" style ="height: 15%; width: 15%; text-align: center; ">
          </div>
          
          <p style="text-align: center" class="line">LINEでのご予約/お問い合わせはコチラ</p>
      
      </div>
    </section><!-- End Contact Section -->
    
   
    


@endsection