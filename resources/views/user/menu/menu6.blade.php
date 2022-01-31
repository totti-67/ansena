{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '酸素カプセル')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<section class="visual">
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>酸素カプセル</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/sanso.JPG')}}" class="img-fluid" alt="" style ="height: 80%; width: 80%; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">効率よくカラダを元気に　循環力を高めましょう！</h3>
            
            
             <p style="text-align:center">酸素は、組織の再生、解毒、免疫、脂肪燃焼などの働きになくてはならない物質で<br>東洋では昔からヨーガや気功などの呼吸法により、酸素摂取量を増やすことが健康の基本とされていました。</p>
            　<p style="text-align:center"> 当サロンで使用している<span class="under">酸素カプセル『HBA Space』</span>は、<br>酸素不足に陥った全身の細胞に十分な酸素を届けることが可能です。<br>血液や体液の流れがスムーズになることで、健康と美容効果が得られるマシンです。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D"> 疲労回復、ストレス解消</span>：十分な酸素を送り込むことで、酸素不足状態を防ぎ、疲労回復・ストレス解消につながります。</li> 
           <li><span style="color: #00A99D">ダイエット効果</span>：脂肪分解酵素「リパーゼ」の発生を促進する効果があることから、ダイエット効果も期待できます。</li> 
           <li><span style="color: #00A99D">集中力アップ、眠気防止</span>：脳細胞は酸素全体の25％も消費している為、集中力アップや眠気防止には酸素が必要です。</li> 
        
           
        </ul>
        
        
            <p style="text-align:center"><u>その他効果</u><br>ケガの早期回復、美容効果、自律神経調整、冷え、肩こり、むくみの解消、アルコール分解効果、老化防止（アンチエイジング）　</p> 
       
         
           
             
          <h3 style="text-align:center">酸素を体内に取り入れ、健康な身体へリフレッシュ！</h3>
         
    </div>
    </section>
    
     <!-- ======= END 効果 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　
     　　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/sanso.png')}}" class="price" alt="" style ="height: 100%; width: 100%; text-align: center; ">
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
           
                <dd>はい、着たまま50分間入っていただきます。エアコンやライト完備の快適空間で本を読んだり、スマートフォンを使ったり、眠ったり、お好きなように過ごすことが可能です。</dd>
            
    
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>誰でも受けられますか？</dt>
           
                <dd>状況により受けられない方がいらっしゃいます。詳しくは以下よりご確認ください。<br><span style="color: #00A99D"><a href="{{ action('Admin\AnsenaController@kinki') }}" >ご利用いただけない方</a></span></dd>
            
            
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