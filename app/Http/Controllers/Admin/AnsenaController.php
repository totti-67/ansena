<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnsenaController extends Controller
{
    //
    public function home()
  {
      return view('user.home');
  }
    
     public function about()
  {
      return view('user.about');
  }
  
   public function topics()
  {
      return view('user.topics');
  }
  
   public function news()
  {
      return view('user.news');
  }
  
   public function voice()
  {
      return view('user.voice');
  }
  
   public function menu1()
  {
      return view('user.menu.menu1');
  }
  
  public function menu2()
  {
      return view('user.menu.menu2');
  }
  
  public function menu3()
  {
      return view('user.menu.menu3');
  }
  
  public function menu4()
  {
      return view('user.menu.menu4');
  }
  
  public function menu5()
  {
      return view('user.menu.menu5');
  }
  
  public function menu6()
  {
      return view('user.menu.menu6');
  }
  
  public function menu7()
  {
      return view('user.menu.menu7');
  }
  
  public function menu8()
  {
      return view('user.menu.menu8');
  }
  
  public function menu9()
  {
      return view('user.menu.menu9');
  }
  
  public function menu10()
  {
      return view('user.menu.menu10');
  }
  
  public function menu11()
  {
      return view('user.menu.menu11');
  }
  
   public function kinki()
  {
      return view('user.kinki');
  }
  
}
