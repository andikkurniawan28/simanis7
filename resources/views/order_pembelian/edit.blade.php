@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "order_pembelian")) }}
@endsection

@section("root")
    {{ route("order_pembelian.index") }}
@endsection

@section("form-create")
    <h4>{{ ucwords(str_replace("_", " ", "data_order")) }}</h4>
    <form action="{{ route("order_pembelian.update", $order_pembelian->faktur) }}" method="POST">
        @csrf @method("PUT")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $order_pembelian->faktur }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $order_pembelian->tgl }}" required/>
                </div>
            </div>
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
                                @if($order_pembelian->kodesc == $supplier->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $supplier->kode }} | {{ $supplier->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("termin") }}</span>
                    </label>
                    <select name="termin" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($termins as $termin)
                            <option value="{{ $termin->kode }}"
                                @if($order_pembelian->termin == $termin->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $termin->kode }} | {{ $termin->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "jatuh_tempo")) }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="jthtmp" value="{{ $order_pembelian->jthtmp }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "mata_uang")) }}</span>
                    </label>
                    <select name="uang" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option @if($order_pembelian->uang == "IDR") {{ "selected" }} @endif>IDR</option>
                        <option @if($order_pembelian->uang == "USD") {{ "selected" }} @endif>USD</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "kurs")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $order_pembelian->kurs }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{ ucwords(str_replace("_", " ", "disc_fkt_(%)")) }}</span>
                            </label>
                            <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $order_pembelian->disc1 }}" required/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column mb-7 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                <span class="required">{{ ucwords(str_replace("_", " ", "ppn_(%)")) }}</span>
                            </label>
                            <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $order_pembelian->ppn }}" required/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center pt-0">
            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                <span class="indicator-label">Lanjut Tambah Barang <i class="fa fa-arrow-right"></i></span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>

    </form>
@endsection

@section("transaksi")
    {{ "active show" }}
@endsection
