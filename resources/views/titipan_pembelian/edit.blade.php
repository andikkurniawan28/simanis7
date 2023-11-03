@extends("template.admin.create")

@section("title")
    {{ ucwords(str_replace("_", " ", "titipan_pembelian")) }}
@endsection

@section("root")
    {{ route("titipan_pembelian.index") }}
@endsection

@section("form-create")
    <form action="{{ route("titipan_pembelian.update", $titipan_pembelian->faktur) }}" method="POST">
        @csrf @method("POST")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $titipan_pembelian->faktur }}" readonly/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $titipan_pembelian->tgl }}"/>
                </div>
            </div>
            {{-- <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tambah / kurang") }}</span>
                    </label>
                    <select name="dk" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="D" @if($titipan_pembelian->dk == "D") {{ "selected" }} @endif>Debit</option>
                        <option value="K" @if($titipan_pembelian->dk == "K") {{ "selected" }} @endif>Kredit</option>
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
                                @if($titipan_pembelian->kodesc == $supplier->kode)
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
                        <option value="IDR" @if($titipan_pembelian->uang == "IDR") {{ "selected" }} @endif>IDR</option>
                        <option value="USD" @if($titipan_pembelian->uang == "USD") {{ "selected" }} @endif>USD</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("kurs") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $titipan_pembelian->kurs }}" required/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("jumlah nota") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="subtotal" value="{{ $titipan_pembelian->subtotal }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("ppn (%)") }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $titipan_pembelian->ppn }}" required/>
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
                                @if($titipan_pembelian->bank == $kas_bank->kode)
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
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan" value="{{ $titipan_pembelian->keterangan }}" />
                    {{-- <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan2" value="{{ $titipan_pembelian->keterangan2 }}" />
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="keterangan3" value="{{ $titipan_pembelian->keterangan3 }}" /> --}}
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("nama terang") }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="nama" value="{{ $titipan_pembelian->nama }}" required/>
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
