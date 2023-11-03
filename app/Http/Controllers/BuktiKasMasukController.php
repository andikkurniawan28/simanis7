<?php

namespace App\Http\Controllers;

use App\Pot;
use App\BuktiKasMasuk;
use Illuminate\Http\Request;

class BuktiKasMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukti_kas_masuks = BuktiKasMasuk::select(["faktur", "tgl", "rekening", "total", "uang", "kurs"])->orderBy("tgl", "desc")->limit(1000)->get();
        return view("bukti_kas_masuk.index", compact("bukti_kas_masuks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faktur = self::generateFaktur();
        $pots = Pot::all();
        return view("bukti_kas_masuk.create", compact(
            "faktur",
            "pots",
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BuktiKasMasuk::create($request->all());
        return redirect()->route("bukti_kas_masuk.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BuktiKasMasuk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(BuktiKasMasuk $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuktiKasMasuk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $bukti_kas_masuk = BuktiKasMasuk::where("faktur", $faktur)->get()->last();
        $pots = Pot::all();
        return view("bukti_kas_masuk.edit", compact(
            "bukti_kas_masuk",
            "pots",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuktiKasMasuk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        BuktiKasMasuk::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("bukti_kas_masuk.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuktiKasMasuk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        BuktiKasMasuk::where("faktur", $faktur)->delete();
        return redirect()->route("bukti_kas_masuk.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = BuktiKasMasuk::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
        if($faktur_terakhir == NULL){
            $kode = "00";
        } else {
            $kode = substr($faktur_terakhir, 6, 2);
            $kode = (int)$kode + 1;
            if($kode < 10) $kode = "0{$kode}";
        }
        return "PB".date("y").date("m").$kode.date("d");
    }
}
