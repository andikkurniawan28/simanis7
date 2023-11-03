@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "hutang")) }}
@endsection

@section("root")
    {{ route("hutang.index") }}
@endsection

@section("form-create")
    <form action="{{ route("hutang.update", $hutang->faktur) }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $hutang->faktur }}" readonly/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $hutang->tgl }}"/>
                </div>
            </div>
            {{-- <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tambah / kurang") }}</span>
                    </label>
                    <select name="dk" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="D" @if($hutang->dk == "D") {{ "selected" }} @endif>Debit</option>
                        <option value="K" @if($hutang->dk == "K") {{ "selected" }} @endif>Kredit</option>
                    </select>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("supplier") }}</span>
                    </label>
                    <select name="kodesc" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->kode }}"
                                @if($hutang->kodesc == $supplier->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $supplier->kode }} | {{ $supplier->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("mata uang") }}</span>
                    </label>
                    <select name="uang" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="IDR" @if($hutang->uang == "IDR") {{ "selected" }} @endif>IDR</option>
                        <option value="USD" @if($hutang->uang == "USD") {{ "selected" }} @endif>USD</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kurs") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $hutang->kurs }}" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("jumlah nota") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="subtotal" value="{{ $hutang->subtotal }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("ppn (%)") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $hutang->ppn }}" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("rekening") }}</span>
                    </label>
                    <select name="bank" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($kas_banks as $kas_bank)
                            <option value="{{ $kas_bank->kode }}"
                                @if($hutang->bank == $kas_bank->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $kas_bank->kode }} | {{ $kas_bank->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("keterangan") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $hutang->keterangan }}" />
                    {{-- <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan2" value="{{ $hutang->keterangan2 }}" />
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan3" value="{{ $hutang->keterangan3 }}" /> --}}
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("nama terang") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $hutang->nama }}" required/>
                </div>
            </div>
        </div> --}}

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Simpan</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection

@section("transaksi")
    {{ "active show" }}
@endsection
