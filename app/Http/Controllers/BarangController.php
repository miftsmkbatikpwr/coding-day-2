<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('home');
        $barang = Barang::all();
        return view('home',compact('barang'));
        // return view('home',['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'required' => ':attribute tidak boleh kosong.',
        //     'numeric' => ':attribute harus diisi angka.',
        // ];
        // $validator = Validator::make($request->all(), [
        //     'kode' => 'required|max:8',
        //     'nama' => 'required|max:50',
        //     'deskripsi' => 'required',
        //     'stok' => 'required|numeric',
        //     'harga' => 'required|numeric',
        //     'berat' => 'required|numeric'
        // ], $messages);
        // if ($validator->fails()) {
        //     return redirect('/tambah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        Barang::create($request->all());
        return redirect('/')->with('status','Data Berhasil Ditambahkan');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // App\Flight::where('number', 'FR 900')->first();
        $barang = Barang::where('id',$id)->first();
        return view('ubah',compact('barang'));
        // return $barang;
        // echo $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        // $messages = [
        //     'required' => ':attribute tidak boleh kosong.',
        //     'numeric' => ':attribute harus diisi angka.',
        // ];
        // $validator = Validator::make($request->all(), [
        //     'kode' => 'required|max:8',
        //     'nama' => 'required|max:50',
        //     'deskripsi' => 'required',
        //     'stok' => 'required|numeric',
        //     'harga' => 'required|numeric',
        //     'berat' => 'required|numeric'
        // ], $messages);
        // if ($validator->fails()) {
        //     return redirect('/'.$id.'/ubah')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $affectedRows = Barang::where('id', $id)
            ->update(
                [
                    'kode' => $request->kode,
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'stok' => $request->stok,
                    'harga' => $request->harga,
                    'berat' => $request->berat
                ]
            );
        if ($affectedRows) {
            return redirect('/')->with('status','Data Berhasil Diubah');
        }
        return redirect('/')->with('status','Tidak ada perubahan data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/')->with('status','Data Berhasil Dihapus');
    }
}
