<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_transaksi;
use PDF;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = M_transaksi::all();
        return view('index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $data = $request->except(['_token']);
        M_transaksi::insert($data);
        return redirect('/dashboard');
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
        $data = M_transaksi::findOrFail($id);
        return View('show')->with(['data' => $data]);
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
        //
        $item = M_transaksi::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_transaksi::findOrFail($id);
        $item->delete();
        return redirect('/dashboard');
    }

//    public function export_user_pdf(){
 //       $pdf = PDF::loadView('pdf.users');
  //      return $pdf->download('users.pdf');
  //  }
    public function generatepdf(){
        $data = M_transaksi::all();
        $pdf = PDF::loadView('index', ['data'=>$data]);
        return $pdf->download('Transaksi.pdf');
    }

}
