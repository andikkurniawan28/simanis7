@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "stock")) }}
@endsection

@section("form-create")
    <form action="{{ route("stock.update", $stock->kode) }}" method="POST">
        @csrf @method("PUT")

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required">{{ ucwords("kode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $stock->kode }}" required/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("barcode") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="barcode" value="{{ $stock->barcode }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $stock->nama }}"/>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama2" value="{{ $stock->nama2 }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("deskripsi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama3" value="{{ $stock->nama3 }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("uraian") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama4" value="{{ $stock->nama4 }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("pot") }}</span>
            </label>
            <select name="pot" class="form-control">
                @foreach ($pots as $pot)
                    <option value="{{ $pot->kode }}"
                        @if($stock->pot == $pot->kode)
                            {{ "selected" }}
                        @endif
                    >{{ $pot->keterangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("golongan") }}</span>
            </label>
            <select name="golongan" class="form-control">
                @foreach ($golongans as $golongan)
                    <option value="{{ $golongan->kode }}"
                        @if($stock->golongan == $golongan->kode)
                            {{ "selected" }}
                        @endif
                    >{{ $golongan->keterangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("sub golongan") }}</span>
            </label>
            <select name="subgol" class="form-control">
                @foreach ($sub_golongans as $sub_golongan)
                    <option value="{{ $sub_golongan->kode }}"
                        @if($stock->subgol == $sub_golongan->kode)
                            {{ "selected" }}
                        @endif
                    >{{ $sub_golongan->keterangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("ppn") }}</span>
            </label>
            <select name="ppn" class="form-control">
                <option value="Y" @if($stock->ppn == 'Y') {{ "selected" }} @endif ></option> >Ya</option>
                <option value="T" @if($stock->ppn == 'T') {{ "selected" }} @endif >Tidak</option>
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("warna") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="warna" value="{{ $stock->warna }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("satuan") }}</span>
            </label>
            <select name="satuan" class="form-control">
                @foreach ($satuans as $satuan)
                    <option value="{{ $satuan->kode }}"
                        @if($stock->satuan == $satuan->kode)
                            {{ "selected" }}
                        @endif
                    >{{ $satuan->keterangan }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("isi") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="isi1" value="{{ $stock->isi1 }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("sub satuan") }}</span>
            </label>
            <select name="satuan2" class="form-control">
                @foreach ($satuans as $satuan)
                    <option value="{{ $satuan->kode }}"
                        @if($stock->satuan2 == $satuan->kode)
                            {{ "selected" }}
                        @endif
                    >{{ $satuan->keterangan }}</option>
                @endforeach
            </select>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("harga beli + ppn") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hb" value="{{ $stock->hb }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("harga jual + ppn") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hj" value="{{ $stock->hj }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("harga beli(USD)") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hbu" value="{{ $stock->hbu }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("harga jual(USD)") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="hju" value="{{ $stock->hju }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("minimum saldo") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="min" value="{{ $stock->min }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("maksimum saldo") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="max" value="{{ $stock->max }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("dimensi") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="uk1" value="{{ $stock->uk1 }}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("berat") }}</span>
            </label>
            <input type="number" class="form-control form-control-solid" placeholder="" name="br1" value="{{ $stock->br1 }}"/>
        </div>

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection
