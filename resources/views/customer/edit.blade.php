@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "customer")) }}
@endsection

@section("root")
    {{ route("customer.index") }}
@endsection

@section("form-create")
    <form action="{{ route("customer.update", $customer->kode) }}" method="POST">
        @csrf @method("PUT")

        <h4>Data Customer</h4>
        <hr>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kode") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kode" value="{{ $customer->kode }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $customer->nama }}" />
                </div>
            </div>
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat kantor") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat" value="{{ $customer->alamat }}" />
        </div>

        <div class="d-flex flex-column mb-7 fv-row">
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="">{{ ucwords("alamat kirim") }}</span>
            </label>
            <input type="text" class="form-control form-control-solid" placeholder="" name="alamat2" value="{{ $customer->alamat2 }}" />
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="telp" value="{{ $customer->telp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="fax" value="{{ $customer->fax }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kota") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kota" value="{{ $customer->kota }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("kode pos") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="kodepos" value="{{ $customer->kodepos }}" />
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
                                @if($customer->golongan == $wilayah->kode)
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
                                @if($customer->keterangan == $usaha->kode)
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
                        <option value="Y" @if($customer->status == "Y") {{ "selected" }} @endif>Ya</option>
                        <option value="T" @if($customer->status == "T") {{ "selected" }} @endif>Tidak</option>
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
                    <input type="text" class="form-control form-control-solid" placeholder="" name="person" value="{{ $customer->person }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("telp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="ptelp" value="{{ $customer->ptelp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("fax") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="pfax" value="{{ $customer->pfax }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ strtoupper("hp") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="hp" value="{{ $customer->hp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("email") }}</span>
                    </label>
                    <input type="email" class="form-control form-control-solid" placeholder="" name="email" value="{{ $customer->email }}" />
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
                    <input type="text" class="form-control form-control-solid" placeholder="" name="npwp" value="{{ $customer->npwp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("nama wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="namawp" value="{{ $customer->namawp }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("alamat wajib pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="alamatwp" value="{{ $customer->noac }}" />
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
                                @if($customer->termin == $termin->kode)
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
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $customer->disc1 }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("credit limit") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="plafon" value="{{ $customer->plafon }}" />
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("no ac") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="noac" value="{{ $customer->noac }}" />
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

@section("master")
    {{ "active show" }}
@endsection
