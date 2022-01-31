{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ブライダル')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<section class="visual">
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>ブライダル</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/bridal.jpg')}}" class="img-fluid" alt="" style ="height: 80%; width: 80%; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">素敵なお式になりますように<br>完全オーダーメイドのアナタに合ったプランを。</h3>
            
            
             <p style="text-align:center">無料カウンセリングで細部までヒアリング。<br>サロンの様々なMENUを組み合わせ、それぞれの目的に沿ったプランをお作りいたします。</p>
            　<p style="text-align:center"> 新婦様・新郎様ご一緒にぜひ。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
      <!-- =======  カウンセリングはこちら画像 Section ======= -->
    
     
     <!-- =======  ENDカウンセリングはこちら画像 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/bridal.png')}}" class="price" alt="" style ="height: 100%; width: 100%; text-align: center; ">
           </div>
     
     
    </div>
    </section>
    <!-- ======= END 料金 Section ======= -->
     
     <!-- ======= よくある質問 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>Q&A</h2>
        </div>
        <div class="situmon">
            <dl>
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>水素は安全ですか？</dt>
           
                <dd>水素分子は、食品添加物(既存添加物名簿192番)として厚生労働省に認められています。無害で副作用もありません。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>水素はどんな味ですか？</dt>
           
                <dd>無味無臭です。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>月に1回でも効果はありますか？</dt>
           
                <dd>1回の吸入で血流の変化を感じていただける方も多いです。個人差はありますが、週に2回～3回、1時間～2時間の吸入をお薦めしております。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>なぜ鼻から吸入するのですか？</dt>
           
                <dd>鼻腔には、その粘膜の直下に過密な毛細血管のネットワークが存在し、鼻粘膜から吸収することで、消化管より、吸収性や吸収スピードが高いと考えられています。</dd>
                
            
    
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>誰でも受けられますか？</dt>
           
                <dd>水素は非常に軽くて小さい分子のため、体に蓄積されることはなく、副作用もないと言われていますのでどなたでも吸入いただけますが、<br>ご心配な方はかかりつけの医師にご相談ください。また、通院中の方は必ず医師にご相談の上、ご判断ください。</dd>
            
            
            </dl>
        </div>
        
     <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">ご予約はこちらから</a>
     </div>
    </div>
    </section>
    
     <!-- ======= END　よくある質問 Section ======= -->
     
    </section>
    
@endsection