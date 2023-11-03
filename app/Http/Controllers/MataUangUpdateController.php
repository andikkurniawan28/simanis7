<?php

namespace App\Http\Controllers;

use App\MataUang;
use Illuminate\Http\Request;

class MataUangUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        MataUang::where("tgl", $request->real_tgl)
            ->where("kode", $request->real_kode)
            ->where("kurs", $request->real_kurs)
            ->where("keterangan", $request->real_keterangan)
            ->update($request->except([
                "_token",
                "_method",
                "real_tgl",
                "real_kode",
                "real_kurs",
                "real_keterangan",
            ]));
        return redirect()->route("mata_uang.index")->with("success", "Data berhasil di update");

    }
}
