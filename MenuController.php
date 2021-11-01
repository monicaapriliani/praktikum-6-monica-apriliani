<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view('menu');
    }
    public function menu_proses(request $request){
        $makanan = $request->input('makan');
        $minuman = $request->input('minum');

        return "Makanan :".$makanan.", 
                Minuman :".$minuman;
    }
}
