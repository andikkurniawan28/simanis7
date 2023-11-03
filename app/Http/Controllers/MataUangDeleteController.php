<?php

namespace App\Http\Controllers;

use App\MataUang;
use Illuminate\Http\Request;

class MataUangDeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        MataUang::where("tgl", $request->tgl)
            ->where("kode", $request->kode)
            ->where("kurs", $request->kurs)
            ->where("keterangan", $request->keterangan)
            ->delete();
        return redirect()->route("mata_uang.index")->with("success", "Data berhasil di hapus");

    }
}
