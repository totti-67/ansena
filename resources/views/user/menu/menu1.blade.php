{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '金箔エステ')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>金箔エステ</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/kinpaku.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">最高級のフェイシャルケア、金箔エステ<br>新陳代謝が高まり、美肌へ導くだけでなく免疫力を高めます</h3>
            
            
             <p style="text-align:center">金箔を貼って、肌がきれいになるの？と疑問に感じる方も多いと思いますが、古代エジプトでは、クレオパトラが<br>美容やお肌のハリを保つために金の糸を使用していたり、
             中国では、楊貴妃が高貴な妙薬として愛用していたと言われています。<br>このように金箔のもつエネルギーが肌から体全体にいきわたり、新陳代謝が高まり美肌へ導くだけでなく、<br>
             免疫力を高め、頭痛・肩こり解消などの疲労回復や眼の疲れ・視力回復などにも効果が期待できます。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color:#00A99D">美肌の条件は通電性</span>：体には体電気と呼ばれている電気が流れており、その電気が流れやすいと新陳代謝が上がり、生まれたての弾力美白肌へ導きます。</li> 
           <li><span style="color:#00A99D">特殊金箔・マイナスイオン効果</span>：特殊金箔から発生する電気と生体電気の波長が同じであるため、肌の内側への栄養吸収を高め、コラーゲンを吸着します。 </li> 
           <li><span style="color:#00A99D">疲労回復・免疫力・視力回復にも効果</span>：美肌だけでなく免疫力を高め、頭痛・肩こり解消など、疲労回復や眼の疲れや視力回復などにも効果が期待できます。</li> 
           
        </ul>
        
        
           <p style="text-align:center">その他効果：<u>ケガの早期回復、美容効果、自律神経調整、冷え、肩こり、むくみの解消、アルコール分解効果、老化防止（アンチエイジング）</u></p> 
         
          <div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/before-after/kinpaku.jpeg')}}" class="before-after" alt="" style ="height: 300px; width: 500px; text-align: center; ">
           </div>
           
          <h3 style="text-align:center">目がぱっちり小顔に。肌のくすみが取れ、明るくツヤ肌へ。</h3>
         
    </div>
    </section>
    
     <!-- ======= END 効果 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
              
              <div class="section-title">
          <h2>料金表</h2>
            </div>
          
     　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/kinpaku.png')}}" class="price" alt="" style ="height: 600px; width: 100%; text-align: center; ">
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
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>金属アレルギーなんですが、金箔エステを受けても大丈夫でしょうか？</dt>
           
                <dd>はい、安心してご利用ください。当店で使用している特殊金箔は、エステ専用の最高級特殊純金です。金属アレルギーを心配されている方も安心してご利用頂けます</dd>
            
            
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>顔痩せできますか？</dt>
           
                <dd>人は1℃体温が上がると、免疫力は約6倍、代謝率は15～20％上がります。金箔エステに使用する専用化粧品（オング化粧品）に含まれる「金』や『トルマリン』<br>などの遠赤金属により顔やその他の部分をしっかり引き締めます。</dd>
            
            
              <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>使用している金箔は他のものとは違うのでしょうか？</dt>
           
                <dd>違います。『金』には色々な種（グレード）があります。当サロンの金箔は、エステ専用の最高級特殊純金を使用した日本金箔エステ協会のもので、<br>金だけでなく銀などを微量に加えることで、静電気防止・ミネラル破壊防止効果、殺菌力が含まれた特殊金箔です。乱れた生体電流を整え、血行促進、<br>新陳代謝の活性などさまざまな効果をもたらします。</dd>
            
           </dl>
        </div>
        
     <div style="text-align: center" >
     <a href="" class="btn btn--yellow btn--cubic">ご予約はこちらから</a>
     </div>
    </div>
    </section>
    
     <!-- ======= END　よくある質問 Section ======= -->
     
    
    
@endsection