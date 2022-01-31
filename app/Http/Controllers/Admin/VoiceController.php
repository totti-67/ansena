<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoiceController extends Controller
{
    //
    public function voice()
  {
      return view('admin.voice.create');
  }
  
  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/voice/create');
  }

}
