@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "penjualan")) }}
@endsection

@section("root")
    {{ route("penjualan.index") }}
@endsection

@section("form-create")
    <h4>{{ ucwords(str_replace("_", " ", "data_penjualan")) }}</h4>

    <form action="{{ route("penjualan.update", $penjualan->faktur) }}" method="POST">
        @csrf @method("PUT")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $penjualan->faktur }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $penjualan->tgl }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("jatuh tempo") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="jthtmp" value="{{ $penjualan->jthtmp }}" required/>
                </div>
            </div>
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
                                @if($penjualan->kodesc == $customer->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $customer->kode }} | {{ $customer->nama }}</option>
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
                                @if($penjualan->termin == $termin->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $termin->kode }} | {{ $termin->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords("faktu pajak") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="notax" value="{{ $penjualan->notax }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("gudang") }}</span>
                    </label>
                    <select name="gudang" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($gudangs as $gudang)
                            <option value="{{ $gudang->kode }}"
                                @if($penjualan->gudang == $gudang->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $gudang->kode }} | {{ $gudang->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "disc_fkt_(%)")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $penjualan->disc1 }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "ppn_(%)")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $penjualan->ppn }}" required/>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "fkt_asli")) }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="asli" value="{{ $penjualan->asli }}"/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "no_PO")) }}</span>
                    </label>
                    <select name="nodo" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($order_penjualans as $order_penjualan)
                            <option value="{{ $order_penjualan->kode }}"
                                @if($penjualan->nodo == $order_penjualan->faktur)
                                    {{ "selected" }}
                                @endif
                                >{{ $order_penjualan->faktur }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "mata_uang")) }}</span>
                    </label>
                    <select name="uang" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        <option
                            @if($penjualan->uang == "IDR") {{ "selected" }} @endif
                        >IDR</option>
                        <option
                            @if($penjualan->uang == "UDS") {{ "selected" }} @endif
                        >USD</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "kurs")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $penjualan->kurs }}" required/>
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
