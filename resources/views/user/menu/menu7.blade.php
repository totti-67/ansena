{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'コラーゲンマシン')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>コラーゲンマシン</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/koragen.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">カラダの芯からあったまる、<br>　30分間　寝ているだけで全身のトリートメントを</h3>
            
            
             <p style="text-align:center">633nmの可視光線を出す特殊な光を使用したヨーロッパ発のマシンです。<br>その光は真皮層まで届いて線維芽細胞に働きかけ、<br>光線の波長がコラーゲン・たんぱく質の生成を活性化、美肌へと導きます。<br>医療にも使われているので、安全性にも優れています。</p>
            　<p style="text-align:center"> また、電気製品が安全性を満たしていることを証明する<br>PSEマークを取得しているため、安心してご利用いただけます。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D"> 肌トラブルを改善し、美肌へ</span>：コラーゲンマシンから発生するピンク色の光を直接肌に照射することにより、真皮層にアプローチし、シミ・しわ・たるみ・くすみ・乾燥などのあらゆる肌トラブルを改善し、美肌へ導きます。</li> 
           <li><span style="color: #00A99D">体質改善</span>：血液やリンパの流れがよくなり、冷え性や肩こり・腰痛の暖和・ダイエットの効果も期待できます。</li> 
           <li><span style="color: #00A99D">セラピー効果</span>：脳内ホルモンのセロトニンの分泌が活発になり、明るく元気になります。</li> 
        
           
        </ul>
        
        
            <p style="text-align:center">その他効果：<u>新陳代謝アップ、肌のハリ,ツヤ、セルライト改善、精神的な疲労改善、うつ病の改善　</u></p> 
       
         
           
             
          <h3 style="text-align:center">内側から身体を元気に！</h3>
         
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
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>服は着たままですか？</dt>
           
                <dd>発汗があるため、服はお脱ぎいただいて、当店普及の簡易下着を着用いただきます。</dd>
            
    
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>誰でも受けられますか？</dt>
           
                <dd>状況により受けられない方がいらっしゃいます。詳しくは以下よりご確認ください。<br><span href="" style="color: #00A99D"><u>ご利用いただけない方</u></span></dd>
            
            
            </dl>
        </div>
        
     <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">ご予約はこちらから</a>
     </div>
    </div>
    </section>
    
     <!-- ======= END　よくある質問 Section ======= -->
     
    
    
@endsection