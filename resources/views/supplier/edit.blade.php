@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "supplier")) }}
@endsection

@section("root")
    {{ route("supplier.index") }}
@endsection

@section("form-create")
    <form action="{{ route("supplier.update", $supplier->kode) }}" method="POST">
        @csrf @method("PUT")

        <h4>Data Supplier</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $supplier->kode }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $supplier->nama }}" />
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat kantor") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat" value="{{ $supplier->alamat }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat pabrik") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat2" value="{{ $supplier->alamat2 }}" />
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="telp" value="{{ $supplier->telp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="fax" value="{{ $supplier->fax }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kota") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kota" value="{{ $supplier->kota }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kode pos") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kodepos" value="{{ $supplier->kodepos }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="golongan">{{ ucwords("area") }}</span>
                    </label>
                    <select name="golongan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($wilayahs as $wilayah)
                            <option value="{{ $wilayah->kode }}"
                                @if($supplier->golongan == $wilayah->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $wilayah->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="golongan">{{ ucwords("usaha") }}</span>
                    </label>
                    <select name="keterangan" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($usahas as $usaha)
                            <option value="{{ $usaha->kode }}"
                                @if($supplier->keterangan == $usaha->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $usaha->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("status") }}</span>
                    </label>
                    <select name="status" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="Y" @if($supplier->status == "Y") {{ "selected" }} @endif>Ya</option>
                        <option value="T" @if($supplier->status == "T") {{ "selected" }} @endif>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <h4>Contact Person</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="person" value="{{ $supplier->person }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="ptelp" value="{{ $supplier->ptelp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="pfax" value="{{ $supplier->pfax }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ strtoupper("hp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="hp" value="{{ $supplier->hp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("email") }}</span>
                    </label>
                    <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="{{ $supplier->email }}" />
                </div>
            </div>
            <div class="col"></div>
        </div>

        <h4>Data Fiskal</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ strtoupper("npwp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="npwp" value="{{ $supplier->npwp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="namawp" value="{{ $supplier->namawp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("alamat wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="alamatwp" value="{{ $supplier->noac }}" />
                </div>
            </div>
        </div>

        <h4>Pembayaran</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("termin") }}</span>
                    </label>
                    <select name="termin" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($termins as $termin)
                            <option value="{{ $termin->kode }}"
                                @if($supplier->termin == $termin->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $termin->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("diskon (%)") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $supplier->disc1 }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("credit limit") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="plafon" value="{{ $supplier->plafon }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("no ac") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="noac" value="{{ $supplier->noac }}" />
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
