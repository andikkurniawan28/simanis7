@extends("template.admin.edit")

@section("title")
    {{ ucwords(str_replace("_", " ", "pemakaian_barang")) }}
@endsection

@section("root")
    {{ route("pemakaian_barang.index") }}
@endsection

@section("form-create")
    <h4>{{ ucwords(str_replace("_", " ", "data_pemakaian_barang")) }}</h4>

    <form action="{{ route("pemakaian_barang.update", $pemakaian_barang->faktur) }}" method="POST">
        @csrf @method("PUT")

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("faktur") }}</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="" name="faktur" value="{{ $pemakaian_barang->faktur }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("tanggal") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="tgl" value="{{ $pemakaian_barang->tgl }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("jatuh tempo") }}</span>
                    </label>
                    <input type="date" class="form-control form-control-solid" placeholder="" name="jthtmp" value="{{ $pemakaian_barang->jthtmp }}" required/>
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
                                @if($pemakaian_barang->kodesc == $customer->kode)
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
                                @if($pemakaian_barang->termin == $termin->kode)
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
                    <input type="text" class="form-control form-control-solid" placeholder="" name="notax" value="{{ $pemakaian_barang->notax }}" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords("pot") }}</span>
                    </label>
                    <select name="pot" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($pots as $pot)
                            <option value="{{ $pot->kode }}"
                                @if($pemakaian_barang->pot == $pot->kode)
                                    {{ "selected" }}
                                @endif
                                >{{ $pot->kode }} | {{ $pot->keterangan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "disc_fkt_(%)")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="disc1" value="{{ $pemakaian_barang->disc1 }}" required/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "ppn_(%)")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="ppn" value="{{ $pemakaian_barang->ppn }}" required/>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "fkt_asli")) }}</span>
                    </label>
                    <input type="text" step="any" class="form-control form-control-solid" placeholder="" name="asli" value="{{ $pemakaian_barang->asli }}"/>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="">{{ ucwords(str_replace("_", " ", "no_PO")) }}</span>
                    </label>
                    <select name="nodo" class="form-control">
                        <option disabled selected value> -- select an option -- </option>
                        @foreach ($order_pemakaian_barangs as $order_pemakaian_barang)
                            <option value="{{ $order_pemakaian_barang->kode }}"
                                @if($pemakaian_barang->nodo == $order_pemakaian_barang->faktur)
                                    {{ "selected" }}
                                @endif
                                >{{ $order_pemakaian_barang->faktur }}</option>
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
                            @if($pemakaian_barang->uang == "IDR") {{ "selected" }} @endif
                        >IDR</option>
                        <option
                            @if($pemakaian_barang->uang == "UDS") {{ "selected" }} @endif
                        >USD</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column mb-7 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                        <span class="required">{{ ucwords(str_replace("_", " ", "kurs")) }}</span>
                    </label>
                    <input type="number" step="any" class="form-control form-control-solid" placeholder="" name="kurs" value="{{ $pemakaian_barang->kurs }}" required/>
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
