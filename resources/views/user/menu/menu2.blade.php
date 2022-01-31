{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'フォースカッターfacial')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<section class="visual">
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>フォースカッターfacial</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/facial.jpg')}}" class="img-fluid" alt="" style ="height: 80%; width: 80%; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">お顔の脂肪をケアしながら表情筋を引き締める<br>独自のフェイシャル技術。</h3>
            
            
             <p style="text-align:center">温熱作用と同時にEMSによる筋肉刺激を行うことで、<br><span class="under">「引き締め」「ハリ感アップ」</span>など、 目に見える結果をもたらします。<br>当店では、最後のケアに人幹細胞が含まれた美容液を導入いたします。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>期待できる効果</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D">ハリと弾力がアップ</span>：ラジオ波が摩擦熱運動を起こし、肌のコンディションを長時間活性化させ、ハリと弾力がアップします。</li> 
           <li><span style="color: #00A99D">奥から整える</span>：電気穿孔法という先進的な浸透テクノロジーが、美容成分を肌の奥まで浸透させます。</li> 
           <li><span style="color: #00A99D">美肌へ導く</span>：LEDを照射して肌の調子を整えコンディションを活性化させるため、美肌効果を発揮します。</li> 
        </ul>
        
        
           <p style="text-align:center">その他効果：<u>リフトアップ、ほうれん線のスッキリ感、ハリ・うるおい・トーンアップ　</u></p> 
         
           
             
        
         
    </div>
    </section>
    
     <!-- ======= END 効果 Section ======= -->
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     
     　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/facial.png')}}" class="price" alt="" style ="height: 100%; width: 100%; text-align: center; ">
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
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>効果を最大限に発揮するために、自分でもできるケアはありますか？</dt>
           
                <dd>はい、より効果を引き出すためにご自身で、「スキンケア」,「バランスの取れた食事」,「規則正しい生活習慣」,「ストレスを溜めない」を実践していただくことを推奨しております。</dd>
            
            
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>誰でも受けられますか？</dt>
           
                <dd>状況によって、ご利用できない方がおります。詳しくは以下よりご確認ください。<br><span style="color: #00A99D"><a href="{{ action('Admin\AnsenaController@kinki') }}" >ご利用いただけない方</a></span></dd>
            
            
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