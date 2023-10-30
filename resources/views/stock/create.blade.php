@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "stock")) }}
@endsection

@section("root")
    {{ route("stock.index") }}
@endsection

@section("form-create")
    <form action="{{ route("stock.store") }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="" required/>
                </div>
            </div>

            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("barcode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="barcode" value=""/>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("nama") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value=""/>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama2" value=""/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("deskripsi") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama3" value=""/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("uraian") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="nama4" value=""/>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("pot") }}</span>
                    </label>
                    <select name="pot" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($pots as $pot)
                            <option value="{{ $pot->kode }}">{{ $pot->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("golongan") }}</span>
                    </label>
                    <select name="golongan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($golongans as $golongan)
                            <option value="{{ $golongan->kode }}">{{ $golongan->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("sub golongan") }}</span>
                    </label>
                    <select name="subgol" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($sub_golongans as $sub_golongan)
                            <option value="{{ $sub_golongan->kode }}">{{ $sub_golongan->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("ppn") }}</span>
                    </label>
                    <select name="ppn" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Y">Ya</option>
                        <option value="T">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("warna") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="warna" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("satuan") }}</span>
                    </label>
                    <select name="satuan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($satuans as $satuan)
                            <option value="{{ $satuan->kode }}">{{ $satuan->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("isi") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="isi1" value=""/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("sub satuan") }}</span>
                    </label>
                    <select name="satuan2" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($satuans as $satuan)
                            <option value="{{ $satuan->kode }}">{{ $satuan->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("status") }}</span>
                    </label>
                    <select name="status" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Y">Ya</option>
                        <option value="T">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("harga beli + ppn") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="hb" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("harga jual + ppn") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="hj" value=""/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("harga beli(USD)") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="hbu" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("harga jual(USD)") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="hju" value=""/>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("minimum saldo") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="min" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("maksimum saldo") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="max" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("dimensi") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="uk1" value=""/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("berat") }}</span>
                    </label>
                    <input type="number" class="form-control form-control-solid" placeholder="" name="br1" value=""/>
                </div>
            </div>
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
