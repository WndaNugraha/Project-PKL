<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donatur;
use Illuminate\Support\Facades\Mail;

class donasi2controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $donatur1 = donatur::all();
        return view('tampilanuser.donasi2', compact('donatur1'),[
            "title" => "Donasi"
        ]);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('tampilanuser.donasi2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //siapkan data
        $email =$request->email;
        $data = array(
            'nama' => $request->name,
            'email' => $request->email
        );

        //kirim email
        Mail::send('tampilanuser.feedback',$data, function($mail) use($email){
            $mail->to($email, 'no-reply')
                 ->subject("Notifikasi dari Ruang ZIS");
            $mail->from('ruangzis123@gmail.com','Ruang ZIS');
        });

        $validated = $request->validate([
            'nama' => 'required|min:2',
            'email' => 'required|email:rfc,dns',
            'no' => 'required|min:10|max:12',
            'jenis' => 'required',
            'jumlah' => 'required|min:4',
            'pembayaran' => 'required',
        ]);

        $donatur1 = new donatur();
        $donatur1->nama = $request->nama;
        $donatur1->email = $request->email;
        $donatur1->no = $request->no;
        $donatur1->jenis = $request->jenis;
        $donatur1->jumlah = $request->jumlah;
        $donatur1->pembayaran = $request->pembayaran;

        $donatur1->save();
        return redirect('/donasi2')->with('success','Donasi Anda Berhasil');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $donatur1 = donatur::findOrFail($id);
        return view('tampilanuser.donasi2', compact('donatur1'));
    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   }
