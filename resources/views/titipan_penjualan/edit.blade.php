@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "titipan_penjualan")) }}
@endsection

@section("root")
    {{ route("titipan_penjualan.index") }}
@endsection

@section("form-create")
    <form action="{{ route("titipan_penjualan.update", $titipan_penjualan->faktur) }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $titipan_penjualan->faktur }}" readonly/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $titipan_penjualan->tgl }}"/>
                </div>
            </div>
            {{-- <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tambah / kurang") }}</span>
                    </label>
                    <select name="dk" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="D" @if($titipan_penjualan->dk == "D") {{ "selected" }} @endif>Debit</option>
                        <option value="K" @if($titipan_penjualan->dk == "K") {{ "selected" }} @endif>Kredit</option>
                    </select>
                </div>
            </div> --}}
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("customer") }}</span>
                    </label>
                    <select name="kodesc" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->kode }}"
                                @if($titipan_penjualan->kodesc == $customer->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $customer->kode }} | {{ $customer->nama }}</option>
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
                        <option value="IDR" @if($titipan_penjualan->uang == "IDR") {{ "selected" }} @endif>IDR</option>
                        <option value="USD" @if($titipan_penjualan->uang == "USD") {{ "selected" }} @endif>USD</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kurs") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $titipan_penjualan->kurs }}" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("jumlah nota") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="subtotal" value="{{ $titipan_penjualan->subtotal }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("ppn (%)") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $titipan_penjualan->ppn }}" required/>
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
                                @if($titipan_penjualan->bank == $kas_bank->kode)
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
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $titipan_penjualan->keterangan }}" />
                    {{-- <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan2" value="{{ $titipan_penjualan->keterangan2 }}" />
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan3" value="{{ $titipan_penjualan->keterangan3 }}" /> --}}
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("nama terang") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $titipan_penjualan->nama }}" required/>
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
