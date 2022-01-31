{{-- layouts/index.blade.phpを読み込む --}}
@extends('layouts.index')

{{-- index.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ファスティング')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

 <section class="visual">
    <!-- ======= menu紹介 ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="menu-title">
          <h2>ファスティング</h2>
        </div>

       <div style="text-align: center" >
            <img src="{{secure_asset('assets/img/menu/suiso.jpg')}}" class="img-fluid" alt="" style ="height: 600px; width: 800px; text-align: center; ">
          </div>
          
            <h3 style="text-align:center">美しく体質改善<br>本物の最新ファスティングをご体験ください。</h3>
            
            
             <p style="text-align:center">ファスティングとは、日本語で<span class="under">「断食」</span>。<br>今、美容・健康のあらゆる面に有効な手段として注目されていています。</p>
             
              <p style="text-align:center">現代人の食生活は、歴史上かつてない「飽食の時代」に突入し、<br>「いつでも、好きな物を好きなだけ食べられる！」といった習慣が<br>腸内を汚し、体内に毒素（有害物質）を蓄積し、美肌や痩身の大敵となりまた、代謝不良を起こしています。</p>
              
              <p style="text-align:center">ファスティングはこのような体内の悪循環を断ち切り、<br><span class ="under">きれいな細胞にリセットするための有効な手段です</span>。</p>
            
             <p style="text-align:center">　日本のみならず、世界的にも注目されている<br>「デトックス」「体質改善」「ダイエット」全ての目的がかなうファスティングをぜひ試してみませんか。</p>
              
              <p style="text-align:center"><span class="under">カウンセリングは無料</span>、無理なくあなたに合ったプランをご提案します。</p>
              
               
               

         

      </div>
    </section><!-- End menu紹介 -->
    
     <!-- =======  カウンセリングはこちら画像 Section ======= -->
   
     
     <!-- =======  ENDカウンセリングはこちら画像 Section ======= -->
     
     
      <!-- =======  料金 Section ======= -->
     <section id="menu" class="menu">
          <div class="container">
     　　
     　　<div style="text-align: center" > 
            <img src="{{secure_asset('assets/img/price/fasting.png')}}" class="price" alt="" style ="height: 100%; width: 100%; text-align: center; ">
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
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>実施中は何も食べられませんか？</dt>
           
                <dd>当サロンのファスティングは、水分や食べ物をまったく摂らない断食ではなく、<br>個々のライフスタイルに合わせて無理なく実施できるソフトなプチ断食です。<br>期間中は、朝食は摂らず、 植物発酵飲料などで栄養を補給しながら無理なく実施していきます。<br>通常食は高タンパク、高脂質の食事は 避けていただきますが、まったく固形物を摂取しないハードな断食ではありません。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>空腹に我慢できなくなったらどうしたらいいですか？</dt>
           
                <dd>まずは水を飲んで空腹感を解消してみてください。３食すべてが植物発酵飲料だけの日で、どうしても耐えられなくなった方は、<br>スイカやメロンを一切れ食べるか、すりおろした野菜や果物、梅干しなどを摂っていただいても構いません。<br>ガムや飴は胃酸が必要以上に出てしまうのでNGです。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>実施中は、なぜ水をたくさん飲む必要があるのでしょうか？</dt>
           
                <dd>1日あたり約2Lの良質な水を、なるべく常温で、10回以上に分けて飲んでいただきます。<br>これは水を摂取することで代謝酵素を働きやすくするためです。<br>2Lが難しい場合は、1Lから始めて徐々に飲む量を増やしていきましょう。</dd>
                
                
                
                <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>ファスティングができる年齢はありますか？</dt>
           
                <dd>基本的には、１６歳～６０歳くらいが目安と考えています。<br>中学生以下の人は著しい成長期の中にあり、カロリー的にも高栄養価を必要とするので避けてください。</dd>
                
            
    
            
               <dt><i class="wc-shortcodes-fa fa fa-caret-right " style="margin-right: 5px;"></i>実施中、薬の服用は可能ですか？</dt>
           
                <dd>ファスティング中は、消化器官を休ませ体内をリセットすることを目的としますので<br>薬を常用する期間は基本的にファスティングはできません。</dd>
            
            
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