{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'フォトフェイシャル')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<section class="visual">
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>クイック光フェイシャル</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/photo.jpg')}}" class="img-fluid" alt="" style ="height: 80%; width: 80%; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">細胞を元気に生まれ変わらせ、透明感ある素肌へ。<br>小じわ・たるみ・ニキビあと・肌質改善のフェイシャルケア。</h3>
            
            
             <p style="text-align:center">光フェイシャルは<span class="under">IPL（インテンスパルスライト）</span>という特殊なフラッシュを使った美容法で<br>顔全体にこのフラッシュを照射する施術を行います。<br>肌のターンオーバーが正常化し、シミやシワ、毛穴の開き、赤ら顔<br>といったトラブルを<span class="under">肌の内側から自然に解消させていきます。</span></p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D">シワ改善</span><br>いったん土台を壊し、熱を与えてコラーゲン生成を活発にすることにより、ターンオーバーで生まれ変わってより丈夫な土台が生成されシワが改善。副効果としてシミ改善も促進し 、毛穴が目立たなくなります。</li> 
           <li><span style="color: #00A99D">リフトアップ</span>：ラジオ波で瞬間的に筋肉の収縮をしているため、小顔効果・リフトアップを促進させます。</li> 
            
           
        </ul>
        
        
           <p style="text-align:center"><u>通常3週間～1ヶ月に1回照射します。6回は継続することを推奨いたします。</u></p> 
         
           
    </div>
    </section>
    
     <!-- ======= END 効果 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     
     　　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/photo.png')}}" class="price" alt="" style ="height: 100%; width: 100%; text-align: center; ">
           </div>
     
     
    </div>
    </section>
    <!-- ======= END 料金 Section ======= -->
     
     <!-- ======= よくある質問 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>注意事項</h2>
        </div>
        <div class="situmon">
            <dl>
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>施術前日、肌を痛めないように必ず施術部位をシェービングして下さい。</dt>
           
                <dd>ご来店の前日に上記お願いしております。肌に赤みや傷がある場合は施術することが難しくなるので、予めご了承ください。</dd>
            
            <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>できる限り、お化粧やUVクリームはせずにご来店ください。</dt>
           
                <dd>ご来店から施術までをスムーズにご案内させていただく為、上記ご協力をお願いいたします。（お化粧をされている場合、お化粧室にて落としていただきます。）</dd>
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>状況によって、ご利用できない方がおります。</dt>
           
                <dd>詳しくは以下よりご確認ください。<br><span style="color: #00A99D"><a href="{{ action('Admin\AnsenaController@kinki') }}" >ご利用いただけない方</a></span></dd>
            
            
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