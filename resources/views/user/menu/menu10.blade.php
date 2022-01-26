{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ファスティング')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>ファスティング</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/suiso.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">「メスのいらない手術」と 呼ばれるほど、<br>美容・健康のあらゆる面に有効な○○</h3>
            
            
             <p style="text-align:center">現代人の食生活は、歴史上かつてない「飽食の時代」に突入しました。<br>食事などから取り入れた食品添加物、残留農薬などの有害物質、<br>また高タンパク・高脂肪食品の食べ過ぎにより、消化器官は疲れ切っています。</p>
            
             <p style="text-align:center">　「いつでも、好きな物を好きなだけ食べられる！」といった習慣は<br>
             腸内を汚し、体内に毒素（有害物質）を蓄積し、美肌や痩身の大敵となり、代謝不良を起こしています。<br>ファスティングはこのような体内の悪循環を断ち切り、<br>きれいな細胞にリセットするための有効な手段として注目を集めています。</p>
              
              
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- ======= 効果 Section ======s= -->
     <section id="menu" class="menu">
          <div class="container">
     　<div class="section-title">
          <h2>当サロンの「酵素ファスティング」について</h2>
          </div>
         
         <ul class= "kitaidekiru-kouka">
           <li><span style="color: #00A99D"> 細胞レベルのエイジングケア</span>：老化、体調不良、アトピー、喘息、アレルギーなどさまざまなトラブルの要因である、悪玉の活性酸素を水素が除去します。</li> 
           
        
           
        </ul>
        
        
            <p style="text-align:center">その他効果：<u>新陳代謝アップ、免疫力アップ、疲労回復、肌荒れ改善、花粉症,アレルギーの軽減、眼精疲労の改善、ダイエット、二日酔いの改善など　</u></p> 
       
         
           
             
          <h3 style="text-align:center">水素吸入で内側から身体を元気に！</h3>
         
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
     
    
    
@endsection