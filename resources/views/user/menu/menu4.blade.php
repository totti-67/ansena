{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'フォースカッターBODY')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>フォースカッターBODY</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/forscutter.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">”温めて、柔らかくして、ほぐす”<br>を叶える、最強進化型マシン。</h3>
            
            
             <p style="text-align:center">ラジオ波で深部まで温め、お肉質を柔らく。<br>EMSと吸引で引き締め・ドレナージュ効果も期待！<br>"痩せたい"という方はもちろん、肩こりや足のむくみの改善目的で選ばれる方が多いメニュー。<br>マシンの力とスタッフの手で心地よくほぐしていきます。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D"> ベストなお肉質に</span>：深い層を集中刺激する「モノポーラ」と、浅い層と深い層を同時加温しながらアプローチする「マルチポーラ」の<br>Wアプローチで気になる部位をトリートメントします。</li> 
           <li><span style="color: #00A99D">ドレナージュ効果</span>：電気刺激により深層筋肉まで働きかけるEMS。さらに特殊ヘッドによる吸引作用で、理想のボディを作ります。</li> 
           <li><span style="color: #00A99D">肌の引き締め</span>：LED照射により、コンディションを活性化。光のケアでハリを失った肌を引きしめながら滑らかに。</li> 
        
           
        </ul>
        
        
            <p style="text-align:left">美容効果：<u>リフトアップ ,アンチエイジング ,むくみ解消(小顔効果) ,引き締め ,老化予防 ,予防美容　</u></p> 
            <p style="text-align:left">痩身効果：<u>引き締め効果 ,セルライト除去 ,過剰な皮下脂肪減少 ,内臓脂肪の自然燃焼の促進 ,むくみの緩和,メタボリックの改善　</u></p> 
            <p style="text-align:left">健康効果：<u>便秘,生理不順,更年期,不眠症の解消,全身疲労の軽減 ,首、肩こり、腰痛の解消 ,免疫機能の向上 ,自律神経ホルモンバランスの調整 ,冷え性改善 ,健康増進　</u></p> 
         
            <div class="section-title">
          <h2>ここにビフォーアフター画像が入ります</h2>
          </div>
             
          <h3 style="text-align:center">目がぱっちり小顔に。肌のくすみが取れ、明るくツヤ肌へ。</h3>
         
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
     
     <!-- ======= よくある質問 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>Q&A</h2>
        </div>
        <div class="situmon">
            <dl>
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>何回くらい受ければ効果を実感できますか？</dt>
           
                <dd>個人差はございますが、たった1回で非常に大きな変化を感じる方もいらっしゃいます。基本的には1週間1～2回を6回/12回受けて頂きます。</dd>
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>施術の体感は痛いですか？</dt>
           
                <dd>非常に体感が良く、心地良いというお声が多いです。各機能によって体感が異なりますので、今までに無い未体験の感覚をお楽しみください。</dd>
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>誰でも受けられますか？</dt>
           
                <dd>こちら、＜女性限定メニュー＞となっております。また、状況により受けられない方がいらっしゃいます。詳しくは以下よりご確認ください。<br><span href="" style="color: #00A99D"><u>ご利用いただけない方</u></span></dd>
            
            
            </dl>
        </div>
        
     <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">ご予約はこちらから</a>
     </div>
    </div>
    </section>
    
     <!-- ======= END　よくある質問 Section ======= -->
     
    
    
@endsection