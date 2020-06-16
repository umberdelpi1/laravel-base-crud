<?php

namespace App\Http\Controllers;

use App\Cagnolini;
use Illuminate\Http\Request;

class CagnoliniController extends Controller
{
  public function index(){
    $cagnoliniDb = Cagnolini::all();
    return view('home', compact('cagnoliniDb'));
  }

  public function showCagnolini($id){
    $cane = Cagnolini::findOrFail($id);
    return view('showCagnolini', compact('cane'));
  }

}
