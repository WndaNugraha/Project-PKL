<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shodakoh;
use App\Models\zakat;
use App\Models\infaq;
use App\Models\rumah;


class artikelcontroller extends Controller
{
    //
    public function sedekah(){
        
    $sedekah = shodakoh::all();
    return view('tampilanuser.sedekah2',compact('sedekah'),[
        "title" => "Sedekah"
    ]);

    }

    public function zakat(){
        
        $zakat = zakat::all();
        return view('tampilanuser.zakat2',compact('zakat'),[
            "title" => "Zakat"
        ]);
    
    }

    public function infaq(){
        
        $infaq = infaq::all();
        return view('tampilanuser.infaq2',compact('infaq'),[
            "title" => "infaq"
        ]);
    
        }

    public function home(){
        
        $rumah1 = rumah::all();
        return view('tampilanuser.home',compact('rumah1'),[
            "title" => "Home"
        ]);
        
        }

}
